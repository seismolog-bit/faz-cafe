@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">Transaksi</a></li>
        <li class="breadcrumb-item active">Buat transaksi</li>
    </ol>
</nav>
<h2 class="text-bold text-1100 mb-5">Buat Transaksi </h2>

<div class="row g-3">
    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
        <div class="card h-100 overflow-hidden">
            <div class="bg-holder"
                style="background-image:url({{ asset('assets/img/bg/8.png') }});background-position:left bottom;background-size:auto;">
            </div>
            <!--/.bg-holder-->
            <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                <div class="d-flex justify-content-between">
                    <div class="mb-5 mb-md-0 mb-lg-5">
                        <div class="d-sm-flex align-items-center mb-3">
                            <h3 class="mb-0">Billiard</h3>
                        </div>
                        <p class="fs--1 text-700">Petunjuk: Scan kartu, pilih Paket Billiard dan bayar.
                        </p>
                        <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                            <h4 class="fw-bolder me-1">{{ $billiards->count() }}</h4>
                            <h5 class="fs--1 fw-normal text-700 ms-1">Transaksi dibuat </h5>
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/spot-illustrations/rocket.png') }}" width="54" height="54" alt="">
                </div>
                <div class="row flex-1 justify-content-end">
                    <div class="col-sm-8 col-md-12">
                        <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                            <ul
                                class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                <li class="d-flex align-items-center">
                                    <span class="uil uil-check-circle text-success me-2"></span>
                                    <span class="text-700 fw-semi-bold">{{ $billiards->where('order_status', 'active')->count() }} transaksi aktif</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><a class="stretched-link" href="{{ route('admin.orders.create.create_activate') }}"></a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
        <div class="card h-100 overflow-hidden">
            <div class="bg-holder"
                style="background-image:url({{ asset('assets/img/bg/9.png') }});background-position:left bottom;background-size:auto;">
            </div>
            <!--/.bg-holder-->
            <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                <div class="d-flex justify-content-between">
                    <div class="mb-5 mb-md-0 mb-lg-5">
                        <div class="d-sm-flex align-items-center mb-3">
                            <h3 class="mb-0">Cafe</h3>
                        </div>
                        <p class="fs--1 text-700">Petunjuk: Pilih menu yang ingin dipesan dan bayar.</p>
                        <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                            <h4 class="fw-bolder me-1">{{ $cafes->count() }}</h4>
                            <h5 class="fs--1 fw-normal text-700 ms-1">Transaksi dibuat</h5>
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/spot-illustrations/bag-2.png') }}" width="54" height="54" alt="">
                </div>
                <div class="row flex-1 justify-content-end">
                    <div class="col-sm-8 col-md-12">
                        <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                            <ul
                                class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                <li class="d-flex align-items-center">
                                    <span class="uil uil-check-circle text-success me-2"></span>
                                    <span class="text-700 fw-semi-bold">{{ $cafes->where('order_status', 'active')->count() }} transaksi aktif</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a class="stretched-link" href="{{ route('admin.carts.index') }}"></a>
            </div>
        </div>
    </div>
</div>

@endsection