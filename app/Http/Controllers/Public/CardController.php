<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function show($id)
    {

        $card = Card::where([['code', $id], ['status', 1]])->first();

        if (!$card) {
            return redirect()->route('index')->with('success', 'Kartu nonaktif.');
        }

        $order = $card->order_active;

        return view('public.cards.show', compact('order'));
    }
}
