<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\PutawayItem;
use Illuminate\Http\Request;

class PutawayItemController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'putaway_id' => ['required'],
            'item_id' => ['required'],
            'qty' => ['required']
        ]);

        $item_stock = Item::findOrFail($request->item_id);

        $item_stock->stock = $item_stock->stock - $request->qty;
        $item_stock->save();

        $item = PutawayItem::create([
            'putaway_id' => $request->putaway_id,
            'item_id' => $request->item_id,
            'qty' => $request->qty,
        ]);

        if ($item) {
            Inventory::create([
                'item_id' => $item->item_id,
                'putaways' => $item->qty,
                'qty' => $item_stock->stock,
                'note' => 'Pengeluaran barang BK-' . $item->id
            ]);
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $putaway_item = PutawayItem::findOrFail($id);

        $item_stock = Item::findOrFail($putaway_item->item_id);
        $item_stock->stock = $item_stock->stock + $putaway_item->qty;
        $item_stock->save();

        Inventory::create([
            'item_id' => $item_stock->id,
            'received' => $putaway_item->qty,
            'qty' => $item_stock->stock,
            'note' => 'Pembatalan barang BK-' . $putaway_item->putaway_id
        ]);

        $putaway_item->delete();

        return redirect()->back();
    }
}
