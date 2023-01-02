@extends('layouts.front')

@section('content')

@include('components.app-search-form')

<!-- Hero Wrapper -->
<div class="hero-wrapper">
    <div class="container">
        <div class="pt-3">
            <!-- Hero Slides-->
            <div class="hero-slides owl-carousel">
                <!-- Single Hero Slide-->
                <div class="single-hero-slide" style="background-image: url('img/bg-img/1.jpg')">
                    <div class="slide-content h-100 d-flex align-items-center">
                        <div class="slide-text">
                            <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                data-duration="1000ms">Faz Cafe & Balls</h4>
                            <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">
                                Play and chill</p>
                            {{-- <a class="btn btn-primary" href="#" data-animation="fadeInUp" data-delay="800ms"
                                data-duration="1000ms">Buy Now</a> --}}
                        </div>
                    </div>
                </div>
                <!-- Single Hero Slide-->
                <div class="single-hero-slide" style="background-image: url('img/bg-img/2.jpg')">
                    <div class="slide-content h-100 d-flex align-items-center">
                        <div class="slide-text">
                            <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                data-duration="1000ms">Enjoy playing balls</h4>
                            <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">
                                With music & karaoke</p>
                        </div>
                    </div>
                </div>
                <!-- Single Hero Slide-->
                <div class="single-hero-slide" style="background-image: url('img/bg-img/3.jpg')">
                    <div class="slide-content h-100 d-flex align-items-center">
                        <div class="slide-text">
                            <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms"
                                data-duration="1000ms">Food & Drink</h4>
                            {{-- <p class="text-white" data-animation="fadeInUp" data-delay="400ms"
                                data-duration="1000ms">3
                                years warranty</p> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Catagories -->
<div class="product-catagories-wrapper py-3">
    <div class="container">
        <div class="row g-2 rtl-flex-d-row-r">
            @foreach ($categories as $category)
            <div class="col-3">
                <div class="card catagory-card">
                    <div class="card-body px-2">
                        <a href="{{ route('products.index', ['category' => $category->id, 'order_by' => 'name']) }}">
                            <img src="{{ asset($category->image) }}" alt="" class="rounded">
                            <span>{{ $category->name }}</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Flash Sale Slide -->
<div class="flash-sale-wrapper py-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between rtl-flex-d-row-r">
            <h6 class="d-flex align-items-center rtl-flex-d-row-r"><i
                    class="fa-solid fa-bolt-lightning me-1 text-danger lni-flashing-effect"></i>Promo</h6>
            <ul class="sales-end-timer ps-0 d-flex align-items-center rtl-flex-d-row-r"
                data-countdown="2023/01/31 00:00:00">
                <li><span class="days">0</span>d</li>
                <li><span class="hours">0</span>h</li>
                <li><span class="minutes">0</span>m</li>
                <li><span class="seconds">0</span>s</li>
            </ul>
        </div>
        <!-- Flash Sale Slide-->
        <div class="flash-sale-slide owl-carousel">
            <!-- Flash Sale Card -->
            @foreach ($products->where('category_id', 4) as $product)
            <div class="card flash-sale-card">
                <div class="card-body">
                    <a href="{{ route('products.show', $product->id) }}">
                        <img src="{{ asset($product->image) }}" alt="">
                        <span class="product-title">{{ $product->name }}</span>
                        <p class="sale-price">{{ number_format($product->price) }}</p>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Banner --}}
<div class="container">
    <div class="cta-text dir-rtl p-4 p-lg-5">
        <div class="row">
            <div class="col-9">
                <h4 class="text-white mb-1">Up to 30% discount</h4>
                <p class="text-white mb-2 opacity-75">Waktu lebih banyak, bayar lebih sedikit</p><a
                    class="btn btn-warning"
                    href="{{ route('products.index', ['category' => 4, 'order_by' => 'name']) }}">Selengkapnya</a>
            </div>
        </div><img src="img/bg-img/make-up.png" alt="">
    </div>
</div>

<div class="top-products-area py-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
            <h6>Billiard & Karaoke</h6><a class="btn p-0"
                href="{{ route('products.index', ['category' => 1, 'order_by' => 'name']) }}">Lebih banyak<i
                    class="ms-1 fa-solid fa-arrow-right-long"></i></a>
        </div>
        <div class="row g-2">
            @foreach ($products->where('category_id', 1) as $product)
            @include('components.app-product-card', ['product' => $product])
            @endforeach
        </div>
    </div>
</div>
<!-- CTA Area -->
<div class="container">
    <div class="cta-text dir-rtl p-4 p-lg-5">
        <div class="row">
            <div class="col-9">
                <h4 class="text-white mb-1">Live table time</h4>
                <p class="text-white mb-2 opacity-75">Get what you want.</p>
                <a class="btn btn-warning" href="{{ route('live-table') }}">Cek sekarang</a>
            </div>
        </div><img src="img/bg-img/make-up-2.png" alt="">
    </div>
</div>
<!-- Weekly Best Sellers-->
<div class="weekly-best-seller-area py-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
            <h6>Minuman</h6><a class="btn p-0"
                href="{{ route('products.index', ['category' => 3, 'order_by' => 'name']) }}"> Lebih banyak
                <i class="ms-1 fa-solid fa-arrow-right-long"></i></a>
        </div>
        <div class="row g-2">
            @foreach ($products->where('category_id', 3)->take(9) as $product)
            @include('components.app-product-card', ['product' => $product])
            @endforeach
        </div>
    </div>
</div>
<!-- Discount Coupon Card-->
{{-- <div class="container">
    <div class="discount-coupon-card p-4 p-lg-5 dir-rtl">
        <div class="d-flex align-items-center">
            <div class="discountIcon"><img class="w-100" src="img/core-img/discount.png" alt=""></div>
            <div class="text-content">
                <h4 class="text-white mb-1">Get 20% discount!</h4>
                <p class="text-white mb-0">To get discount, enter the<span class="px-1 fw-bold">GET20</span>code on the
                    checkout page.</p>
            </div>
        </div>
    </div>
</div> --}}
<!-- Featured Products Wrapper-->
<div class="featured-products-wrapper py-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
            <h6>Makanan</h6><a class="btn p-0"
                href="{{ route('products.index', ['category' => 2, 'order_by' => 'name']) }}">Lebih banyak<i
                    class="ms-1 fa-solid fa-arrow-right-long"></i></a>
        </div>
        <div class="row g-2">
            @foreach ($products->where('category_id', 2)->take(9) as $product)
            @include('components.app-product-card', ['product' => $product])
            @endforeach
        </div>
    </div>
</div>
{{-- <div class="pb-3">
    <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between dir-rtl">
            <h6>Collections</h6><a class="btn p-0" href="#">
                View All<i class="ms-1 fa-solid fa-arrow-right-long"></i></a>
        </div>
        <div class="collection-slide owl-carousel">
            <div class="card collection-card"><a href="single-product.html"><img src="img/product/17.jpg" alt=""></a>
                <div class="collection-title"><span>Women</span><span class="badge bg-danger">9</span></div>
            </div>

        </div>
    </div>
</div> --}}
@endsection