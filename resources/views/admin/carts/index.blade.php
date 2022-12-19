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
    <div class="col-sm-7 col-xl-7 mb-4">
        @livewire('cart-product-table')
    </div>
    <div class="col-sm-5 col-xl-5">
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
                            <div class="col-8">
                                <div class="d-flex align-items-center">
                                    <form action="{{ route('admin.carts.destroy') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="btn btn-sm text-500 hover-text-600" data-bs-toggle="tooltip"
                                            data-bs-placement="right" title="Hapus produk">
                                            <i class="fas fa-xmark text-danger"></i>
                                        </button>
                                    </form>

                                    <h6 class="fw-semi-bold text-1000 lh-base">
                                        {{ $item->name }} ({{ number_format($item->price) . 'x' . $item->quantity }})
                                        @if ($item->attributes->image)
                                            <small><br>* {{$item->attributes->image}}</small>
                                        @endif
                                    </h6>
                                    
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <h5 class="mb-0 fw-semi-bold text-end">{{ number_format($item->price * $item->quantity) }}</h5>
                            </div>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
                <div class="border-dashed border-bottom my-4">
                    <div class="d-flex justify-content-between mb-2">
                        <h5 class="text-900 fw-semi-bold">Items subtotal: </h5>
                        <h5 class="text-900 fw-semi-bold">{{ number_format(Cart::getTotal()) }}</h5>
                    </div>
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