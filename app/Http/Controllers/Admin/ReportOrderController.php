<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportOrderController extends Controller
{
    public function index(Request $request)
    {
        // dd(Carbon::yesterday());
        $orders = Order::orderBy('id', 'desc')->get();
        $order_items = OrderItem::get();
        $payment_cash = OrderItem::where('payment_method', 'Cash')->sum('grand_total');
        $payment_transfer = OrderItem::where('payment_method', 'Transfer')->sum('grand_total');

        if ($request->time == 'today') {
            $orders = Order::orderBy('id', 'desc')->whereDate('created_at', Carbon::today())->get();
            $order_items = OrderItem::whereDate('created_at', Carbon::today())->get();
            $payment_cash = OrderItem::where('payment_method', 'Cash')->whereDate('created_at', Carbon::today())->sum('grand_total');
            $payment_transfer = OrderItem::where('payment_method', 'Transfer')->whereDate('created_at', Carbon::today())->sum('grand_total');
        }

        if ($request->time == 'yesterday') {
            // $yesterday = date("Y-m-d", strtotime( '-1 days' ) );
            
            $orders = Order::orderBy('id', 'desc')->whereDate('created_at', Carbon::yesterday())->get();
            $order_items = OrderItem::whereDate('created_at', Carbon::yesterday())->get();
            $payment_cash = OrderItem::where('payment_method', 'Cash')->whereDate('created_at', Carbon::yesterday())->sum('grand_total');
            $payment_transfer = OrderItem::where('payment_method', 'Transfer')->whereDate('created_at', Carbon::yesterday())->sum('grand_total');
        }

        if ($request->time == 'week') {
            Carbon::setWeekStartsAt(Carbon::TUESDAY);
            Carbon::setWeekEndsAt(Carbon::SUNDAY);

            $orders = Order::orderBy('id', 'desc')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
            $order_items = OrderItem::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
            $payment_cash = OrderItem::where('payment_method', 'cash')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('grand_total');
            $payment_transfer = OrderItem::where('payment_method', 'transfer')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('grand_total');
        }
        
        if ($request->time == 'month') {
            $orders = Order::orderBy('id', 'desc')->whereMonth('created_at', Carbon::now()->month)->get();
            $order_items = OrderItem::whereMonth('created_at', Carbon::now()->month)->get();
            $payment_cash = OrderItem::where('payment_method', 'cash')->whereMonth('created_at', Carbon::now()->month)->sum('grand_total');
            $payment_transfer = OrderItem::where('payment_method', 'transfer')->whereMonth('created_at', Carbon::now()->month)->sum('grand_total');
        }

        // dd($order_items->where('order_id', 141)->where('payment_method', 'Cash')->sum('grand_total'));

        return view('admin.report-orders.index', compact('orders', 'payment_cash', 'payment_transfer', 'order_items'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('admin.report-orders.show', compact('order'));
    }
}
