<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderRealtime;
use App\Models\Product;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class PublicController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->ref_orders = 'orders';
    }
    
    public function index()
    {
        $products = Product::all();

        return view('welcome', compact('products'));
    }

    public function table_time()
    {   
        $orders = $this->database->getReference($this->ref_orders)->getValue();

        return view('public.table-time', compact('orders'));
    }
}
