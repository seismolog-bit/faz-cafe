@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item active">Meja</li>
    </ol>
</nav>
<h2 class="text-bold text-1100 mb-5">Meja</h2>
<div id="members" data-list='{"valueNames":["customer","email","mobile_number","role","status","joined"],"page":10,"pagination":true}'>
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
                            <form action="{{ route('admin.tables.store') }}" method="post">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tableShowLabel">Tambah meja</h5>
                                    <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <span class="fas fa-times fs--1"></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="nameLabel">Nama meja </label> 
                                        <input class="form-control" id="nameLabel" type="text" name="name" value="{{ old('name') }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="nameLabel">Lantai </label>
                                        <input class="form-control" id="nameLabel" type="number" name="floor" value="{{ old('floor') }}" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="tableCategory" class="form-label">Kategori meja</label>
                                        <select class="form-select" id="tableCategory" name="is_billiard" data-choices="data-choices" single="single" data-options='{"removeItemButton":true,"placeholder":true}'>
                                            <option value="1">Billiard</option>
                                            <option value="0">Cafe</option>
                                        </select>
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
                        <th class="sort align-middle" scope="col" data-sort="name" style="width:15%; min-width:150px;">NAMA MEJA</th>
                        <th class="sort align-middle" scope="col" data-sort="category" style="width:15%; min-width:100px;"> KATEGORI</th>
                        <th class="sort align-middle pe-3" scope="col" data-sort="floor" style="width:10%; min-width:50px;">LANTAI</th>
                        <th class="sort align-middle" scope="col" data-sort="status" style="width:10%;">STATUS</th>
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="action" style="width:19%;  min-width:200px;">AKSI</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                    @foreach ($tables as $table)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="name align-middle white-space-nowrap">
                            {{ $table->name }}
                        </td>
                        <td class="category align-middle white-space-nowrap">
                            {{ $table->is_billiard ? 'Billiard' : 'Cafe' }}
                        </td>
                        <td class="floor align-middle white-space-nowrap">
                            {{ $table->floor }}
                        </td>
                        <td class="status align-middle white-space-nowrap text-900">
                            {{-- {{ $table->is_active ? 'Aktif' : 'Kosong' }} --}}

                            @if ($table->is_active)
                            <span class="badge badge-phoenix badge-phoenix-warning rounded-pill fs--1 ms-2"> <span class="badge-label">Aktif</span></span>
                            @else
                            <span class="badge badge-phoenix badge-phoenix-primary rounded-pill fs--1 ms-2"> <span class="badge-label">Kosong</span></span>
                            @endif
                        </td>
                        <td class="action align-middle white-space-nowrap text-700">
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.tables.change', $table->id) }}">
                                <i class="fa-solid fa-arrow-rotate-right"></i>
                            </a>
                            @role('admin')
                            <button class="btn btn-info btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#tableShow{{ $table->id }}">Detail</button>
                            <div class="modal fade" id="tableShow{{ $table->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.tables.store') }}" method="post">
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
                                                    <input class="form-control" id="nameLabel" type="text" name="name" value="{{ $table->name }}" readonly />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="nameLabel">Lantai </label>
                                                    <input class="form-control" id="nameLabel" type="number" name="floor" value="{{ $table->floor }}" readonly />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tableCategory" class="form-label">Kategori</label>
                                                    <select class="form-select" id="tableCategory" name="is_billiard" data-choices="data-choices" single="single" data-options='{"removeItemButton":true,"placeholder":true}' disabled>
                                                        <option value="1" {{ $table->is_billiard ? 'selected' : '' }}>Billiard</option>
                                                        <option value="0" {{ $table->is_billiard == 0 ? 'selected' : '' }}>Cafe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Kembali</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#tableEdit{{ $table->id }}">Edit</button>
                            <div class="modal fade" id="tableEdit{{ $table->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.tables.update', $table) }}" method="post">
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
                                                    <input class="form-control" id="nameLabel" type="text" name="name" value="{{ $table->name }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="nameLabel">Lantai </label>
                                                    <input class="form-control" id="nameLabel" type="number" name="floor" value="{{ $table->floor }}" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tableCategory" class="form-label">Kategori</label>
                                                    <select class="form-select" id="tableCategory" name="is_billiard" data-choices="data-choices" single="single" data-options='{"removeItemButton":true,"placeholder":true}'>
                                                        <option value="">Pilih kategori</option>
                                                        <option value="1" {{ $table->is_billiard ? 'selected' : '' }}>Billiard</option>
                                                        <option value="0" {{ $table->is_billiard == 0 ? 'selected' : '' }}>Cafe</option>
                                                    </select>
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

                            {!! Form::open(['method' => 'DELETE','route' => ['admin.tables.destroy', $table],'style'=>'display:inline']) !!}
                            {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                            @endrole
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