<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderRealtime;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;

use function Sodium\compare;

class PublicController extends Controller
{
    
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

    public function live_table()
    {
        return view('public.live-table', [
            'orders' => Order::where('is_billiard', 1)->where('order_status', 'active')->orderBy('table_id', 'ASC')->get(),
        ]);
    }

    public function bookings_index(Request $request)
    {
        if (!$request->date) {
            return redirect()->route('bookings', ['date' => Carbon::now()->format('Y-m-d')]);
        }

        // $time = \DateTime::createFromFormat("d-m-Y", $request->date)->format("Y-m-d");
        $reservations = Reservation::where('reservation_date', $request->date)->get();

        return view('public.bookings.index', [
            'reservations' => $reservations,
            'date' => $request->date
        ]);
    }

    public function profil()
    {
        return view('public.profil.index');
    }

}
