<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
// use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->date) {
            return redirect()->route('admin.reservations.index', ['date' => Carbon::now()->format('d-m-Y')]);
        }

        $time = \DateTime::createFromFormat("d-m-Y", $request->date)->format("Y-m-d");

        $reservations = Reservation::where('reservation_date', $time)->get();

        return view('admin.reservations.index', [
            'reservations' => $reservations,
            'date' => $request->date
        ]);
    }

    public function create()
    {
        $tables = Table::where('is_billiard', 1)->get();

        return view('admin.reservations.create', [
            'tables' => $tables
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'table_id' => ['required'],
            'buyer' => ['required'],
            'down_payment' => ['required'],
            'reservation_date' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],
        ]);

        $reservation = Reservation::create([
            'user_id' => Auth::user()->id,
            'table_id' => $request->table_id,
            'buyer' => $request->buyer,
            'down_payment' => $request->down_payment,
            'reservation_date' => \DateTime::createFromFormat("d/m/Y", $request->reservation_date)->format("Y-m-d"),
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'note' => $request->note ?? '-'
        ]);

        if (!$reservation) {
            return redirect()->back()->with('error', 'Booking gagal dibuat');
        }

        return redirect()->route('admin.reservations.index', ['date' => Carbon::now()->format('d-m-Y')])->with('toast_success', 'Booking berhasil dibuat');
    }

    public function edit($id)
    {
        return view('admin.reservations.edit', [
            'reservation' => Reservation::findOrFail($id),
            'tables' => Table::where('is_billiard', 1)->get()
        ]);
    }

    public function show($id)
    {
        return view('admin.reservations.show', [
            'reservation' => Reservation::findOrFail($id),
            'tables' => Table::where('is_billiard', 1)->get()
        ]);
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('admin.reservations.index', ['date' => Carbon::createFromFormat('Y-m-d', $reservation->reservation_date)->format('d-m-Y')])->with('toast_success', 'Formulir booking berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $reservation->table_id = $request->table_id;
        $reservation->buyer = $request->buyer;
        $reservation->down_payment = $request->down_payment;
        $reservation->reservation_date = \DateTime::createFromFormat("d/m/Y", $request->reservation_date)->format("Y-m-d");
        $reservation->start_time = $request->start_time;
        $reservation->end_time = $request->end_time;
        $reservation->note = $request->note ?? '-';
        
        $reservation->save();

        return redirect()->route('admin.reservations.index', ['date' => Carbon::createFromFormat('Y-m-d', $reservation->reservation_date)->format('d-m-Y')])->with('toast_success', 'Formulir booking berhasil diubah');

    }
}
