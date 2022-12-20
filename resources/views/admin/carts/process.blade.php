@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.orders.index_active') }}">Transaksi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Proses Pesanan</li>
    </ol>
</nav>
<h2 class="mb-5">Proses Pesanan</h2>
<div class="row justify-content-between">
    <div class="col-sm-7 col-xl-7">
        <div class="card">
            <div class="card-body pb-0">
                {{-- <h3 class="mb-0">Rincian pesanan</h3> --}}
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">Produk</th>
                            <th scope="col" class="text-end">Harga</th>
                            <th scope="col" class="text-center">Qty</th>
                            <th scope="col" class="text-end">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td class="text-end">{{ number_format($item->price) }}</td>
                            <td class="text-center">{{ $item->quantity }}</td>
                            <td class="text-end">{{ number_format($item->quantity * $item->price) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                    <p class="text-1100 fw-semi-bold lh-sm mb-0">Total Pesanan :</p>
                    <p class="text-1100 fw-bold lh-sm mb-0">{{ number_format(Cart::getTotal()) }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5 col-xl-5">
        <div class="card">
            <form action="{{ route('admin.carts.checkout') }}" method="post">
                @csrf
                <div class="card-body">
                    <h5 class="card-title mb-4">Detail Pesanan</h5>
                    <div class="mb-4">
                        <h6>Aktifkan Kartu</h6>
                        {{-- <p class="mb-2"><small>*Scan kartu untuk mengaktifkan kartu</small></p> --}}
                        <div class="mb-2" id="reader" width="320px"></div>
                        <input class="form-control" id="code" type="text" name="code" placeholder="Scan QRCode Kartu" />
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-2">Pembeli Atas Nama</h6>
                        <input type="text" class="form-control" name="buyer" placeholder="Masukan nama pembeli" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-2">Meja</h6>
                        <select class="form-select mb-4" aria-label="delivery type" name="table_id" required>
                            @foreach ($tables as $table)
                            <option value="{{ $table->id }}" >{{ $table->name }} {{ $table->is_billiard ? '- Lantai' . $table->floor : '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-2">Metode Pembayaran</h6>
                        <select class="form-select" aria-label="delivery type" name="payment_method">
                            <option value="Cash">Cash</option>
                            <option value="Transfer">Transfer</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-2">Status Pembayaran</h6>
                        <select class="form-select" aria-label="delivery type" name="payment_status">
                            <option value="Lunas">Lunas</option>
                            <option value="Bayar Nanti">Bayar Nanti</option>
                        </select>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">Simpan Pesanan
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"> </script>

<script>
    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete"
            || document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(function () {
        var resultContainer = document.getElementById('code');
        var lastResult, countResults = 0;
        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText !== lastResult) {
                ++countResults;
                splits = decodedText.split("/")
                document.getElementById("code").value = splits[4];               
                html5QrcodeScanner.clear();
            }
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    });
</script>
@endsection