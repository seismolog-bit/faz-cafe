@extends('layouts.admin')

@section('content')

<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Home</a></li>
        <li class="breadcrumb-item active">Transaksi</li>
    </ol>
</nav>
<div class="row align-items-center justify-content-between g-3 mb-4">
    <div class="col-auto">
        <h2 class="mb-0">Transaksi Aktif</h2>
    </div>
    <div class="col-auto">
        <div class="row g-2 g-sm-3">
            <div class="col-auto">
                <a class="btn btn-phoenix-primary" href="{{ route('admin.carts.index') }}">
                    <i class="fa-solid fa-cart-plus"></i> Buat Transaksi
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row g-3">
    {{-- <h3 class="fw-semi-bold mb-3">Transaksi Aktif</h3> --}}
    @foreach ($orders as $order)
    <div class="col-6 col-md-4">
        <div
            class="card h-100 overflow-hidden {{ $order->table->is_billiard ? 'bg-primary-soft border-primary primary-boxshadow light' : '' }} ">
            <div class="bg-holder"
                style="background-image:url(../../../assets/img/bg/8.png);background-position:left bottom;background-size:auto;">
            </div>
            <!--/.bg-holder-->
            <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                <div class="d-flex justify-content-between">
                    <div class="mb-5 mb-md-0 mb-lg-5">
                        <div class="d-sm-flex align-items-center mb-3">
                            <h3 class="mb-0">{{ $order->table->name }} | Lantai {{ $order->table->floor }}</h3>
                        </div>
                        <p class="fs--1 text-700">Pembeli: {{ $order->buyer }}</p>

                    </div>
                    @if (strtotime(Carbon\Carbon::now()) > strtotime($order->end_time))
                    <i class="fa-regular fa-circle-xmark text-danger" style="width: 54px; height: 54px;"></i>
                    @else
                    <i class="fa-solid fa-rocket text-primary" style="width: 54px; height: 54px;"></i>
                    @endif
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="me-3">
                            <p class="mb-2 text-800">Start</p>
                            <h5 class="text-800">{{ Carbon\Carbon::parse($order->start_time)->format('g:i:s'
                                ) }}</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="me-3">
                            <p class="mb-2 text-800">End</p>
                            <h5 class="text-800">{{ Carbon\Carbon::parse($order->end_time)->format('g:i:s'
                                ) }}</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="me-3">
                            <p class="mb-2 text-800">Time</p>
                            <span data-countdown="{{ Carbon\Carbon::parse($order->end_time) }}"></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="me-3">
                            <p class="mb-2 text-800">Qty</p>
                            <h5 class="text-800">{{ $order->order_items->sum('qty') }}</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="me-3">
                            <p class="mb-2 text-800">Total</p>
                            <h5 class="text-800">{{ number_format($order->grand_total, 0) }}</h5>
                        </div>
                    </div>
                </div>

                <div class="row g-2">
                    <div class="col-12 col-md-auto flex-md-grow-1">
                        <a class="btn btn-primary w-100" href="{{ route('admin.orders.checkout', $order) }}">Selesaikan</a>
                    </div>
                    <div class="col-12 col-sm-auto">
                        <a class="btn btn-phoenix-primary w-100" href="{{ route('admin.orders.edit', $order) }}">
                            <i class="fas fa-plus"></i> Tambah Pesanan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

@section('script')
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.js"></script>

<script type="text/javascript" src="//cdn.rawgit.com/hilios/jQuery.countdown/2.0.4/dist/jquery.countdown.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('[data-countdown]').each(function() {
            var $this = $(this),
                finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime('%H:%M:%S'));
            });
        });
    });
</script>
@endsection