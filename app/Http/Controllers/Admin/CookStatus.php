<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CookStatus extends Controller
{
    public function index()
    {
        $order_items = OrderItem::where('is_delivery', 'pending')->get();

        // dd($order_items[0]->product->name);

        return view('admin.cooks.index', compact('order_items'));
    }

    public function delivery()
    {
        $order_items = OrderItem::where('is_delivery', 'delivery')->get();

        // dd($order_items[0]->product->name);

        return view('admin.cooks.delivery', compact('order_items'));
    }

    public function update($id)
    {
        $item = OrderItem::findOrFail($id);

        $item->is_delivery = 'delivery';
        $item->save();

        return redirect()->back()->with('toast_success', 'Pesanan berhasil diselesaikan');
    }

    public function finish($id)
    {
        $item = OrderItem::findOrFail($id);

        $item->is_delivery = 'finish';
        $item->save();

        return redirect()->back()->with('toast_success', 'Pesanan berhasil diselesaikan');
    }
}
