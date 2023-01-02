@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Product</a></li>
        <li class="breadcrumb-item active">Tambah produk</li>
    </ol>
</nav>

<form class="mb-9" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row g-3 flex-between-end mb-5">
        <div class="col-auto">
            <h2 class="mb-2">Tambah produk</h2>
            <h5 class="text-700 fw-semi-bold">Lengkapi detail formulir produk</h5>
        </div>
        <div class="col-auto">
            <a class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" href="{{ route('admin.products.index') }}">Discard</a>
            {{-- <button class="btn btn-phoenix-primary me-2 mb-2 mb-sm-0">Save draft</button> --}}
            <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Simpan produk</button>
        </div>
    </div>
    <h4 class="mb-3">Nama produk</h4>
    <div class="row g-5">
        <div class="col-12 col-xl-8">
            <input class="form-control mb-5" type="text" placeholder="Masukan nama produk" required name="name" value="{{ old('name') }}"/>
            <div class="mb-6">
                <h4 class="mb-3"> Detail</h4>
                <textarea name="detail" id="summernote" required placeholder="Masukan detail produk">{{ old('detail') }}</textarea>
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
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="mb-xl-4">
                                            <h5 class="text-1000">Harga</h5>
                                            {{-- <span class="mb-2"><small>*Khusus paket billiard (satuan menit)</small></span> --}}
                                            <input class="form-control" type="number" name="price" placeholder="contoh: 35000" required />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex flex-wrap justify-content-between">
                                            <h5 class="mb-2 text-1000">Gambar</h5>
                                            <input class="form-control" name="image" type="file" accept="image/png, image/gif, image/jpeg" required />
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex flex-wrap justify-content-between mb-2">
                                            <h5 class="mb-0 text-1000">Kategori</h5>
                                            <a class="fw-bold fs--1" href="{{ route('admin.product-categories.index') }}">Tambah kategori</a>
                                        </div>
                                        <select class="form-select mb-3" aria-label="category_id" name="category_id" data-choices="data-choices"
                                        single="single" data-options='{"removeItemButton":true,"placeholder":true}' required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-xl-12">
                                    <div class="mb-xl-4">
                                        <h5 class="text-1000">Durasi</h5>
                                        <span class="mb-2"><small>*Khusus paket billiard (satuan menit)</small></span>
                                        <input class="form-control" type="number" name="duration" placeholder="contoh: 60" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-xl-12">
                                    <div class="mb-4">
                                        <div class="d-flex flex-wrap justify-content-between mb-2">
                                            <h5 class="mb-0 text-1000">Relasi barang</h5>
                                        </div>
                                        <select class="form-select mb-3" aria-label="item_id" name="item_id" data-choices="data-choices"
                                        single="single" data-options='{"removeItemButton":true,"placeholder":true}'>
                                            <option value="">Pilih relasi barang...</option>
                                            @foreach ($items as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }} ({{ $item->stock . $item->unit }} )</option>
                                            @endforeach
                                        </select>
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

@section('script')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet" />
<script src="{{ asset('vendors/choices/choices.min.js') }}"></script>

<script>
$(document).ready(function() {
      $('#summernote').summernote({
          height: 300,                 // set editor height
          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor
          focus: false,
          toolbar: [
              ['style', ['style']],
              ['font', ['bold', 'underline', 'clear']],
              // ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['table', ['table']],
              ['insert', ['link', 'picture']],
              ['view', ['codeview', 'help']]
          ]
      });
  });
</script>
@endsection