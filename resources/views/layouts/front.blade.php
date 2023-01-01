<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Suha - Multipurpose Ecommerce Mobile HTML Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/icons/icon-72x72.png') }}">
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="{{ asset('img/icons/icon-96x96.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icons/icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('img/icons/icon-167x167.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icons/icon-180x180.png') }}">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brands.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Web App Manifest -->
    {{-- <link rel="manifest" href="{{ asset('manifest.json') }}"> --}}
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    
    @yield('style')
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only"></div>
      </div>
    </div>
    
    @include('components.app-navbar')
    
    {{-- @include('components.app-pwa-install') --}}

    <div class="page-content-wrapper">
      
      @yield('content')

    </div>

    <div class="internet-connection-status" id="internetStatus"></div>

    @include('components.app-footer')

    <!-- All JavaScript Files-->
    <script src="{{ asset('js/bootstrap.bundle.min.js' )}}"></script>
    <script src="{{ asset('js/jquery.min.js' )}}"></script>
    <script src="{{ asset('js/waypoints.min.js' )}}"></script>
    <script src="{{ asset('js/jquery.easing.min.js' )}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js' )}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js' )}}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js' )}}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js' )}}"></script>
    <script src="{{ asset('js/jquery.passwordstrength.js' )}}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js' )}}"></script>
    <script src="{{ asset('js/theme-switching.js' )}}"></script>
    <script src="{{ asset('js/no-internet.js' )}}"></script>
    <script src="{{ asset('js/active.js' )}}"></script>
    <script src="{{ asset('js/pwa.js' )}}"></script>

    @yield('script')
  </body>

</html>