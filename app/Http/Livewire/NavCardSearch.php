<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class NavCardSearch extends Component
{
    public $search = '';
    // public $cards;

    public function render()
    {
        // if ($this->search) {
        //     $this->cards = Card::where('code', 'like', '%' . $this->search . '%' )->get(); 
        // }
        return view('livewire.nav-card-search', [
            'cards' => Card::where([['code', 'like', '%' . $this->search . '%'], ['status', 1]])->get()
        ]);
    }
}
