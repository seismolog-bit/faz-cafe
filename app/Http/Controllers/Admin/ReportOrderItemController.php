<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportOrderItemController extends Controller
{
    public function index(Request $request)
    {
        $order_items = OrderItem::orderBy('id', 'desc')->get();

        if ($request->time == 'today') {
            $order_items = OrderItem::orderBy('id', 'desc')->whereDate('created_at', Carbon::today())->get();
        }

        if ($request->time == 'yesterday') {
            $order_items = OrderItem::orderBy('id', 'desc')->whereDate('created_at', Carbon::yesterday())->get();
        }

        if ($request->time == 'week') {
            Carbon::setWeekStartsAt(Carbon::TUESDAY);
            Carbon::setWeekEndsAt(Carbon::SUNDAY);

            $order_items = OrderItem::orderBy('id', 'desc')->whereDate('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        }
        
        if ($request->time == 'month') {
            $order_items = OrderItem::orderBy('id', 'desc')->whereMonth('created_at', Carbon::now()->month)->get();
        }
        return view('admin.report-order-items.index', compact('order_items'));
    }
}
