@extends('layouts.admin')

@section('content')
<div class="row gy-3 mb-6 justify-content-between">
    <div class="col-md-9 col-auto">
        <h2 class="mb-2 text-1100">Laporan Transaksi</h2>
        <h5 class="text-700 fw-semi-bold">Laporan transaksi penjualan</h5>
    </div>
    <div class="col-auto">
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            {{-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">All </a></li> --}}
            <li class="nav-item"><a class="nav-link {{ Route::is('admin.report-orders.index', ['time' => 'today']) ? 'active' : '' }}" href="{{ route('admin.report-orders.index', ['time' => 'today']) }}">Hari ini </span></a></li>
            <li class="nav-item"><a class="nav-link {{ Route::is('admin.report-orders.index', ['time' => 'yesterday']) ? 'active' : '' }}" href="{{ route('admin.report-orders.index', ['time' => 'yesterday']) }}">Kemarin </span></a></li>
            <li class="nav-item"><a class="nav-link {{ Route::is('admin.report-orders.index', ['time' => 'week']) ? 'active' : '' }}" href="{{ route('admin.report-orders.index', ['time' => 'week']) }}">Minggu ini</span></a></li>
            <li class="nav-item"><a class="nav-link {{ Route::is('admin.report-orders.index', ['time' => 'month']) ? 'active' : '' }}" href="{{ route('admin.report-orders.index', ['time' => 'month']) }}">Bulan ini</span></a></li>
            <li class="nav-item"><a class="nav-link {{ Route::is('admin.report-orders.index') ? 'active' : '' }}" href="{{ route('admin.report-orders.index') }}">Semua transaksi </span></a></li>
          </ul>
    </div>
</div>

<div class="mb-3 gy-6">
    <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
        <div class="col-12 col-sm-6 col-md-3">
            <a href="#" class="d-flex align-items-center text-decoration-none">
                {{-- <span class="fs-4 lh-1 uil shopping-bag text-primary-500"></span> --}}
                <i class="fs-4 lh-1 fa-solid fa-cart-shopping text-primary-500"></i>
                <div class="ms-2">
                    <h2 class="mb-0">{{ $orders->count() }}
                        <span class="fs-1 fw-semi-bold text-900 ms-2">Transaksi</span>
                    </h2>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <a href="#"
                class="d-flex align-items-center text-decoration-none">
                <span class="fs-4 lh-1 uil uil-rocket text-success-500"></span>
                <div class="ms-2">
                    <h2 class="mb-0">{{ $orders->where('order_status', 'active')->count() }}
                        <span class="fs-1 fw-semi-bold text-900 ms-2">Transaksi Aktif</span>
                    </h2>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <a href="#"
                class="d-flex align-items-center text-decoration-none">
                {{-- <span class="fs-4 lh-1 uil uil-cash text-warning-500"></span> --}}
                <i class="fs-4 lh-1 fa-solid fa-money-bill text-warning-500"></i>
                <div class="ms-2">
                    <h2 class="mb-0"> {{ number_format($payment_cash) }}
                        <span class="fs-1 fw-semi-bold text-900 ms-2">Cash</span>
                    </h2>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <a href="#"
                class="d-flex align-items-center text-decoration-none">
                <span class="fs-4 lh-1 uil uil-wallet text-danger-500"></span>
                <div class="ms-2">
                    <h2 class="mb-0">{{ number_format($payment_transfer) }}
                        <span class="fs-1 fw-semi-bold text-900 ms-2">Transfer</span>
                    </h2>
                </div>
            </a>
        </div>
    </div>
</div>

<div id="members"
    data-list='{"valueNames":["invoice","buyer","table","card","total","status","date"],"page":15,"pagination":true}'>
    <div class="row align-items-center justify-content-between g-3 mb-3">
        <div class="col col-auto">
            <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                        class="form-control search-input search" type="search" placeholder="Search"
                        aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                </form>
            </div>
        </div>
        <div class="col-auto">
            <div class="d-flex align-items-center">
                {{-- <a class="btn btn-primary" href="{{ route('admin.users.create') }}">
                    <span class="fas fa-plus me-2"></span>Tambah user
                </a> --}}
            </div>
        </div>
    </div>
    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
        <div class="table-responsive scrollbar ms-n1 ps-1">
            <table class="table table-sm fs--1 mb-0">
                <thead>
                    <tr>
                        <th class="sort align-middle" scope="col" data-sort="invoice"
                            style="width:20%;  min-width: 150px;">INVOICE</th>
                        <th class="sort align-middle text-center" scope="col" data-sort="buyer"
                            style="width:20%;  min-width: 200px;">PELANGGAN</th>
                        <th class="sort align-middle text-center" scope="col" data-sort="table"
                            style="width: 10%; min-width: 100px;">MEJA</th>
                            <th class="sort align-middle text-center" scope="col" data-sort="card"
                                style="width: 10%; min-width: 100px;">KARTU</th>
                        <th class="sort align-middle text-center" scope="col" data-sort="total"
                            style="width: 10%; min-width: 200px;"> TOTAL</th>
                        <th class="sort align-middle text-center" scope="col" data-sort="status"
                            style="width: 10%; min-width: 150px;"> STATUS</th>
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width: 15%;">TANGGAL</th>
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width: 15%;">AKSI</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                    @foreach ($orders as $order)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="invoice white-space-nowrap">
                            <a class="fw-semi-bold" href="{{ route('admin.report-orders.show', $order) }}">#{{ $order->invoice }}</a>
                        </td>
                        <td class="buyer white-space-nowrap">
                            {{ $order->buyer }}
                        </td>
                        <td class="table white-space-nowrap text-center">
                            {{ $order->table->name }}
                        </td>
                        <td class="table white-space-nowrap text-center">
                            {{ $order->card->code ?? '-' }}
                        </td>
                        <td class="total align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">
                            {{ number_format($order->grand_total) }}
                        </td>
                        <td class="status white-space-nowrap text-center">
                            {{ $order->order_status }}
                        </td>
                        <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">
                            {{ $order->created_at->format("d-m-Y H:i") }}
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                <button
                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                    type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                    aria-expanded="false" data-bs-reference="parent">
                                    <i class="fas fa-ellipsis"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                    {{-- <a class="dropdown-item" href="{{ route('admin.orders.destroy', $order) }}">Batalkan Transaksi</a> --}}
                                    {!! Form::open(['method' => 'DELETE','route' => ['admin.orders.destroy', $order->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Batalkan transaksi', ['class' => 'dropdown-item']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
            <div class="col-auto d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a
                    class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!"
                    data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a>
            </div>
            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                        class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span
                        class="fas fa-chevron-right"></span></button>
            </div>
        </div>
    </div>
</div>


@endsection