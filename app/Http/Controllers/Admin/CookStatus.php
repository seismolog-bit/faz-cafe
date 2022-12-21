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
        
        return view('admin.cooks.index', [
            'category_data' => $request->category
        ]);
    }

    public function fetch_item_order(Request $request)
    {
        $order_items = OrderItem::where([['is_delivery', '!=', 'delivery'], ['is_delivery', '!=', 'finish']])->get();

        if ($request->category == 'minuman') {
            $order_items = OrderItem::with('product')->whereHas('product', function ($query) {
                $query->where('category_id', 3);
                $query->where([['is_delivery', '!=', 'delivery'], ['is_delivery', '!=', 'finish']]);
            })->get();
        }
        if ($request->category == 'makanan') {
            $order_items = OrderItem::with('product')->whereHas('product', function ($query) {
                $query->where('category_id', 2);
                $query->where([['is_delivery', '!=', 'delivery'], ['is_delivery', '!=', 'finish']]);
            })->get();
        }

        return view('admin.cooks.data-index', compact('order_items'));
    }

    public function fetch_item_delivery(Request $request)
    {
        $order_items = OrderItem::where('is_delivery', 'delivery')->get();

        return view('admin.cooks.data-delivery', compact('order_items'));
    }

    public function delivery()
    {
        return view('admin.cooks.delivery');
    }

    public function update($id)
    {
        // $ref_child = $this->database->getReference($this->ref_order_items)->getChild($id)->getValue();

        $item = OrderItem::findOrFail($id);
        $item->is_delivery = 'delivery';
        $item->save();

        return redirect()->back()->with('toast_success', 'Pesanan berhasil diselesaikan');
    }

    public function cooking($id)
    {
        // $ref_child = $this->database->getReference($this->ref_order_items)->getChild($id)->getValue();

        $item = OrderItem::findOrFail($id);
        $item->is_delivery = 'cooking';
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
