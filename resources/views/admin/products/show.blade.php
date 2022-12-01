@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Product</a></li>
        <li class="breadcrumb-item active">Detail produk</li>
    </ol>
</nav>

<form class="mb-9" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row g-3 flex-between-end mb-5">
        <div class="col-auto">
            <h2 class="mb-2">{{ $product->name }}</h2>
        </div>
        <div class="col-auto">
            <a class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" href="{{ route('admin.products.index') }}">Kembali</a>
        </div>
    </div>
    <h4 class="mb-3">Nama produk</h4>
    <div class="row g-5">
        <div class="col-12 col-xl-8">
            <input class="form-control mb-5" type="text" placeholder="Masukan nama produk" required name="name" value="{{ $product->name }}" readonly
            />
            <div class="mb-6">
                <h4 class="mb-3"> Detail</h4>
                {!! $product->detail !!}
                {{-- <textarea name="detail" id="summernote" required placeholder="Masukan detail produk" readonly>{{ prod }}</textarea> --}}
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="row g-2">
                <div class="col-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Kelengkapan</h4>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6 col-xl-12">
                                    <div class="mb-4">
                                        {{-- <h5 class="mb-2 text-1000">Gambar</h5> --}}
                                        <div class="avatar avatar-5xl">
                                            <img class="rounded" src="{{ asset($product->image) }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-xl-4">
                                            <h5 class="text-1000">Harga</h5>
                                            {{-- <span class="mb-2"><small>*Khusus paket billiard (satuan menit)</small></span> --}}
                                            <input class="form-control" type="text" name="price" value="{{ number_format($product->price, 0) }}" readonly placeholder="contoh: 35000" required />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <h5 class="text-1000">Kategori</h5>
                                        <input class="form-control" type="text" name="category" value="{{ $product->category->name }}" readonly />
                                    </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-xl-12">
                                    <div class="mb-xl-4">
                                        <h5 class="text-1000">Durasi</h5>
                                        <span class="mb-2"><small>*Khusus paket billiard (satuan menit)</small></span>
                                        <input class="form-control" type="text" name="duration" value="{{ $product->duration }} menit" readonly/>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-xl-12">
                                    <div class="mb-xl-4">
                                        <h5 class="text-1000">Stok awal</h5>
                                        <span class="mb-2 "><small>*Kosongkan jika produk/paket billiard</small></span>
                                        <input class="form-control" type="text" value="" readonly name="stock" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
