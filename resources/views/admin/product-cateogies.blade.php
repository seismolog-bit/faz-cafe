@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Kategori produk</li>
    </ol>
</nav>
<h2 class="text-bold text-1100 mb-5">Kategori produk</h2>
<div id="members" data-list='{"valueNames":["name","detail","action"],"page":10,"pagination":true}'>
    <div class="row align-items-center justify-content-between g-3 mb-3">
        <div class="col col-auto">
            <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                        class="form-control search-input search" type="search" placeholder="Cari"
                        aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                </form>
            </div>
        </div>
        <div class="col-auto">
            <div class="d-flex align-items-center">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tableAdd">
                    <span class="fas fa-plus me-2"></span>Tambah meja
                </button>
                <div class="modal fade" id="tableAdd" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('admin.product-categories.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tableShowLabel">Tambah meja</h5>
                                    <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span class="fas fa-times fs--1"></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="imageLabel">Gambar </label> 
                                        <input class="form-control" id="imageLabel" type="file" name="image" value="{{ old('image') }}" accept="image/png, image/jpg, image/jpeg" required />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="nameLabel">Nama meja </label> 
                                        <input class="form-control" id="nameLabel" type="text" name="name" value="{{ old('name') }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="nameLabel">Detail </label>
                                        <textarea class="form-control" name="detail" id="detailLabel" required>{{ old('detail') }}</textarea>
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
            </div>
        </div>
    </div>
    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
        <div class="table-responsive scrollbar ms-n1 ps-1">
            <table class="table table-sm fs--1 mb-0">
                <thead>
                    <tr>
                        <th class="sort align-middle" scope="col" data-sort="name" style="width:15%; min-width:150px;">NAMA</th>
                        <th class="sort align-middle" scope="col" data-sort="category" style="width:15%; min-width:100px;"> DETAIL</th>
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="action" style="width:19%;  min-width:200px;">AKSI</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                    @foreach ($categories as $category)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="name align-middle white-space-nowrap">
                            <a class="d-flex align-items-center text-900 text-hover-1000" href="{{ route('admin.product-categories.show', $category) }}">
                                <div class="avatar avatar-m">
                                    <img class="rounded-circle" src="{{ asset($category->image) }}" alt="" /></div>
                                <h6 class="mb-0 ms-3 fw-semi-bold">{{ $category->name }}</h6>
                            </a>
                        </td>
                        <td class="detail align-middle white-space-nowrap">
                            {{ $category->detail }}
                        </td>
                        <td class="action align-middle white-space-nowrap text-700">
                            <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#tableShow{{ $category->id }}">Detail</button>
                            <div class="modal fade" id="tableShow{{ $category->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.product-categories.store') }}" method="post">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tableShowLabel">Detail meja</h5>
                                                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                    <span class="fas fa-times fs--1"></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label" for="nameLabel">Nama meja </label>
                                                    <input class="form-control" id="nameLabel" type="text" name="name" value="{{ $category->name }}" readonly />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="detailLabel">Detail </label>
                                                    {{-- <input class="form-control" id="nameLabel" type="number" name="floor" value="{{ $category->detail }}" readonly /> --}}
                                                    <textarea class="form-control" name="detail" id="detailLabel" readonly>{{ $category->detail }}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Kembali</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#tableEdit{{ $category->id }}">Edit</button>
                            <div class="modal fade" id="tableEdit{{ $category->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.product-categories.update', $category) }}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tableEditLabel">Edit meja</h5>
                                                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                    <span class="fas fa-times fs--1"></span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label" for="nameLabel">Nama meja </label>
                                                    <input class="form-control" id="nameLabel" type="text" name="name" value="{{ $category->name }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="nameLabel">Detail </label>
                                                    <textarea class="form-control" name="detail" id="detailLabel">{{ $category->detail }}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                                                <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Kembali</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {!! Form::open(['method' => 'DELETE','route' => ['admin.product-categories.destroy', $category],'style'=>'display:inline']) !!}
                            {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
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