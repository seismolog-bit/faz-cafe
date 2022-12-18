@extends('layouts.admin')

@section('styles')
    @livewireStyles
@endsection

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.orders.index_active') }}">Transaksi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Buat Transaksi</li>
    </ol>
</nav>
<h2 class="mb-5">Buat Transaksi</h2>
<div class="row justify-content-between">
    <div class="col-md-7 col-xl-7">
        @livewire('cart-product-table')
        
    </div>
    <div class="col-md-5 col-xl-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Rincian pesanan</h3>
                    <form action="{{ route('admin.carts.clear') }}" method="POST">
                        @csrf
                        <button class="btn btn-link pe-0" type="submit" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Hapus semua produk">Clear</button>
                    </form>
                </div>
                <div class="border-dashed border-bottom mt-4">
                    <div class="mx-n2">
                        @foreach ($carts as $item)
                        <div class="row align-items-center mb-2 g-3">
                            <div class="col-7 col-md-7 col-lg-7">
                                <div class="d-flex align-items-center">
                                    <form action="{{ route('admin.carts.destroy') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="btn btn-sm text-500 hover-text-600 me-2" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="Hapus produk">
                                            <i class="fas fa-xmark text-danger"></i>
                                        </button>
                                    </form>

                                    {{-- <img class="me-2 ms-1" src="{{ asset($item->attributes->image) }}" width="40" alt=""> --}}
                                    <h6 class="fw-semi-bold text-1000 lh-base">
                                        {{ $item->name }}
                                        @if ($item->attributes->image)
                                            <small><br>* {{$item->attributes->image}}</small>
                                        @endif
                                    </h6>
                                    
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2">
                                <h6 class="fs--2 mb-0">x{{ $item->quantity }}</h6>
                            </div>
                            <div class="col-3 ps-0">
                                <h5 class="mb-0 fw-semi-bold text-end">{{ number_format($item->price) }}</h5>
                            </div>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
                <div class="border-dashed border-bottom mt-4">
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Items subtotal: </h5>
                        <h5 class="text-900 fw-semi-bold">{{ number_format(Cart::getTotal()) }}</h5>
                    </div>
                    {{-- <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Discount: </h5>
                        <h5 class="text-danger fw-semi-bold">-$59</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Tax: </h5>
                        <h5 class="text-900 fw-semi-bold">$126.20</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Subtotal </h5>
                        <h5 class="text-900 fw-semi-bold">$665</h5>
                    </div> --}}
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="text-900 fw-semi-bold">Diskon </h5>
                        <h5 class="text-900 fw-semi-bold">0 </h5>
                    </div>
                </div>
                <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                    <h4 class="mb-0">Total:</h4>
                    <h4 class="mb-0">{{ Cart::getTotal() }}</h4>
                </div>
                <a href="{{ route('admin.carts.process') }}" class="btn btn-primary w-100">Proses Pesanan
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    @livewireScripts
@endsection