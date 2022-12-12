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

// use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function index(Request $request) 
    {
        $orders = Order::orderBy('id', 'DESC')->get();

        $status = false;

        if ($request->status) {
            $orders = Order::orderBy('id', 'DESC')->where('order_status', 'active')->get();
            $status = true;
        }

        // dd($orders);

        return view('admin.orders.index', compact('orders', 'status'));
    }

    public function index_active()
    {
        $orders = Order::orderBy('id', 'DESC')->where('order_status', 'active')->get();
        return view('admin.orders.index-active', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $products = Product::orderBy('category_id', 'ASC')->get();
        return view('admin.orders.edit', compact('order', 'products'));
    }

    public function checkout(Order $order)
    {
        return view('admin.orders.checkout', compact('order'));
    }

    public function finish(Order $order, Request $request)
    {
        $request->validate([
            'payment_method' => ['required']
        ]);

        $order->payment_method = $request->payment_method;
        $order->order_status = 'finish';
        $order->save();
        
        $table = Table::findOrFail($order->table_id);
        $table->is_active = 0;
        $table->save();

        $card = Card::findOrFail($order->card_id);
        $card->status = 0;
        $card->save();
        
        if ($order->is_billiard) {
            Http::get('https://as-apia.coolkit.cc/v2/smartscene2/webhooks/execute?id='. $order->table->turn_off);
        }

        $this->_item_finish($order->id);

        return redirect()->route('admin.orders.index_active')->with('success', 'Transaksi berhasil diselesaikan.');
    }

    public function receipt(Order $order)
    {
        return view('admin.orders.receipt', compact('order'));
    }

    private function _item_finish($id)
    {
        $items = OrderItem::where('order_id', $id)->get();

        foreach ($items as $item) {
            $item->payment = 1;
            $item->is_delivery = 'finish';

            $item->save();
        }
    }

    public function create()
    {
        $billiards = Order::where('is_billiard', 1)->get();
        $cafes = Order::where('is_billiard', 0)->get();
        return view('admin.orders.create', compact('billiards', 'cafes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'card_id' => ['required'],
            'buyer' => ['required'],
            'table_id' => ['required'],
            'product_id' => ['required']
        ]);

        // dd($request);

        $product = Product::findOrFail($request->product_id);

        $order = $this->_saveOrder($request, $product);

        $this->_saveOrderItems($order, $product, 1);

        $this->_orderUpdatePrice($order->id);

        return redirect()->route('admin.orders.index', ['status' => 'active'])->with('success', 'Order berhasil dibuat');
    }
    
    public function create_activate()
    {
        return view('admin.orders.create_activate');
    }

    public function create_validation(Request $request)
    {
        $request->validate([
            'code' => ['required']
        ]);

        $card = Card::where('code', $request->code)->first();
        $products = Product::where('category_id', 1)->get();
        $tables = Table::where('is_active', 0)->where('is_billiard', 1)->get();

        if ($card == null) {
            return redirect()->back()->with('error', 'QR Code tidak terregistrasi, harap melakukan scan qr yang valid');
        }
        
        if($card->status)
        {
            return redirect()->back()->with('error', 'Kartu sedang aktif, gunakan kartu yang lain.');
        }

        return view('admin.orders.create_validation', compact('card', 'products', 'tables'));
    }

    private function _saveOrder($request, $product)
    {
        $table = Table::findOrFail($request->table_id);

        $order = Order::create([
            'user_id' => Auth::user()->id,
            'invoice' => time(),
            'is_billiard' => $table->is_billiard ? 1 : 0,
            'buyer' => $request->buyer,
            'table_id' => $request->table_id,
            'card_id' => $request->card_id,
            'price' => 0,
            'tax' => 0,
            'shipping' => 0,
            'grand_total' => 0,
            'order_status' => 'active',
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now()->addMinutes($product->duration),
        ]);

        $card = Card::findOrFail($request->card_id);
        $card->status = 1;
        $card->save();

        $table = Table::findOrFail($request->table_id);
        $table->is_active = 1;
        $table->save();

        return $order;
    }

    private function _saveOrderItems($order, $product, $qty)
    {
        return OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'price' => $product->price,
            'qty' => $qty,
            'total' => $product->price * $qty,
            'grand_total' => ($product->price * $qty),
            'duration' => $product->duration ?? 0,
        ]);
    }

    private function _orderUpdatePrice($id)
    {
        $order = Order::findOrFail($id);
        $order->price = OrderItem::where('order_id', $id)->sum('grand_total');
        $order->grand_total = OrderItem::where('order_id', $id)->sum('grand_total');

        $order->save();
    }
}
