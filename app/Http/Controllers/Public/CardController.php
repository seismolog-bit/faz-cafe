<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function show($id)
    {
        $card = Card::where('code', $id)->where('status', 1)->first();
        // $card = Card::where('code', $id)->first();

        // dd(explode('/', $card->code)[0]);

        

        // dd($card);

        return view('public.cards.show', compact('card'));
    }
}
