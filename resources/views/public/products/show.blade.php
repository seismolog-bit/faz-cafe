@extends('layouts.front')

@section('content')

<div class="product-slide-wrapper">
    <div class="product-slides owl-carousel">
        <div class="single-product-slide" style="background-image: url({{ asset($product->image) }})"></div>
    </div>
</div>
<div class="product-description pb-3">
    <!-- Product Title & Meta Data-->
    <div class="product-title-meta-data bg-white mb-3 py-3">
        <div class="container d-flex justify-content-between rtl-flex-d-row-r">
            <div class="p-title-price">
                <h5 class="mb-1">{{ $product->name }}</h5>
                <p class="sale-price mb-0 lh-1">{{ number_format($product->price) }}</p>
            </div>
            {{-- <div class="p-wishlist-share"><a href="wishlist-grid.html"><i class="fa-solid fa-heart"></i></a>
            </div> --}}
        </div>
    </div>
    @if ($product->category_id == 4)
    <div class="flash-sale-panel bg-white mb-3 py-3">
        <div class="container">
            <!-- Sales Offer Content-->
            <div class="sales-offer-content d-flex align-items-end justify-content-between">
                <!-- Sales End-->

                <div class="sales-end">
                    <p class="mb-1 font-weight-bold">
                        <i class="fa-solid fa-bolt-lightning lni-flashing-effect text-danger"></i> Promo berakhir pada
                    </p>
                    <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss-->
                    <ul class="sales-end-timer ps-0 d-flex align-items-center" data-countdown="2023/01/31 00:00:00">
                        <li><span class="days">0</span>d</li>
                        <li><span class="hours">0</span>h</li>
                        <li><span class="minutes">0</span>m</li>
                        <li><span class="seconds">0</span>s</li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    @endif

    <div class="p-specification bg-white py-3">
        <div class="container">
            <h6>Detail</h6>
            {!! $product->detail !!}
        </div>
    </div>

    <div class="pb-3"></div>
    <div class="related-product-wrapper bg-white py-3 mb-3">
        <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between rtl-flex-d-row-r">
                <h6>Related Products</h6><a class="btn p-0" href="{{ route('products.index', ['category' => $product->category_id, 'order_by' => 'name']) }}">Lebih banyak</a>
            </div>
            <div class="collection-slide owl-carousel">
                @foreach ($relates as $product)
                <div class="card collection-card">
                    <a href="single-product.html"><img src="{{ asset($product->image) }}" alt=""></a>
                    <div class="collection-title">
                        <span>{{ \Illuminate\Support\Str::limit($product->name, 15,
                            $end='...') }}</span>
                        {{-- <span class="badge bg-danger">{{ number_format($product->price)
                            }}</span> --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection