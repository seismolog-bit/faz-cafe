<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Kreait\Firebase\Database;

class CartController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->ref_tablename = 'orders';
    }

    public function index()
    {
        $products = Product::orderBy('category_id', 'ASC')->get();
        $carts = \Cart::getContent();

        return view('admin.carts.index', compact('products', 'carts'));
    }

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->id);

        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'associatedModel' => $product,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        // dd($request);

        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity,
                ],
            ]
        );
        return redirect()->back()->with('success', 'Jumlah produk berhasil di update');
    }

    public function destroy(Request $request)
    {
        \Cart::remove($request->id);

        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }

    public function clear()
    {
        \Cart::clear();

        return redirect()->back()->with('success', 'Produk berhasil dibersihkan.');
    }

    public function process()
    {
        $carts = \Cart::getContent();
        $tables = Table::where('is_active', 0)->get();

        return view('admin.carts.process', compact('carts', 'tables'));
    }

    public function checkout(Request $request)
    {

        // dd($request);
        $request->validate([
            // 'payment_status' => ['required'],
            'table_id' => ['required'],
            'buyer' => ['required'],
            'payment_method' => ['required']
        ]);

        if(!$request->code)
        {
            return redirect()->back()->with('error', 'Kartu belum di scan');
        }

        $card_code = explode('/', $request->code)[4];

        // dd($card_code);

        $card_check = Card::where('code', 'like', $card_code)->first();

        if(!$card_check)
        {
            return redirect()->back()->with('error', 'QR Code tidak terdaftar');
        }

        if($card_check->status)
        {
            return redirect()->back()->with('error', 'Kartu sedang aktif, gunakan kartu yang lainnya.');
        }

        $order = $this->_saveOrder($request);
        $this->_saveOrderItems($order);

        // dd($order);

        if($order)
        {
            \Cart::clear();

            if ($order->table_id == 1 || $order->table_id == 2) {
                Http::get('https://maker.ifttt.com/trigger/turn_on_table_'. $order->table_id .'/json/with/key/dxmlgpnXP6Z1yGMKVQ9s3e');
            }else{
                Http::get('https://maker.ifttt.com/trigger/turn_on_table_'. $order->table_id .'/json/with/key/2u0N-dvWv3gxAYvq1u2RP');
            }

            return redirect()->route('admin.orders.index_active')->with('success', 'Transaksi berhasil dibuat & lampu berhasil dinyalakan.');
        }else{
            return redirect()->back()->with('error', 'Transaksi gagal dibuat!');
        }
    }

    private function _saveOrder($request)
    {
        $card = Card::where('code', 'like', explode('/', $request->code)[4])->first();
        $carts = \Cart::getContent();
        $durations = 0;

        $table = Table::findOrFail($request->table_id);

        foreach ($carts as $item) {
            $durations = $durations + $item->associatedModel->duration; 
        }

        $order = Order::create([
            'user_id' => Auth::user()->id,
            'invoice' => time(),
            'is_billiard' => $table->is_billiard ? 1 : 0,
            'buyer' => $request->buyer,
            'payment_method' => $request->payment_method,
            'payment_status' => $request->payment_status,
            'table_id' => $request->table_id,
            'card_id' => $card->id,
            'price' => \Cart::getTotal(),
            'tax' => 0,
            'shipping' => 0,
            'grand_total' => \Cart::getTotal(),
            'order_status' => 'active',
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now()->addMinutes($durations),
        ]);

        // dd($order);

        $card = Card::findOrFail($order->card_id);
        $card->status = 1;
        $card->save();

        $table = Table::findOrFail($order->table_id);
        $table->is_active = 1;
        $table->save();

        // dd($order);

        return $order;
    }

    private function _saveOrderItems($order)
    {
        $carts = \Cart::getContent();
        foreach ($carts as $item) {

            $product = Product::findOrFail($item->id);

            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'price' => $item->price,
                'qty' => $item->quantity,
                'total' => $item->price * $item->quantity,
                'grand_total' => $item->price * $item->quantity,
                'duration' => $item->associatedModel->duration ?? 0,
                'payment' => ($order->payment_status == 'Lunas') ? 1 : 0,
                'is_delivery' => $product->category_id == 1 ? 'finish' : 'pending',
            ]);

            // reduc stock 
        }
    }

    private function _saveFirebaseOrder($order)
    {   
        $order = [
            'table' => $order->table->name,
            'start_time' => $order->start_time,
            'end_time' => $order->end_time,
            'is_billiard' => $order->is_billiard
        ];

        $postRef = $this->database->getReference($this->ref_tablename)->push($order);
    }
}
