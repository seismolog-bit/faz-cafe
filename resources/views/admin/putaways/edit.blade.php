@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.putaways.index') }}">Pengeluaran Barang</a></li>
        <li class="breadcrumb-item active">Edit pengeluaran</li>
    </ol>
</nav>
<h2 class="mb-0">Detail pengeluaran barang</h2>
<div class="d-flex flex-wrap flex-between-center mb-1">
    <p class="text-800 lh-sm mb-0">Karyawan : <span class="fw-bold"> {{ $putaway->user->name }}</p>
    <div class="d-flex">
        <button class="btn pe-3 ps-0 text-900" type="button" data-bs-toggle="modal" data-bs-target="#tableAdd">
            <i class="fa-solid fa-plus me-2 text-primary"></i>Tambah item
        </button>

        <div class="modal fade" id="tableAdd" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('admin.putaway-items.store') }}" method="post">
                        <input type="hidden" name="putaway_id" value="{{ $putaway->id }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="tableShowLabel">Item</h5>
                            <a class="btn p-1" href="{{ route('admin.items.create') }}">
                                <span class="fas fa-plus fs--1"></span> Buat item baru
                            </a>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="organizerSingle">Daftar item</label>
                                <select class="form-select" id="organizerSingle" data-choices="data-choices"
                                    single="single" name="item_id" data-options='{"removeItemButton":true,"placeholder":true}'>
                                    <option value="">Pilih item...</option>
                                    @foreach ($items as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }} ({{ $item->stock . $item->unit }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="qtyLabel">Jumlah </label>
                                <input class="form-control" id="qtyLabel" type="number" name="qty"
                                    value="{{ old('qty') }}" required />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Tambahkan</button>
                            <button class="btn btn-outline-primary" type="button"
                                data-bs-dismiss="modal">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <button class="btn px-3 text-900" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-regular fa-note-sticky me-2"></i>Catatan pengeluaran
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Catatan pengeluaran</h5><button class="btn p-1"
                            type="button" data-bs-dismiss="modal" aria-label="Close"><span
                                class="fas fa-times fs--1"></span></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-700 lh-lg mb-0">{{ $putaway->note }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="orderTable"
            data-list='{"valueNames":["item","buyer","table","qty","date"],"page":15,"pagination":true}'>
            <div class="table-responsive scrollbar">
                <table class="table fs--1 mb-0 border-top border-200">
                    <thead>
                        <tr>
                            <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:400px;"
                                data-sort="products">BARANG</th>
                            <th class="sort align-middle ps-4 text-center" scope="col" data-sort="size" style="width:300px;">QTY
                            </th>
                            <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-latest-review-body">
                        @forelse ($putaway->putaway_items as $item)
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td>{{ $item->item->name }}</td>
                            <td class="text-center">{{ $item->qty }} {{ $item->item->unit }}</td>
                            <td class="d-flex justify-content-end">
                                {{-- <button class="btn p-0 me-2"  type="button" data-bs-toggle="modal" data-bs-target="#tableEdit{{ $item->id }}">
                                    <i class="fas fa-edit"></i>
                                </button> --}}
                                <form action="{{ route('admin.putaway-items.destroy', $item->id) }}" method="post" onsubmit="return confirm('Anda yakin ingin menghapus barang ini?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn p-0 me-2" type="submit">
                                        <i class="fas fa-trash-can text-danger"></i>
                                    </button>
                                </form>

                            </td>
                            <div class="modal fade" id="tableEdit{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.putaways.update', $item->id) }}" method="post">
                                            @method('patch')
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tableShowLabel">Edit item</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="organizerSingle">Daftar item</label>
                                                    <input class="form-control" id="qtyLabel" type="text" value="{{ $item->item->name }}" readonly />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="qtyLabel">Jumlah </label>
                                                    <input class="form-control" id="qtyLabel" type="number" name="qty" value="{{ $item->qty }}" required />
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
                        @empty
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="color align-middle white-space-nowrap text-900 py-0 ps-4" colspan="4">Barang belum ditambahkan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

@endsection

@section('script')
<link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet" />
<script src="{{ asset('vendors/choices/choices.min.js') }}"></script>

@endsection