<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportOrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::orderBy('id', 'desc')->get();

        if ($request->time == 'today') {
            $orders = Order::orderBy('id', 'desc')->whereDate('created_at', Carbon::today())->get();
        }

        if ($request->time == 'yesterday') {
            
            $orders = Order::orderBy('id', 'desc')->whereDate('created_at', Carbon::yesterday())->get();
        }

        if ($request->time == 'week') {
            Carbon::setWeekStartsAt(Carbon::TUESDAY);
            Carbon::setWeekEndsAt(Carbon::SUNDAY);

            $orders = Order::orderBy('id', 'desc')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        }
        
        if ($request->time == 'month') {
            $orders = Order::orderBy('id', 'desc')->whereMonth('created_at', Carbon::now()->month)->get();
        }

        $order_items = OrderItem::whereIn('order_id', $orders->pluck('id'))->get();

        return view('admin.report-orders.index', compact('orders', 'order_items'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('admin.report-orders.show', compact('order'));
    }
}
