<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class CookStatus extends Controller
{
    public function index(Request $request)
    {
        $order_items = OrderItem::where('is_delivery', 'pending')->get();

        if ($request->category == 'minuman') {
            $order_items = OrderItem::with('product')->whereHas('product', function ($query) {
                $query->where('category_id', 3);
                $query->where('is_delivery', 'pending');
            })->get();
        }

        // dd($order_items);

        return view('admin.cooks.index', compact('order_items'));
    }

    public function delivery()
    {
        $order_items = OrderItem::where('is_delivery', 'delivery')->get();

        return view('admin.cooks.delivery', compact('order_items'));
    }

    public function update($id)
    {
        // $ref_child = $this->database->getReference($this->ref_order_items)->getChild($id)->getValue();

        $item = OrderItem::findOrFail($id);
        $item->is_delivery = 'delivery';
        $item->save();

        return redirect()->back()->with('toast_success', 'Pesanan berhasil diselesaikan');
    }

    public function finish($id)
    {
        // $ref_child = $this->database->getReference($this->ref_order_deliverys)->getChild($id)->getValue();

        $item = OrderItem::findOrFail($id);

        $item->is_delivery = 'finish';
        $item->save();

        // $this->database->getReference($this->ref_order_deliverys. '/' . $id)->remove();

        return redirect()->back()->with('toast_success', 'Pesanan berhasil diselesaikan');
    }
}
