@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Home</a></li>
        <li class="breadcrumb-item active">Pengeluaran Barang</li>
    </ol>
</nav>
<div class="row align-items-center justify-content-between g-3 mb-4">
    <div class="col-auto">
        <h2 class="mb-0">Daftar Pengeluaran Barang</h2>
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
                        <i class="fa-solid fa-arrow-trend-down"></i> Buat Pengeluaran Barang
                    </button>
                    <div class="modal fade" id="tableAdd" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('admin.putaways.store') }}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tableShowLabel">Tambah Pengeluaran Barang</h5>
                                        <button class="btn p-1" type="button" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span class="fas fa-times fs--1"></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="noteLabel">Catatan </label>
                                            <textarea class="form-control" name="note" id="noteLabel" required>{{ old('note') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit">Buat Pegeluaran Barang</button>
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
                        <th class="sort align-middle" scope="col" data-sort="date">
                            TANGGAL</th>
                        <th class="sort align-middle" scope="col" data-sort="user"
                            style="width:10%;  min-width: 100px;">KARYAWAN</th>
                        <th class="sort align-middle" scope="col" data-sort="note">
                            CATATAN</th>
                        <th class="sort align-middle text-end pe-0" scope="col">
                            AKSI</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                    @foreach ($putaways as $item)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="table white-space-nowrap">
                            {{ $item->created_at->format('d-m-Y H:i') }}
                        </td>
                        <td class="buyer white-space-nowrap">
                            {{ $item->user->name }}
                        </td>
                        <td class="table white-space-nowrap">
                            {{ $item->note }}
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                <button
                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                    type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                    aria-expanded="false" data-bs-reference="parent">
                                    <i class="fas fa-ellipsis"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end py-2" style="">
                                    <a class="dropdown-item" href="{{ route('admin.putaways.show', $item) }}">Detail</a>
                                    <a class="dropdown-item" href="{{ route('admin.putaways.edit', $item) }}">Edit</a>
                                    <a class="dropdown-item" href="{{ route('admin.putaways.invoice', $item) }}">Invoice</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#!">Hapus</a>
                                </div>
                            </div>
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