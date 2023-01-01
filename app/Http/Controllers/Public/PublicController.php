<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderRealtime;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

use function Sodium\compare;

class PublicController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->ref_orders = 'orders';
    }
    
    public function index()
    {
        $products = Product::where('archive', 0)->get();

        return view('welcome', [
            'products' => $products,
            'categories' => ProductCategory::all()
        ]);
    }

    public function table_time()
    {

        $orders= [];

        return view('public.table-time', compact('orders'));
    }

    public function fetch_order(){
        $datas = Order::where('is_billiard', 1)->where('order_status', 'active')->get();

        return view('public.fetch-order', compact('datas'));
    }
}
