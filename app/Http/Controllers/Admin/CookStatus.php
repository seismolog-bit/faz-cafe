<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class CookStatus extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->ref_order_items = 'order_items';
        $this->ref_order_deliverys = 'order_deliverys';
    }

    public function index()
    {
        // $order_items = OrderItem::where('is_delivery', 'pending')->get();
        $order_items = $this->database->getReference($this->ref_order_items)->getValue();

        return view('admin.cooks.index', compact('order_items'));
    }

    public function delivery()
    {
        $order_items = $this->database->getReference($this->ref_order_deliverys)->getValue();

        // dd($order_items[0]->product->name);

        return view('admin.cooks.delivery', compact('order_items'));
    }

    public function update($id)
    {
        $ref_child = $this->database->getReference($this->ref_order_items)->getChild($id)->getValue();

        $item = OrderItem::findOrFail($ref_child['id']);
        $item->is_delivery = 'delivery';
        $item->save();

        $ref_delivery = [
            'id' => $ref_child['id'],
            'product' => $ref_child['product'],
            'buyer' => $ref_child['buyer'],
            'qty' => $ref_child['qty'],
            'table' => $ref_child['table'],
            'floor' => $ref_child['floor'],
            'is_delivery' => 'delivery',
        ];

        $this->database->getReference($this->ref_order_deliverys)->push($ref_delivery);
        $this->database->getReference($this->ref_order_items. '/' . $id)->remove();

        return redirect()->back()->with('toast_success', 'Pesanan berhasil diselesaikan');
    }

    public function finish($id)
    {
        $ref_child = $this->database->getReference($this->ref_order_deliverys)->getChild($id)->getValue();

        $item = OrderItem::findOrFail($ref_child['id']);

        $item->is_delivery = 'finish';
        $item->save();

        $this->database->getReference($this->ref_order_deliverys. '/' . $id)->remove();

        return redirect()->back()->with('toast_success', 'Pesanan berhasil diselesaikan');
    }
}
