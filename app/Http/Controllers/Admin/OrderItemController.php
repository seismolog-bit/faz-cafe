<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'qty' => ['required'],
            'order_id' => ['required'],
            'product_id' => ['required']
        ]);

        $order = Order::findOrFail($request->order_id);

        $product = Product::findOrFail($request->product_id);

        OrderItem::create([
            'order_id' => $request->order_id,
            'product_id' => $product->id,
            'price' => $product->price,
            'qty' => $request->qty,
            'total' => $product->price * $request->qty,
            'grand_total' => $product->price * $request->qty,
            'duration' => $product->duration ?? 0,
            'is_delivery' => $product->category_id == 1 ? 'finish' : 'pending',
            'note' => $request->note ?? '-'
        ]);

        if($product->duration != 0){
            $order->end_time = Carbon::parse($order->end_time)->addMinutes($product->duration * $request->qty);

            $order->save();
        }

        $this->_update_price($request->order_id);

        return redirect()->back()->with('toast_success', 'Pesanan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'qty' => ['required'],
        ]);

        $item = OrderItem::findOrFail($id);

        $item->qty = $request->qty;
        $item->total = $item->price * $request->qty; 
        $item->grand_total = $item->price * $request->qty; 
        $item->save();

        $this->_update_price($item->order_id);

        return redirect()->back()->with('toast_success', 'Item berhasil diupdate');
    }

    public function destroy($id)
    {
        $item = OrderItem::findOrFail($id);
        $product = Product::findOrFail($item->product_id);
        $order = Order::findOrFail($item->order_id);
        
        $this->_update_price($item->order_id);
        $this->_update_duration($item);
        
        $item->delete();

        return redirect()->back()->with('toast_success', 'Item berhasil dihapus');
    }

    private function _update_price($id)
    {
        $order = Order::findOrFail($id);

        $order->price = $order->order_items->sum('grand_total');
        $order->grand_total = $order->order_items->sum('grand_total');

        $order->save();
    }

    private function _update_duration($item)
    {
        $order = Order::findOrFail($item->order_id);
        $item = OrderItem::findOrFail($item->id);

        $order->duration = Carbon::parse($order->updated_at)->subMinutes($item->duration);
        $order->save();
    }

    public function change_method_payment($id)
    {
        $order_item = OrderItem::findOrFail($id);

        if($order_item->payment_method == 'Cash')
        {
            $order_item->payment_method = 'Transfer';
        }else{
            $order_item->payment_method = 'Cash';
        }

        $order_item->save();

        return redirect()->back()->with('toast_success', 'Payment method has been changed');
    }

    public function payment_method(Request $request, $id)
    {
        $request->validate([
            'payment_method' => ['required']
        ]);

        $order_item = OrderItem::findOrFail($id);

        $order_item->payment = 1;
        $order_item->payment_method = $request->payment_method;

        $order_item->save();

        return redirect()->back()->with('toast_success', 'Payment method has been changed');
    }

    // public function destroy($id)
    // {

    // }

    public function destroy_item($id)
    {
        // dd($id);

        $order_item = OrderItem::findOrFail($id);
        $order_item->delete();

        $order = Order::findOrFail($order_item->order_id);

        // $order->total = $order->order_item->sum('grand_total');
        $order->grand_total = $order->order_items->sum('grand_total');

        $order->save();

        return redirect()->back()->with('toast_success', 'Order item has been destroy');
    }

    public function destroy_payment($id)
    {
        $order_item = OrderItem::findOrFail($id);

        $order_item->payment = 0;
        $order_item->save();

        return redirect()->back()->with('toast_success', 'Payment has been changed');
    }
}
