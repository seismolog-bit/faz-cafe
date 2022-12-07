<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return view('admin.cards.index', compact('cards'));
    }

    public function create()
    {
        return view('admin.cards.create');
    }

    public function store(Request $request)
    {
        $request->validate(['code' => ['required']]);

        if (!Card::where('code', $request->code)->get()->isEmpty()) {
            return redirect()->back()->with('error', 'Kartu telah teregistrasi');
        }

        // dd($card_check);

        Card::create($request->all());

        return redirect()->route('admin.cards.index')->with('success', 'Kartu berhasil diregistrasi.');
    }
}
