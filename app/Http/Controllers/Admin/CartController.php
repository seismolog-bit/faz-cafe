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

class CartController extends Controller
{

    public function index()
    {
        // $products = Product::orderBy('category_id', 'ASC')->get();
        $carts = \Cart::getContent();

        return view('admin.carts.index', compact('carts'));
    }

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->id);

        // dd($request);

        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'associatedModel' => $product,
            'attributes' => array(
                'image' => $request->note,
            )
        ]);

        return redirect()->back()->withToastSuccess('success', 'Produk berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity,
                ],
            ]
        );
        return redirect()->back()->withToastSuccess('success', 'Jumlah produk berhasil di update');
    }

    public function destroy(Request $request)
    {
        \Cart::remove($request->id);

        return redirect()->back()->withToastSuccess('success', 'Produk berhasil dihapus.');
    }

    public function clear()
    {
        \Cart::clear();

        return redirect()->back()->withToastSuccess('success', 'Produk berhasil dibersihkan.');
    }

    public function process()
    {
        $carts = \Cart::getContent();
        $tables = Table::where('is_active', 0)->get();

        return view('admin.carts.process', compact('carts', 'tables'));
    }

    public function checkout(Request $request)
    {

        $request->validate([
            'table_id' => ['required'],
            'buyer' => ['required'],
            'payment_method' => ['required']
        ]);

        // if(!$request->code)
        // {
        //     return redirect()->back()->with('error', 'Kartu belum di scan');
        // }

        // dd($request);

        if ($request->code) {
            // $card_code = explode('/', $request->code)[4];

            
            $card_check = Card::where('code', 'like', $request->code)->first();
            
            if(empty($card_check))
            {
                return redirect()->back()->with('error', 'QR Code tidak terdaftar');
            }
            
            if($card_check->status)
            {
                return redirect()->back()->with('error', 'Kartu sedang aktif, gunakan kartu yang lainnya.');
            }
            // dd($card_check);
        }

        $order = $this->_saveOrder($request);

        // dd($order);

        $this->_saveOrderItems($order);

        if($order)
        {
            \Cart::clear();

            if ($order->is_billiard) {
                Http::get('https://as-apia.coolkit.cc/v2/smartscene2/webhooks/execute?id='. $order->table->turn_on);
            }

            return redirect()->route('admin.orders.index_active')->withToastSuccess('success', 'Transaksi berhasil dibuat & lampu berhasil dinyalakan.');
        }else{
            return redirect()->back()->withToastError('error', 'Transaksi gagal dibuat!');
        }
    }

    private function _saveOrder($request)
    {
        $durations = 0;

        $table = Table::findOrFail($request->table_id);
        $carts = \Cart::getContent();

        
        foreach ($carts as $item) {
            $durations = $durations + ($item->associatedModel->duration * $item->quantity); 
        }

        if ($request->code) {
            $card = Card::where('code', 'like', $request->code)->first();
            $card->status = 1;
            $card->save();
        }

        // dd($request->payment_method);
        
        
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'invoice' => time(),
            'is_billiard' => $table->is_billiard ? 1 : 0,
            'buyer' => $request->buyer,
            'payment_method' => $request->payment_method,
            'payment_status' => $request->payment_status,
            'table_id' => $request->table_id,
            'card_id' => $card->id ?? null,
            'price' => \Cart::getTotal(),
            'tax' => 0,
            'shipping' => 0,
            'grand_total' => \Cart::getTotal(),
            'order_status' => 'active',
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now()->addMinutes($durations + 10),
        ]);

        // dd($order);

        

        // dd($card);

        $table = Table::findOrFail($order->table_id);
        $table->is_active = 1;
        $table->save();

        // if($order->is_billiard)
        // {
        //     $this->_saveFirebaseOrder($order);
        // }

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
                'duration' => ($item->associatedModel->duration * $item->quantity) ?? 0,
                'payment' => ($order->payment_status == 'Lunas') ? 1 : 0,
                'payment_method' => $order->payment_method,
                'is_delivery' => $product->category_id == 1 ? 'finish' : 'pending',
                'note' => $item->attributes->image,
            ]);
        }
    }
}
