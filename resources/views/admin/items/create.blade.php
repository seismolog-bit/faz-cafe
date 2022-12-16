@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.items.index') }}">Barang</a></li>
        <li class="breadcrumb-item active">Tambah barang</li>
    </ol>
</nav>
<h2 class="mb-0">Tambah barang</h2>
<div class="row mx-auto">
    <div class="container">
        <div class="row flex-center py-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.items.store') }}" method="post">
                        @csrf
                        <div class="mb-3 text-start">
                            <label class="form-label" for="email">Nama barang</label>
                            <input class="form-control" type="text" name="name" placeholder="Nama barang" required>
                        </div>
                        <div class="mb-3">
                            <label for="organizerSingle">Satuan</label>
                            <select class="form-select" id="organizerSingle" data-choices="data-choices" name="unit"
                                single="single" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Pilih satuan...</option>
                                <option value="Pcs">Pcs</option>
                                <option value="Gr">Gr</option>
                                <option value="Kg">Kg</option>
                                <option value="Liter">Liter</option>
                            </select>
                        </div>
                        
                        <button class="btn btn-primary w-100 mb-3">Tambahkan barang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection