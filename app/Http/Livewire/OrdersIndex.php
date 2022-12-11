<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrdersIndex extends Component
{
    public function render()
    {
        $orders = Order::where('order_status', 'active')->where('is_billiard', 1)->get();

        return view('livewire.orders-index', [
            'orders' => $orders 
        ]);
    }
}
