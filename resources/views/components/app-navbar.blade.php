<div class="header-area" id="headerArea">
    <div class="container h-100 d-flex align-items-center justify-content-between d-flex rtl-flex-d-row-r">
        <!-- Logo Wrapper -->
        <div class="logo-wrapper"><a href="{{ route('index') }}"><img
                    src="{{ asset('assets/img/icons/logo-menu.png') }}" alt="" style="height: 35px !important;"></a>
        </div>
        <div class="navbar-logo-container d-flex align-items-center">

            @auth
            <div class="user-profile-icon ms-2">
                <a href="profile.html">
                    <img src="{{ asset(Auth::user()->avatar) }}" alt=""></a>
            </div>
            @endauth

            <div class="suha-navbar-toggler ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas"
                aria-controls="suhaOffcanvas">
                <div><span></span><span></span><span></span></div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas"
    aria-labelledby="suhaOffcanvasLabel">
    <!-- Close button-->
    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <!-- Offcanvas body-->
    <div class="offcanvas-body">
        <!-- Sidenav Profile-->
        <div class="sidenav-profile">
            <div class="user-profile"><img src="img/bg-img/9.jpg" alt=""></div>
            <div class="user-info">
                <h5 class="user-name mb-1 text-white">Suha Sarah</h5>
                <p class="available-balance text-white">Available points <span class="counter">499</span></p>
            </div>
        </div>
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
            <li><a href="profile.html"><i class="fa-solid fa-user"></i>My Profile</a></li>
            <li><a href="notifications.html"><i class="fa-solid fa-bell lni-tada-effect"></i>Notifications<span
                        class="ms-1 badge badge-warning">3</span></a></li>
            <li class="suha-dropdown-menu"><a href="#"><i class="fa-solid fa-store"></i>Shop Pages</a>
                <ul>
                    <li><a href="shop-grid.html">Shop Grid</a></li>
                    <li><a href="shop-list.html">Shop List</a></li>
                    <li><a href="single-product.html">Product Details</a></li>
                    <li><a href="featured-products.html">Featured Products</a></li>
                    <li><a href="flash-sale.html">Flash Sale</a></li>
                </ul>
            </li>
            <li><a href="pages.html"><i class="fa-solid fa-file-code"></i>All Pages</a></li>
            <li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="fa-solid fa-heart"></i>My Wishlist</a>
                <ul>
                    <li><a href="wishlist-grid.html">Wishlist Grid</a></li>
                    <li><a href="wishlist-list.html">Wishlist List</a></li>
                </ul>
            </li>
            <li><a href="settings.html"><i class="fa-solid fa-sliders"></i>Settings</a></li>
            <li><a href="intro.html"><i class="fa-solid fa-toggle-off"></i>Sign Out</a></li>
        </ul>
    </div>
</div>