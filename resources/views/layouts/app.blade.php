<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Faz Cafe & Balls</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendors/unicons/release/v4.0.0/css/line.css') }}">
    <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
</head>

<body>
    <main class="main" id="top">
        @include('components.app-navbar')
        <div class="ecommerce-homepage pt-5 mb-9">
            <section class="py-0">

                @yield('content')
            </section>
        </div>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        {{-- <section class="bg-100 dark__bg-1100">
            <div class="container-small">
                <div class="row py-md-9 justify-content-between gy-4">
                    <div class="col-12 col-lg-4">
                        <div class="d-flex align-items-center mb-3"><img src="../../../assets/img/icons/logo.png"
                                alt="phoenix" width="27" />
                            <p class="logo-text ms-2">phoenix</p>
                        </div>
                        <p class="text-700 mb-1 fw-semi-bold lh-sm fs--1">Phoenix is a free in-house admin dashboard
                            template with fascinating features and amazing layout. The template is responsive to all
                            major browsers and is compatible with all available devices and screen sizes.</p>
                    </div>
                    <div class="col-6 col-md-auto">
                        <h5 class="fw-bolder mb-3">About Phoenix</h5>
                        <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1"
                                href="#!">Careers</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Affiliate
                                Program</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Privacy Policy</a><a
                                class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Terms & Conditions</a></div>
                    </div>
                    <div class="col-6 col-md-auto">
                        <h5 class="fw-bolder mb-3">Stay Connected</h5>
                        <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1"
                                href="#!">Blogs</a><a class="mb-1 fw-semi-bold fs--1" href="#!"><span
                                    class="fab fa-facebook-square text-facebook me-2"></span><span
                                    class="text-800">Facebook</span></a><a class="mb-1 fw-semi-bold fs--1"
                                href="#!"><span class="fab fa-twitter-square text-twitter me-2"></span><span
                                    class="text-800">Twitter</span></a></div>
                    </div>
                    <div class="col-6 col-md-auto">
                        <h5 class="fw-bolder mb-3">Customer Service</h5>
                        <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Help
                                Desk</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Support, 24/7</a><a
                                class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Community of Phoenix</a></div>
                    </div>
                    <div class="col-6 col-md-auto">
                        <h5 class="fw-bolder mb-3">Payment Method</h5>
                        <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Cash on
                                Delivery</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Online Payment</a><a
                                class="text-700 fw-semi-bold fs--1 mb-1" href="#!">PayPal</a><a
                                class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Installment</a></div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section> --}}
        <!-- ============================================-->

        <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-900">Made with love
                        <span class="d-none d-sm-inline-block"></span>
                        <span class="mx-1">|</span>
                        <br class="d-sm-none" />2022 &copy;
                        <a class="ms-1" href="https://themewagon.com/">Faz Cafe & Balls</a>
                    </p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    {{-- <p class="mb-0 text-600">v1.0.0</p> --}}
                </div>
            </div>
        </footer>
    </main>

    @yield('script')
    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/phoenix.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
</body>

</html>