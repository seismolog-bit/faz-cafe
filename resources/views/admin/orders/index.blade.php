@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Home</a></li>
        <li class="breadcrumb-item active">Transaksi</li>
    </ol>
</nav>
<div class="row align-items-center justify-content-between g-3 mb-4">
    <div class="col-auto">
        <h2 class="mb-0">{{ $status ? 'Transaksi Aktif' : 'Laporan Transaksi' }}</h2>
    </div>
    {{-- <div class="col-auto">
        <div class="row g-2 g-sm-3">
            <div class="col-auto">
                <a class="btn btn-phoenix-primary" href="{{ route('admin.orders.create.create_activate') }}">
                    <i class="fa-regular fa-circle-dot"></i> Transaksi Billiard
                </a>
                <a class="btn btn-phoenix-primary" href="">
                    <i class="fa-solid fa-mug-hot"></i> Transaksi Cafe
                </a>
            </div>
        </div>
    </div> --}}
</div>

<div id="members"
    data-list='{"valueNames":["invoice","buyer","table","total","payment_method","status","date"],"page":10,"pagination":true}'>
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
                        <th class="sort align-middle" scope="col" data-sort="invoice"  style="width:20%;  min-width: 150px;">INVOICE</th>
                        <th class="sort align-middle text-center" scope="col" data-sort="buyer"  style="width:20%;  min-width: 200px;">PELANGGAN</th>
                        <th class="sort align-middle text-center" scope="col" data-sort="table" style="width: 10%; min-width: 100px;">MEJA</th>
                        <th class="sort align-middle text-center" scope="col" data-sort="total" style="width: 10%; min-width: 200px;"> TOTAL</th>
                        <th class="sort align-middle text-center" scope="col" data-sort="payment_method" style="width: 15%; min-width: 200px;"> PEMBAYARAN</th>
                        <th class="sort align-middle text-center" scope="col" data-sort="status" style="width: 10%; min-width: 150px;"> STATUS</th>
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="date" style="width: 15%;">TANGGAL</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                    @foreach ($orders as $order)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="invoice white-space-nowrap">
                            <a class="fw-semi-bold" href="{{ route('admin.orders.show', $order) }}">#{{ $order->invoice }}</a>
                        </td>
                        <td class="buyer white-space-nowrap">
                            {{ $order->buyer }}
                        </td>
                        <td class="table white-space-nowrap text-center">
                            {{ $order->table->name }}
                        </td>
                        <td class="total align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">
                            {{ number_format($order->grand_total) }}
                        </td>
                        <td class="payment_method white-space-nowrap text-center">
                            {{ $order->payment_method }}
                        </td>
                        <td class="status white-space-nowrap text-center">
                            {{ $order->order_status }}
                        </td>
                        <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">
                            {{ $order->created_at->format("d-m-Y H:i") }}
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