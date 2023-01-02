@extends('layouts.front')

@section('content')

@if ($orders->isEmpty())
<div class="container">
    <!-- Checkout Wrapper-->
    <div class="checkout-wrapper-area py-3">
        <div class="credit-card-info-wrapper"><img class="d-block mb-4" src="img/bg-img/table-lamp.png" alt="">
            <div class="cod-info text-center mb-3">
                <p>Table sedang kosong, segera lakukan pemesanan table atau booking melalui kontak</p>
            </div><a class="btn btn-primary btn-lg w-100" href="{{ route('bookings') }}">Booking</a>
        </div>
    </div>
</div>
@else

<div class="top-products-area py-3">
    <div class="container">
        <div class="row g-2 rtl-flex-d-row-r">
            @foreach ($orders as $order)
            <div class="col-12 col-md-6">
                <div class="card blog-card list-card">
                    <div class="post-img">
                        <img src="img/bg-img/12.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <div class="bg-shapes">
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="circle3"></div>
                            <div class="circle4"></div>
                        </div>
                        {{-- <a class="post-catagory d-block" href="#">Review</a> --}}
                        <div class="post-title">{{ $order->table->name }}</div>
                        <div class="post-meta d-flex align-items-center justify-content-between flex-wrap">
                            <ul class="sales-end-timer ps-0 d-flex align-items-center rtl-flex-d-row-r"
                                data-countdown="{{ Carbon\Carbon::parse($order->end_time)}}">
                                {{-- <li><span class="days">0</span>d</li> --}}
                                <li><span class="hours">0</span>h</li>
                                <li><span class="minutes">0</span>m</li>
                                <li><span class="seconds">0</span>s</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endif

@endsection