@extends('layouts.admin')

@section('content')


<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">Transaksi</a></li>
        <li class="breadcrumb-item active">Validasi transaksi</li>
    </ol>
</nav>
<form action="{{ route('admin.orders.store') }}" method="post">
    @method('post')
    @csrf
    <input type="hidden" name="card_id" value="{{ $card->id }}">
    <div class="row justify-content-between align-items-end g-3 mb-5">
        <div class="col-12 col-sm-auto col-xl-8">
            <h2>Validasi transaksi</h2>
        </div>
        <div class="col-12 col-sm-auto col-xl-4">
            <div class="d-flex">
                <a href="{{ route('admin.orders.index') }}" class="btn btn-phoenix-primary px-5 me-2">Batal</a>
                <button class="btn btn-primary px-5 w-100 text-nowrap" type="sumbit">Buat transaksi</button>
            </div>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-xl-8">
            <h4 class="fs-1">Pilih paket billiard</h4>
            <p class=" mb-4"><small>*Pilih pada bagian lingkaran</small></p>
            <div class="row g-3">
                <div class="col-sm-6 col-md-12">

                    <div class="row g-3">
                        @foreach ($products as $product)
                        <div class="col-sm-6 col-md-6 form-check mb-4">
                            <input type="radio" id="product{{ $product->id }}" name="product_id" value="{{ $product->id }}"
                                class="radio-select " required />

                            <div class="card h-100 overflow-hidden card-input">
                                <div class="bg-holder"
                                    style="background-image:url(../../../assets/img/bg/8.png);background-position:left bottom;background-size:auto;">
                                </div>
                                <!--/.bg-holder-->
                                <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="mb-5 mb-md-0 mb-lg-5">
                                            <div class="d-sm-flex align-items-center mb-3">
                                                <h3 class="mb-0">{{ $product->name }} | {{ $product->duration }} menit</h3>
                                            </div>
                                            <p>Harga {{ number_format($product->price, 0) }}</p>
                                            {!! $product->detail !!}
                                        </div>
                                        <img src="../../../assets/img/spot-illustrations/rocket.png" width="54"
                                            height="54" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <h4 class="fs-1 mb-4">Detail</h4>
            <div class="mb-3">
                <label class="form-label" for="exampleFormControlInput1">Kode Kartu </label>
                <input class="form-control" type="text" value="{{ $card->code }}" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleFormControlInput1">Pembeli </label>
                <input class="form-control" type="text" name="buyer" placeholder="Nama Pembeli" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleFormControlInput1">Meja </label>
                @foreach ($tables as $table)
                <div class="form-check">
                    <input class="form-check-input" id="table{{ $table->id }}" type="radio" value="{{ $table->id }}" name="table_id" required />
                    <label class="form-check-label" for="table{{ $table->id }}">{{ $table->name }} Lantai: {{ $table->floor }}</label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</form>
@endsection

@section('script')
<style>
    .radio-select:checked+.card {
        box-shadow: 0 0 1px 1px #3874ff;
    }

    .radio-select {
        /* display: none; */
    }

    .card-input:hover {
        /* cursor: pointer; */
    }
</style>
@endsection