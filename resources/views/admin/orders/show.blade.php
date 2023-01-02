@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.orders.index_active') }}">Transaksi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Transaksi</li>
    </ol>
</nav>
<h2 class="mb-5">Transaksi #{{ $order->invoice }}</h2>
<div class="row justify-content-between">
    <div class="col-lg-7 col-xl-7">
        <div id="members"
                    data-list='{"valueNames":["product","category","price","qty","total"],"page":15,"pagination":true}'>
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
                    </div>
                    <div
                        class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
                        <div class="table-responsive scrollbar ms-n1 ps-1">
                            <table class="table table-sm fs--1 mb-0">
                                <thead>
                                    <tr>
                                        <th class="sort align-middle" scope="col" data-sort="product" style="min-width: 100px;">PRODUK</th>
                                        <th class="sort align-middle" scope="col" data-sort="category" style="min-width: 100px;">KATEGORI</th>
                                        <th class="sort align-middle text-center" scope="col" data-sort="price" style="min-width: 100px;">HARGA</th>
                                        <th class="sort align-middle text-center" scope="col" data-sort="qty" style="min-width: 50px;"> QTY</th>
                                        <th class="sort align-middle text-center" scope="col" data-sort="total" style="min-width: 100px;"> TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="table-latest-review-body">
                                    @foreach ($order->order_items as $item)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="product white-space-nowrap">
                                            {{ \Illuminate\Support\Str::limit($item->product->name, 45, $end='...') }}
                                        </td>
                                        <td class="category white-space-nowrap">
                                            {{ $item->product->category->name }}
                                        </td>
                                        <td class="price align-middle white-space-nowrap text-700 fs--1 ps-4 text-center">
                                            {{ number_format($item->price) }}
                                        </td>
                                        <td class="qty white-space-nowrap text-center">
                                            {{ $item->qty }}
                                        </td>
                                        <td class="total white-space-nowrap text-center">
                                            {{ number_format($item->grand_total) }}
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                            <div class="col-auto d-flex">
                                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                                    data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!"
                                    data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                        data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!"
                                    data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                                        data-fa-transform="down-1"></span></a>
                            </div>
                            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                    data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <div class="col-lg-5 col-xl-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Rincian pesanan</h3>
                    {{-- <form action="{{ route('admin.carts.clear') }}" method="POST">
                        @csrf
                        <button class="btn btn-link pe-0" type="submit" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Hapus semua produk">Clear</button>
                    </form> --}}
                </div>
                <div class="border-dashed border-bottom mt-4">
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Pembeli: </h5>
                        <h5 class="text-900 fw-semi-bold">{{ $order->buyer }}</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Meja: </h5>
                        <h5 class="text-900 fw-semi-bold">{{ $order->table->name }} - Lantai {{ $order->table->floor }}
                        </h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Metode Pembayaran: </h5>
                        <h5
                            class="text-900 fw-semi-bold ">
                            {{ $order->payment_method }}</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Pembayaran: </h5>
                        <h5
                            class="text-900 fw-semi-bold {{ $order->payment_status == 'Belum Bayar' ? 'text-danger' : 'text-primary' }} ">
                            {{ $order->payment_status }}</h5>
                    </div>
                </div>
                <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                    <h4 class="mb-0">Total:</h4>
                    <h4 class="mb-0">{{ number_format($order->grand_total) }}</h4>
                </div>
                <a class="btn btn-primary w-100 mb-2" href="{{ route('admin.orders.receipt', $order) }}" >Cetak Struk
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="{{ route('admin.orders.index_active') }}" class="btn btn-secondary w-100">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>

@endsection