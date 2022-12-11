<?php

namespace App\Http\Livewire;

use App\Models\Card;
use App\Models\Order;
use App\Models\Table;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrdersCreate extends Component
{
    // public $user_id;
    public $buyer;
    public $payment_method;
    public $payment_status;
    public $table_id;
    public $code;

    public function render()
    {
        $carts = \Cart::getContent();
        $tables = Table::where('is_active', 0)->get();
        return view('livewire.orders-create', compact('carts', 'tables'));
    }

    public function submit()
    {
        dd($this->buyer);

        $table = Table::findOrFail($this->table_id);
        
        $card_code = explode('/', $this->code)[4];
        // $card_check = Card::where('code', 'like', $card_code)->first();

        $carts = \Cart::getContent();

        $durations = 0;
        foreach ($carts as $item) {
            $durations = $durations + $item->associatedModel->duration; 
        }

        $order = Order::create([
            'user_id' => Auth::user()->id,
            'invoice' => time(),
            'is_billiard' => $table->is_billiard ? 1 : 0,
            'buyer' => $this->buyer,
            'payment_method' => $this->payment_method,
            'payment_status' => $this->payment_method,
            'table_id' => $this->table_id,
            'card_id' => $this->card_code->id,
            'price' => \Cart::getTotal(),
            'tax' => 0,
            'shipping' => 0,
            'grand_total' => \Cart::getTotal(),
            'order_status' => 'active',
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now()->addMinutes($durations),
        ]);

        
    }
}
