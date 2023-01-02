@extends('layouts.front')

@section('content')

{{-- @include('components.app-pwa-install') --}}



<div class="py-3">
    <div class="edit-profile-btn mb-3 px-3">
        <a class="btn btn-primary w-100" href="https://wa.me/6287776112690?text=Hai%20kak.%20Saya%20ingin%20booking%20table:%0AAtas%20Nama:%20....%0ARuangan:%20Non%20Smoking/Smoking%0AJam:%20....%20-%20....%0ADurasi:%20...%20Jam%0A%0A%0AContoh:%0AAtas%20Nama:%20Fulan%0ARuangan:%20Smoking%0AJam:%2010.00%20-%2012.00%0ADurasi:%202%20Jam
        ">
            <i class="fa-solid fa-plus me-2"></i>Booking Tabel
        </a>
    </div>

    <div class="card cart-amount-area mb-3 mx-3">
        <form action="{{ route('bookings') }}">
            <div class="card-body d-flex align-items-center justify-content-between">
                <input class="form-control form-control-sm me-3" type="date" name="date" value="{{ $date }}" required
                    style="height: 35px;">
                <button class="btn btn-warning" type="submit">Tampilkan</button>
            </div>
        </form>
    </div>

    <div class="p-specification bg-white mb-3 py-3">
        <div class="container">
            <h6>Daftar booking Table 1</h6>
            <table>
                <tr>
                    <th>TANGGAL</th>
                    <th>WAKTU</th>
                </tr>
                @forelse ($reservations->where('table_id', 1)->sortBy('start_time') as $reservation)
                <tr>
                    <td>{{ $date }}</td>
                    <td>{{ $reservation->start_time }} - {{ $reservation->end_time }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="2">Tidak ada data booking</td>
                </tr>
                @endforelse
            </table>
            <p><small>*Data yang ditampilkan adalah data yang telah terisi</small></p>
        </div>
    </div>

    <div class="p-specification bg-white mb-3 py-3">
        <div class="container">
            <h6>Daftar booking Table 2</h6>
            <table>
                <tr>
                    <th>TANGGAL</th>
                    <th>WAKTU</th>
                </tr>
                @forelse ($reservations->where('table_id', 2)->sortBy('start_time') as $reservation)
                <tr>
                    <td>{{ $date }}</td>
                    <td>{{ $reservation->start_time }} - {{ $reservation->end_time }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="2">Tidak ada data booking</td>
                </tr>
                @endforelse
            </table>
            
            <p><small>*Data yang ditampilkan adalah data yang telah terisi</small></p>
        </div>
    </div>

    <div class="p-specification bg-white mb-3 py-3">
        <div class="container">
            <h6>Daftar booking Table 3</h6>
            <table>
                <tr>
                    <th>TANGGAL</th>
                    <th>WAKTU</th>
                </tr>
                @forelse ($reservations->where('table_id', 3)->sortBy('start_time') as $reservation)
                <tr>
                    <td>{{ $date }}</td>
                    <td>{{ $reservation->start_time }} - {{ $reservation->end_time }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="2">Tidak ada data booking</td>
                </tr>
                @endforelse
            </table>
            
            <p><small>*Data yang ditampilkan adalah data yang telah terisi</small></p>
        </div>
    </div>

    <div class="p-specification bg-white mb-3 py-3">
        <div class="container">
            <h6>Daftar booking Table 4</h6>
            <table>
                <tr>
                    <th>TANGGAL</th>
                    <th>WAKTU</th>
                </tr>
                @forelse ($reservations->where('table_id', 4)->sortBy('start_time') as $reservation)
                <tr>
                    <td>{{ $date }}</td>
                    <td>{{ $reservation->start_time }} - {{ $reservation->end_time }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="2">Tidak ada data booking</td>
                </tr>
                @endforelse
            </table>

            
            <p><small>*Data yang ditampilkan adalah data yang telah terisi</small></p>
        </div>
    </div>
</div>

@endsection

@section('script')
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        font-size: 13px;
        color: black;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
@endsection