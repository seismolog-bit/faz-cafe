<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(){
        $tables = Table::orderBy('is_billiard', 'DESC')->get();

        return view('admin.tables.index', compact('tables'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'floor' => ['required'],
        ]);

        Table::create($request->all());

        return redirect()->back()->with('success', 'Meja berhasil di perbarui.');
    }
    public function update(Table $table, Request $request){
        $table->update($request->all());

        return redirect()->back()->with('success', 'Meja berhasil di perbarui.');
    }
    public function destroy(Table $table){
        $table->delete();

        return redirect()->route('admin.tables.index')
            ->withSuccess(__('Meja berhasil dihapus.'));
    }
}
