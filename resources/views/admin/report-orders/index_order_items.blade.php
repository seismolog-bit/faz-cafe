@extends('layouts.admin')

@section('content')
<div class="row gy-3 mb-6 justify-content-between">
    <div class="col-md-9 col-auto">
        <h2 class="mb-2 text-1100">Laporan Transaksi</h2>
        <h5 class="text-700 fw-semi-bold">Laporan penjualan barang</h5>
    </div>
    <div class="col-auto">
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            {{-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">All </a></li> --}}
            <li class="nav-item"><a class="nav-link {{ Route::is('admin.report-orders.index', ['time' => 'today']) ? 'active' : '' }}" href="#">Hari ini </span></a></li>
            <li class="nav-item"><a class="nav-link {{ Route::is('admin.report-orders.index', ['time' => 'yesterday']) ? 'active' : '' }}" href="#">Kemarin </span></a></li>
            <li class="nav-item"><a class="nav-link {{ Route::is('admin.report-orders.index', ['time' => 'week']) ? 'active' : '' }}" href="#">Minggu ini</span></a></li>
            <li class="nav-item"><a class="nav-link {{ Route::is('admin.report-orders.index', ['time' => 'month']) ? 'active' : '' }}" href="#">Bulan ini</span></a></li>
            <li class="nav-item"><a class="nav-link {{ Route::is('admin.report-orders.index') ? 'active' : '' }}" href="#">Semua transaksi </span></a></li>
          </ul>
    </div>
</div>

<p>Maintenance</p>

@endsection