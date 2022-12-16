@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Home</a></li>
        <li class="breadcrumb-item active">Barang</li>
    </ol>
</nav>
<div class="row align-items-center justify-content-between g-3 mb-4">
    <div class="col-auto">
        <h2 class="mb-0">Daftar Barang</h2>
    </div>
</div>

<div id="members" data-list='{"valueNames":["item","buyer","table","qty","date"],"page":15,"pagination":true}'>
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
            <div class="row g-2 g-sm-3">
                <div class="col-auto">
                    <button class="btn btn-phoenix-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#tableAdd">
                        <i class="fa-solid fa-store"></i> Tambahkan Barang
                    </button>
                    <div class="modal fade" id="tableAdd" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('admin.items.store') }}" method="post">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tableShowLabel">Tambah Barang</h5>
                                        <button class="btn p-1" type="button" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span class="fas fa-times fs--1"></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="nameLabel">Nama barang </label>
                                            <input class="form-control" id="nameLabel" type="text" name="name"
                                                value="{{ old('name') }}" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="organizerSingle">Satuan</label>
                                            <select class="form-select" id="organizerSingle" data-choices="data-choices"
                                                name="unit" single="single"
                                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                                <option value="">Pilih satuan...</option>
                                                <option value="Pcs">Pcs</option>
                                                <option value="Gr">Gr</option>
                                                <option value="Kg">Kg</option>
                                                <option value="Liter">Liter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit">Tambahkan Barang</button>
                                        <button class="btn btn-outline-primary" type="button"
                                            data-bs-dismiss="modal">Kembali</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
        <div class="table-responsive scrollbar ms-n1 ps-1">
            <table class="table table-sm fs--1 mb-0">
                <thead>
                    <tr>
                        <th class="sort align-middle" scope="col" data-sort="date"
                            style="width:20%;  min-width: 150px;">ITEM</th>
                        <th class="sort align-middle" scope="col" data-sort="user"
                            style="width:20%;  min-width: 200px;">STOK</th>
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="action" style="width: 15%;">
                            AKSI</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                    @foreach ($items as $item)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="buyer white-space-nowrap">
                            {{ $item->name }}
                        </td>
                        <td class="buyer white-space-nowrap">
                            {{ $item->stock }} {{ $item->unit }}
                        </td>

                        <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">
                            <button class="btn btn-info" type="button" data-bs-toggle="modal"
                            data-bs-target="#edit{{ $item->id }}">
                                <span class="fas fa-check me-2"></span>Edit
                            </button>
                            
                        </td>
                        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('admin.items.update', $item) }}" method="post">
                                        @method('patch')
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tableShowLabel">Edit Barang</h5>
                                            <button class="btn p-1" type="button" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span class="fas fa-times fs--1"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
    
                                            <div class="mb-3">
                                                <label class="form-label" for="nameLabel">Nama barang </label>
                                                <input class="form-control" id="nameLabel" type="text" name="name"
                                                    value="{{ $item->name }}" required />
                                            </div>
    
                                            <div class="mb-3">
                                                <label for="organizerSingle">Satuan</label>
                                                <select class="form-select" id="organizerSingle" data-choices="data-choices"
                                                    name="unit" single="single"
                                                    data-options='{"removeItemButton":true,"placeholder":true}'>
                                                    <option value="Pcs" {{ $item->unit == 'Pcs' ? 'selected' : '' }} >Pcs</option>
                                                    <option value="Gr" {{ $item->unit == 'Gr' ? 'selected' : '' }}>Gr</option>
                                                    <option value="Kg" {{ $item->unit == 'Kg' ? 'selected' : '' }}>Kg</option>
                                                    <option value="Liter" {{ $item->unit == 'Liter' ? 'selected' : '' }}>Liter</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                            <button class="btn btn-outline-primary" type="button"
                                                data-bs-dismiss="modal">Kembali</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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