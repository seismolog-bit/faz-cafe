<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Putaway;
use Illuminate\Http\Request;

class PutawayController extends Controller
{
    public function index()
    {
        $putaways = Putaway::orderBy('id', 'desc')->get();

        return view('admin.putaways.index', compact('putaways'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'note' => ['required'],
        ]);

        $putaways = Putaway::create($request->all());

        if ($putaways) {
            return redirect()->route('admin.putaways.edit', $putaways)->with('success', 'Pengurangan barang berhasil dibuat, tambahkan barang.');
        }else{
            return redirect()->back()->with('error', 'Pengurangan barang gagal dibuat!');
        }
    }

    public function edit($id)
    {
        $putaway = Putaway::findOrFail($id);
        $items = Item::all();

        return view('admin.putaways.edit', compact('putaway', 'items'));
    }

    public function invoice($id)
    {
        $putaway = Putaway::findOrFail($id);

        return view('admin.putaways.invoice', compact('putaway'));
    }

    public function show($id)
    {
        $putaway = Putaway::findOrFail($id);

        return view('admin.putaways.show', compact('putaway'));
    }
}
