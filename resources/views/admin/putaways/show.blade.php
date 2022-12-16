@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.putaways.index') }}">Pengeluaran Barang</a></li>
        <li class="breadcrumb-item active">Show pengeluaran belanja</li>
    </ol>
</nav>
<h2 class="mb-0">Detail pengeluaran</h2>
<div class="d-flex flex-wrap flex-between-center mb-1">
    <p class="text-800 lh-sm mb-0">Karyawan : <span class="fw-bold"> {{ $putaway->user->name }}</p>
    <div class="d-flex">

        <a class="btn pe-3 ps-0 text-900" href="{{ route('admin.putaways.invoice', $putaway) }}">
            <i class="fa-solid fa-file-invoice me-2"></i>Invoice
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
                        <p class="text-700 lh-lg mb-0">{{ $putaway->note }}</p>
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
                            <th class="sort align-middle ps-4 text-center" scope="col" data-sort="size" style="width:300px;">QTY
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list" id="table-latest-review-body">
                        @forelse ($putaway->putaway_items as $item)
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td>{{ $item->item->name }}</td>
                            <td class="text-center">{{ $item->qty }}</td>
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
        {{-- <div class="d-flex flex-between-center py-3 border-bottom mb-7">
            <p class="text-1100 fw-semi-bold lh-sm mb-0">Total :</p>
            <p class="text-1100 fw-bold lh-sm mb-0"> {{ number_format($receiving->receiving_items->sum('total')) }}</p>
        </div> --}}
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
                                <p class="text-1100 fw-semi-bold">{{ $putaway->created_at->format('d-m-Y H:i') }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="text-900 fw-semi-bold">Karyawan :</p>
                                <p class="text-1100 fw-semi-bold">{{ $putaway->user->name }}</p>
                            </div>
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