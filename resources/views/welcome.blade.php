@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row g-3 mb-9">
        <div class="col-12">
            <div class="whooping-banner w-100 rounded-3 overflow-hidden bg-soft-danger">
                <div class="bg-holder z-index--1 bag-bg"
                    style="background-image:url({{ asset('assets/img/e-commerce/whooping_banner_bag.jpg') }});">
                </div>
                <!--/.bg-holder-->
                <div class="bg-holder z-index--1 shape-bg"
                    style="background-image:url({{ asset('assets/img/e-commerce/whooping_banner_shape.png') }});">
                </div>
                <!--/.bg-holder-->
                <div class="banner-text light" style="height: 320px;">
                    <h2 class="text-white fw-bolder fs-lg-5 fs-xxl-7">Happy launching <br>
                        <span class="gradient-text">Fazz Cafe & Balls! </span>
                    </h2>
                    <h3 class="fw-bolder text-white fs-lg-3 fs-xxl-5">Play and chill</h3>
                </div>
                {{-- <button class="btn btn-lg btn-primary rounded-pill banner-button"> Shop
                    Now</button> --}}
            </div>
        </div>
        {{-- <div class="col-12 col-xl-6">
            <div class="gift-items-banner w-100 rounded-3 overflow-hidden" style="height: 220px;">
                <div class="bg-holder z-index--1 banner-bg"
                    style="background-image:url({{ asset('assets/img/e-commerce/medium-shot.jpg') }}); ">
                </div>
                <!--/.bg-holder-->
                <div class="banner-text text-md-center light">
                    <h2 class="text-white fw-bolder fs-xl-4">Never
                        <span class="gradient-text">Give up </span>
                        <br class="d-md-none"> until the last ball fall!
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6">
            <div class="gift-items-banner w-100 rounded-3 overflow-hidden" style="height: 220px;">
                <div class="bg-holder z-index--1 banner-bg"
                    style="background-image:url({{ asset('assets/img/e-commerce/standing-waiting.jpg') }});">
                </div>
                <div class="banner-text text-md-center light">
                    <h2 class="text-primary fw-bolder fs-xl-4">Aim while
                        <span class="gradient-text">Standing </span>
                        <br class="d-md-none"> not while shooting!
                    </h2>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="row g-4 mb-6">
        <div class="col-12 col-lg-9 col-xxl-10">
            <div class="d-flex flex-between-center mb-3">
                <div class="d-flex">
                    <span class="fas fa-bolt text-warning fs-2"></span>
                    <h3 class="mx-2">Top Deals today</h3>
                    <span class="fas fa-bolt text-warning fs-2"></span>
                </div>
            </div>
            <div class="swiper-theme-container products-slider">
                <div class="swiper swiper-container theme-slider"
                    data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":20},"1200":{"slidesPerView":4,"spaceBetween":16},"1540":{"slidesPerView":5,"spaceBetween":16}}}'>
                    <div class="swiper-wrapper">
                        @foreach ($products->where('category_id', 1) as $product)
                        <div class="swiper-slide">
                            <div class="position-relative text-decoration-none product-card h-100">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <div>
                                        <div class="border border-1 border-2002 rounded-3 position-relative mb-3">
                                            <img class="img-fluid" src="{{ asset($product->image) }}" alt="" />
                                        </div>
                                        <a class="stretched-link text-decoration-none" href="product-details.html">
                                            <h6 class="mb-2 lh-sm line-clamp-3">{{ $product->name }}
                                            </h6>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-1">
                                            {{-- <p class="me-2 text-900 text-decoration-line-through mb-0">
                                                $125.00</p> --}}
                                            <h3 class="text-1100 mb-0">{{ number_format($product->price)
                                                }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-nav swiper-product-nav">
                    <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                    </div>
                    <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span>
                    </div>
                </div>
            </div>
            <a class="fw-bold d-md-none px-0" href="#!">Explore more
                <span class="fas fa-chevron-right fs--1 ms-1"></span>
            </a>
        </div>
        <div class="col-lg-3 d-none d-lg-block col-xxl-2">
            <div class="h-100 position-relative rounded-3 overflow-hidden text-end">
                {{-- <div class="bg-holder" style="background-image:url(assets/img/e-commerce/4.png);">
                </div> --}}
                <img src="{{ asset('assets/img/e-commerce/4.png') }}" height="320px" alt="">
            </div>
        </div>
        <div class="col-12 d-lg-none"><a href="#!"><img class="w-100 rounded-3"
                    src="../../../assets/img/e-commerce/6.png" alt="" /></a></div>
    </div>
    <div class="mb-6">
        <div class="d-flex flex-between-center mb-3">
            <h3>Minuman</h3>
            <a class="fw-bold d-none d-md-block" href="#!">Explore more
                <span class="fas fa-chevron-right fs--1 ms-1"></span>
            </a>
        </div>
        <div class="swiper-theme-container products-slider">
            <div class="swiper swiper-container theme-slider"
                data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
                <div class="swiper-wrapper">
                    @foreach ($products->where('category_id', 3) as $product)
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 border-2002 rounded-3 position-relative mb-3">
                                        <img class="img-fluid" src="{{ asset($product->image) }}" alt="" />
                                    </div>
                                    <a class="stretched-link text-decoration-none" href="product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3">{{ $product->name }}
                                        </h6>
                                    </a>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-1">
                                        {{-- <p class="me-2 text-900 text-decoration-line-through mb-0">
                                            $125.00</p> --}}
                                        <h3 class="text-1100 mb-0">{{ number_format($product->price)
                                            }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-nav">
                <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                </div>
                <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
            </div>
        </div><a class="fw-bold d-md-none" href="#!">Explore more<span
                class="fas fa-chevron-right fs--1 ms-1"></span></a>
    </div>
    <div class="mb-6">
        <div class="d-flex flex-between-center mb-3">
            <h3>Makanan</h3><a class="fw-bold d-none d-md-block" href="#!">Explore more<span
                    class="fas fa-chevron-right fs--1 ms-1"></span></a>
        </div>
        <div class="swiper-theme-container products-slider">
            <div class="swiper swiper-container theme-slider"
                data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
                <div class="swiper-wrapper">
                    @foreach ($products->where('category_id', 4) as $product)
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 border-2002 rounded-3 position-relative mb-3">
                                        <img class="img-fluid" src="{{ asset($product->image) }}" alt="" />
                                    </div>
                                    <a class="stretched-link text-decoration-none" href="product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3">{{ $product->name }}
                                        </h6>
                                    </a>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-1">
                                        {{-- <p class="me-2 text-900 text-decoration-line-through mb-0">
                                            $125.00</p> --}}
                                        <h3 class="text-1100 mb-0">{{ number_format($product->price)
                                            }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-nav">
                <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                </div>
                <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
            </div>
        </div><a class="fw-bold d-md-none" href="#!">Explore more<span
                class="fas fa-chevron-right fs--1 ms-1"></span></a>
    </div>
    <div class="row flex-center mb-15 mt-11 gy-6">
        <div class="col-auto"><img class="d-dark-none" src="../../../assets/img/spot-illustrations/light_17.png" alt=""
                width="305" height="400" /><img class="d-light-none"
                src="../../../assets/img/spot-illustrations/dark_17.png" alt="" width="305" height="400" /></div>
        <div class="col-auto">
            <div class="text-center text-lg-start">
                <h3 class="text-1000 mb-2"><span class="fw-semi-bold">Want to have the </span>ultimate
                    customer experience?</h3>
                <h1 class="display-3 fw-semi-bold mb-4">Become a <span class="text-primary fw-bolder">member
                    </span>today!
                </h1><a class="btn btn-lg btn-primary px-7"
                    href="../../../pages/authentication/simple/sign-up.html">Sign
                    up<span class="fas fa-chevron-right ms-2 fs--1"></span></a>
            </div>
        </div>
    </div>
</div>
@endsection