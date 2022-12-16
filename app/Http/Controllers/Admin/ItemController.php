<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('admin.items.index', compact('items'));
    }

    public function create()
    {
        return view('admin.items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            // 'qty' => ['required'],
            'unit' => ['required'],
            // 'price' => ['required'],
            // 'stock' => ['required'],
        ]);

        // dd($request);

        Item::create($request->all());

        return redirect()->route('admin.items.index')->with('success', 'Barang berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $item->name = $request->name;
        $item->unit = $request->unit;

        $item->save();

        return redirect()->back()->with('success', 'Barang berhasil diperbarui');
    }
}
