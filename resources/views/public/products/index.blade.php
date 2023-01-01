@extends('layouts.front')

@section('content')

{{-- @include('components.app-search-form') --}}

<div class="py-3">
    <div class="container">
        <div class="row g-1 align-items-center rtl-flex-d-row-r">
            <div class="col-8">
                <div class="product-catagories owl-carousel catagory-slides">
                    @foreach ($categories as $category)
                    <a class="shadow-sm"
                        href="{{ route('products.index', ['category' => $category->id, 'order_by' => 'name']) }}">
                        <img src="{{ asset($category->image) }}" alt="">{{ $category->name }}
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="col-4">
                <div class="select-product-catagory">
                    <div class="nice-select right small border-0" tabindex="0">
                        <span class="current">Urutkan</span>
                        <ul class="list">
                            <li data-value="Urutkan" class="option selected focus">Urutkan</li>
                            <li data-value="1" class="option">
                                <a
                                    href="{{ route('products.index', ['category' => $category_id, 'order_by' => 'asc']) }}">Produk
                                    Terbaru</a>
                            </li>
                            <li data-value="2" class="option">
                                <a
                                    href="{{ route('products.index', ['category' => $category_id, 'order_by' => 'name']) }}">Nama</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3"></div>
        <div class="row g-2 rtl-flex-d-row-r">
            @foreach ($products as $product)
            <div class="col-6 col-md-4">
                <div class="card product-card">
                    <div class="card-body">
                        <a class="product-thumbnail d-block" href="{{ route('products.show', $product->id) }}">
                            <img class="mb-2" src="{{ asset($product->image) }}" alt="">
                            <!-- Offer Countdown Timer: Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                            {{-- <ul class="offer-countdown-timer d-flex align-items-center shadow-sm"
                                data-countdown="2023/12/31 23:59:59">
                                <li><span class="days">364</span>d</li>
                                <li><span class="hours">05</span>h</li>
                                <li><span class="minutes">30</span>m</li>
                                <li><span class="seconds">58</span>s</li>
                            </ul> --}}
                        </a>
                        <div class="product-title">{{ $product->name }}</div>

                        <p class="sale-price">{{ number_format($product->price) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection