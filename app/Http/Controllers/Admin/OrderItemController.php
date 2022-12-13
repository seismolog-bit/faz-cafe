<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class OrderItemController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->ref_order_items = 'order_items';
    }

    public function store(Request $request)
    {
        $request->validate([
            'qty' => ['required'],
            'order_id' => ['required'],
            'product_id' => ['required']
        ]);

        $order = Order::findOrFail($request->order_id);

        $product = Product::findOrFail($request->product_id);

        $order_item = OrderItem::create([
            'order_id' => $request->order_id,
            'product_id' => $product->id,
            'price' => $product->price,
            'qty' => $request->qty,
            'total' => $product->price * $request->qty,
            'grand_total' => $product->price * $request->qty,
            'duration' => $product->duration ?? 0,
            'is_delivery' => $product->category_id == 1 ? 'finish' : 'pending',
        ]);

        if ($product->category_id != 1) {
            $ref_order_item = [
                'id' => $order_item->id,
                'product' => $product->name,
                'buyer' => $order->buyer,
                'qty' => $request->qty,
                'table' => $order->table->name,
                'floor' => $order->table->name,
                'is_delivery' => 'pending',
            ];
    
            $this->database->getReference($this->ref_order_items)->push($ref_order_item);
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

        $item->delete();

        $this->_update_price($item->order_id);

        return redirect()->back()->with('toast_success', 'Item berhasil dihapus');
    }

    private function _update_price($id)
    {
        $order = Order::findOrFail($id);

        $order->price = $order->order_items->sum('grand_total');
        $order->grand_total = $order->order_items->sum('grand_total');

        $order->save();
    }
}
