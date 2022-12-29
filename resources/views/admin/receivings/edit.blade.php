@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.receivings.index') }}">Belanja Barang</a></li>
        <li class="breadcrumb-item active">Edit belanja</li>
    </ol>
</nav>
<h2 class="mb-0">Detail belanja</h2>
<div class="d-flex flex-wrap flex-between-center mb-1">
    <p class="text-800 lh-sm mb-0">Karyawan : <span class="fw-bold"> {{ $receiving->user->name }}</p>
    <div class="d-flex">
        <button class="btn pe-3 ps-0 text-900" type="button" data-bs-toggle="modal" data-bs-target="#tableAdd">
            <i class="fa-solid fa-plus me-2 text-primary"></i>Tambah item
        </button>

        <div class="modal fade" id="tableAdd" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('admin.reveicing-items.store') }}" method="post">
                        <input type="hidden" name="receiving_id" value="{{ $receiving->id }}">
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
                                    <option value="{{ $item->id }}">{{ $item->name }} ({{ $item->unit }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="qtyLabel">Jumlah Pcs/Satuan</label>
                                <input class="form-control" id="qtyLabel" type="number" name="qty"
                                    value="{{ old('qty') }}" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="priceLabel">Total Harga </label>
                                <input class="form-control" id="priceLabel" type="number" name="price"
                                    value="{{ old('price') }}" required />
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

        <a class="btn pe-3 ps-0 text-900" href="{{ asset($receiving->image) }}">
            <i class="fa-solid fa-receipt me-2"></i>Struk belanja
        </a>
        <button class="btn px-3 text-900" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-regular fa-note-sticky me-2"></i>Catatan pembelian
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Catatan pembelian</h5><button class="btn p-1"
                            type="button" data-bs-dismiss="modal" aria-label="Close"><span
                                class="fas fa-times fs--1"></span></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-700 lh-lg mb-0">{{ $receiving->note }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-5 gy-7">
    <div class="col-12 col-xl-8 col-xxl-9">
        <div id="orderTable"
            data-list='{"valueNames":["item","buyer","table","qty","date"],"page":15,"pagination":true}'>
            <div class="table-responsive scrollbar">
                <table class="table fs--1 mb-0 border-top border-200">
                    <thead>
                        <tr>
                            <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:400px;"
                                data-sort="products">BARANG</th>
                            {{-- <th class="sort align-middle ps-4" scope="col" data-sort="color" style="width:150px;">HARGA
                            </th> --}}
                            <th class="sort align-middle ps-4 text-center" scope="col" data-sort="size" style="width:300px;">QTY
                            </th>
                            <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">TOTAL HARGA</th>
                            <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-latest-review-body">
                        @forelse ($receiving->receiving_items as $item)
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td>{{ $item->item->name }}</td>
                            {{-- <td class="text-end">{{ number_format($item->price) }}</td> --}}
                            <td class="text-center">{{ $item->qty }} {{ $item->item->unit }}</td>
                            <td class="text-end">{{ number_format($item->total) }}</td>
                            <td class="d-flex justify-content-end">
                                <form action="{{ route('admin.reveicing-items.destroy', $item->id) }}" method="post" onsubmit="return confirm('Anda yakin ingin menghapus barang ini?')">
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
                                        <form action="{{ route('admin.reveicing-items.update', $item->id) }}" method="post">
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
                                                <div class="mb-3">
                                                    <label class="form-label" for="priceLabel">Harga </label>
                                                    <input class="form-control" id="priceLabel" type="number" name="price"
                                                        value="{{ $item->price }}" required />
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
                                <td class="color align-middle white-space-nowrap text-900 py-0 ps-4" colspan="5">Barang belum ditambahkan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex flex-between-center py-3 border-bottom mb-7">
            <p class="text-1100 fw-semi-bold lh-sm mb-0">Total :</p>
            <p class="text-1100 fw-bold lh-sm mb-0"> {{ number_format($receiving->receiving_items->sum('total')) }}</p>
        </div>
    </div>
    <div class="col-12 col-xl-4 col-xxl-3">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Detail</h3>
                        <div>
                            <div class="d-flex justify-content-between">
                                <p class="text-900 fw-semi-bold">Tanggal :</p>
                                <p class="text-1100 fw-semi-bold">{{ $receiving->created_at->format('d-m-Y H:i') }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="text-900 fw-semi-bold">Karyawan :</p>
                                <p class="text-1100 fw-semi-bold">{{ $receiving->user->name }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="text-900 fw-semi-bold">Toko/Warung:</p>
                                <p class="text-1100 fw-semi-bold">{{ $receiving->place }}</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between border-top border-dashed pt-4">
                            <h4 class="mb-0">Total :</h4>
                            <h4 class="mb-0">{{ number_format($receiving->receiving_items->sum('total')) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet" />
<script src="{{ asset('vendors/choices/choices.min.js') }}"></script>

@endsection