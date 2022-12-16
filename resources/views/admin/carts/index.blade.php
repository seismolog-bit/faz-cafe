@extends('layouts.admin')

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
    <div class="col-lg-7 col-xl-7">
        <div class="card">
            <div class="card-body">
                <div class="row gx-3 gy-4 mb-8">
                    @foreach ($products as $product)
                    <div class="col-6 col-sm-6 col-md-3 col-xxl-2">
                        <div class="product-card-container h-100">
                            <div class="position-relative text-decoration-none product-card h-100">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <div>
                                        <div class="border border-1 border-2002 rounded-3 position-relative mb-3">
                                            <img class="img-fluid rounded-3" src="{{ asset($product->image) }}" alt="">
                                        </div>
                                        <a class="stretched-link text-decoration-none" type="button"
                                            data-bs-toggle="modal" data-bs-target="#tableAdd{{ $product->id }}">
                                            <p class="text-700 fw-semi-bold fs--1 lh-1 mb-3">{{ $product->name }}</p>
                                        </a>
                                        <div class="modal fade" id="tableAdd{{ $product->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="{{ route('admin.carts.store') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                                        {{-- <input type="hidden" value="{{ $product->image }}" name="image"> --}}
                                                        {{-- <input type="hidden" value="1" name="quantity"> --}}
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="tableShowLabel">Tambah pesanan
                                                            </h5>
                                                            <button class="btn p-1" type="button"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <span class="fas fa-times fs--1"></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label class="form-label" for="nameLabel">Produk
                                                                        </label>
                                                                        <input class="form-control" id="nameLabel"
                                                                            type="text" value="{{ $product->name }}"
                                                                            readonly />
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-label"
                                                                            for="categoryLabel">Kategori </label>
                                                                        <input class="form-control" id="categoryLabel"
                                                                            type="text"
                                                                            value="{{ $product->category->name }}"
                                                                            readonly />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="qtyLabel">Qty </label>
                                                                <input class="form-control" id="qtyLabel" type="number" name="quantity" value="{{ old('quantity') }}"
                                                                    required />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="qtyLabel">Catatan </label>
                                                                <textarea class="form-control" id="qtyLabel" name="note" > {{ old('note') }} </textarea>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label" for="nameLabel">Detail
                                                                </label>
                                                                {!! $product->detail !!}
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary"
                                                                type="submit">Tambahkan</button>
                                                            <button class="btn btn-outline-primary" type="button"
                                                                data-bs-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-1">
                                            {{-- <p class="me-2 text-900 text-decoration-line-through mb-0">$125.00</p>
                                            --}}
                                            <h4 class="text-1100 mb-0">{{ number_format($product->price) }}</h4>
                                        </div>
                                        <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">{{ $product->category->name }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-xl-5">
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