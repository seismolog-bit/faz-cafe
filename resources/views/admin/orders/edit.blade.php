@extends('layouts.admin')

@section('styles')
    @livewireStyles
@endsection

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.orders.index_active') }}">Transaksi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Transaksi</li>
    </ol>
</nav>
<h2 class="mb-5">Edit Transaksi</h2>
<div class="row justify-content-between">
    <div class="col-sm-7 col-xl-7">
        @livewire('edit-product-table', ['order' => $order])
    </div>
    <div class="col-sm-5 col-xl-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Rincian pesanan</h3>
                    {{-- <form action="{{ route('admin.carts.clear') }}" method="POST">
                        @csrf
                        <button class="btn btn-link pe-0" type="submit" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Hapus semua produk">Clear</button>
                    </form> --}}
                </div>
                <div class="border-dashed border-bottom mt-4">
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Pembeli: </h5>
                        <h5 class="text-900 fw-semi-bold">{{ $order->buyer }}</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Meja: </h5>
                        <h5 class="text-900 fw-semi-bold">{{ $order->table->name }}  - Lantai {{ $order->table->floor }}</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Pembayaran: </h5>
                        <h5 class="text-900 fw-semi-bold {{ $order->payment_status == 'Belum Bayar' ? 'text-danger' : 'text-primary' }} ">{{ $order->payment_status }}</h5>
                    </div>
                </div>
                <div class="border-dashed border-bottom mt-4">
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Pesanan: </h5>
                        {{-- <h5 class="text-900 fw-semi-bold">{{ $order->buyer }}</h5> --}}
                    </div>
                    {{-- <div class="mx-n2"> --}}
                        @foreach ($order->order_items as $item)
                        <div class="row align-items-center mb-2 g-3">
                            <div class="col-7 col-md-7 col-lg-7">
                                <div class="d-flex align-items-center">
                                    @if ($item->is_delivery == 'pending')
                                    <form action="{{ route('admin.order-items.destroy', $item->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="btn btn-sm text-500 hover-text-600 me-2" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="Hapus produk">
                                            <i class="fas fa-xmark text-danger"></i>
                                        </button>
                                    </form>

                                    
                                    <button class="btn btn-sm text-500 hover-text-600 me-2" type="button" data-bs-toggle="modal" data-bs-target="#edit{{ $item->id }}">
                                        <i class="fas fa-edit text-secondary"></i>
                                    </button>
                                    <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('admin.order-items.update', $item->id) }}" method="post">
                                                    @method('patch')
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="tableShowLabel">Edit Jumlah Pesanan</h5>
                                                        <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                            <span class="fas fa-times fs--1"></span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="nameLabel">Nama </label> 
                                                            <input class="form-control" id="nameLabel" type="text" value="{{ $item->product->name }}" readonly/>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label" for="nameLabel">Jumlah (Qty) </label> 
                                                            <input class="form-control" id="nameLabel" type="number" name="qty" value="{{ $item->qty }}"/>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="submit">Tambahkan</button>
                                                        <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Kembali</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <h6 class="fw-semi-bold text-1000 lh-base">{{ $item->product->name }}
                                    <br> <small> {{ $item->note }}  </small>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                <h6 class="fs--2 mb-0">{{ number_format($item->price) }}x{{ $item->qty }}</h6>
                            </div>
                            <div class="col-3 ps-0">
                                <h5 class="mb-0 fw-semi-bold text-end">{{ number_format($item->grand_total) }}</h5>
                            </div>
                        </div>
                        @endforeach
                    {{-- </div> --}}
                </div>
                <div class="border-dashed border-bottom mt-4">
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Items subtotal: </h5>
                        <h5 class="text-900 fw-semi-bold">{{ number_format($order->grand_total) }}</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        {{-- <h5 class="text-900 fw-semi-bold">Diskon </h5>
                        <h5 class="text-900 fw-semi-bold">0 </h5>
                    </div> --}}
                </div>
                <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                    <h4 class="mb-0">Total:</h4>
                    <h4 class="mb-0">{{ number_format($order->grand_total) }}</h4>
                </div>
                <a href="{{ route('admin.orders.index_active') }}" class="btn btn-secondary w-100"> 
                    Kembali 
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    @livewireScripts
@endsection