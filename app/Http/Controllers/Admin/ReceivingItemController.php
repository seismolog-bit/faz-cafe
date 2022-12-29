<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\ReceivingItem;
use Illuminate\Http\Request;

class ReceivingItemController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'receiving_id' => ['required'],
            'item_id' => ['required'],
            'qty' => ['required'],
            'price' => ['required'],
        ]);

        $receiving = ReceivingItem::create([
            'receiving_id' => $request->receiving_id,
            'item_id' => $request->item_id,
            'qty' => $request->qty,
            'price' => $request->price,
            'total' => $request->price,
        ]);

        $this->_increase_stock($receiving);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'qty' => ['required'],
            'price' => ['required'],
        ]);

        
        $receiving = ReceivingItem::findOrFail($id);
        $old_qty = $receiving->qty;
        // dd($receiving);
        $receiving->qty = $request->qty;
        $receiving->price = $request->price;
        $receiving->save();

        $item = Item::findOrFail($receiving->item_id);

        $item->stock = $item->stock - $request->qty;
        $item->save();

        Inventory::create([
            'item_id' => $receiving->item_id,
            'received' => ($request->qty > $receiving->qty) ? $request->qty : 0,
            'putaways' => ($request->qty < $receiving->qty) ? $receiving->qty - $request->qty : 0,
            'qty' => $item->stock,
            'note' => 'Perubahan item belanja'
        ]);

        return redirect()->back();



    }

    public function destroy($receiving_item)
    {
        $rec_item = ReceivingItem::findOrFail($receiving_item);
        $item = Item::findOrFail($rec_item->item_id);

        $item->stock = $item->stock - $rec_item->qty;
        $item->save();

        Inventory::create([
            'item_id' => $rec_item->item_id,
            'putaways' => $rec_item->qty,
            'qty' => $item->stock,
            'note' => 'Pembatalan belanja barang'
        ]);

        $rec_item->delete();
        
        return redirect()->back();
    }

    private function _increase_stock($receiving_item)
    {
        // dd($receiving_item);

        $item = Item::findOrFail($receiving_item->item_id);
        // dd($receiving);
        $item->stock = $item->stock + $receiving_item->qty;
        $item->save();

        Inventory::create([
            'item_id' => $receiving_item->item_id,
            'received' => $receiving_item->qty,
            'qty' => $item->stock,
            'note' => 'Belanja barang'
        ]);
    }

    private function _decrease_stock($receiving_item)
    {
        $item = Item::findOrFail($receiving_item);
        // dd($item);
        $item->stock = $item->stock - $receiving_item->qty;
        $item->save();

        Inventory::create([
            'item_id' => $item->id,
            'received' => $receiving_item->qty,
            'qty' => $item->stock,
            'note' => 'Pembatalan belanja barang'
        ]);
    }
}
