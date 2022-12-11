<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderRealtime;
use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('welcome', compact('products'));
    }

    public function table_time()
    {   
        $orders = Order::where('order_status', 'active')->where('is_billiard', 1)->get();

        $order_realtimes = OrderRealtime::all();

        return view('public.table-time', compact('orders', 'order_realtimes'));
    }
}
