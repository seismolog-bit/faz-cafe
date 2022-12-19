<section class="py-0">
    <div class="container-small">
        <div class="ecommerce-topbar">
            <nav class="navbar navbar-expand-lg navbar-light px-0">
                <div class="row gx-0 gy-2 w-100 flex-between-center">
                    <div class="col-auto">
                        <a class="text-decoration-none" href="{{ route('index') }}">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/icons/logo-menu.png') }}" alt="phoenix" height="28" />
                            </div>
                        </a>
                    </div>
                    <div class="col-auto order-md-1">
                        <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
                            <li class="nav-item d-flex align-items-center">
                                <div class="theme-control-toggle fa-icon-wait px-2">
                                    <input class="form-check-input ms-0 theme-control-toggle-input"
                                        id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme"
                                        value="dark" />
                                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch theme">
                                        <span class="icon" data-feather="moon"></span>
                                    </label>
                                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch theme">
                                        <span class="icon" data-feather="sun"></span>
                                    </label>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link px-2" id="navbarDropdownUser" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-700" data-feather="user" style="height:20px;width:20px;">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300 mt-2"
                                    aria-labelledby="navbarDropdownUser">
                                    <div class="card position-relative border-0">
                                        @auth
                                        <div class="card-body p-0">
                                            <div class="text-center pt-4 pb-3">
                                                <div class="avatar avatar-xl ">
                                                    <img class="rounded-circle " src="{{ asset(Auth::user()->avatar) }}" alt="" />
                                                </div>
                                                <h6 class="mt-2 text-black">{{ Auth::user()->name }}</h6>
                                            </div>
                                        </div>
                                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                                <li class="nav-item">
                                                    <a class="nav-link px-3" href="{{ route('home') }}">
                                                        <span class="me-2 text-900"
                                                            data-feather="pie-chart"></span>Dashboard</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer p-0 pt-2 border-top">
                                            <div class="px-3 ">
                                                <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!">
                                                    <span class="me-2" data-feather="log-out">
                                                    </span>Sign out</a>
                                            </div>
                                            <div class="my-2 text-center fw-bold fs--2 text-600">
                                                <a class="text-600 me-1" href="#!">Privacy policy</a>&bull;
                                                <a class="text-600 mx-1" href="#!">Terms</a>&bull;
                                                <a class="text-600 ms-1" href="#!">Cookies</a>
                                            </div>
                                        </div>
                                        @endauth
                                        @guest
                                        <div class="card-footer p-0 pt-2 border-top">
                                            <div class="px-3">
                                                <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                    href="{{ route('login') }}">
                                                    <span class="me-2" data-feather="log-in">
                                                    </span>login</a>
                                            </div>
                                            <div class="my-2 text-center fw-bold fs--2 text-600">
                                                <a class="text-600 me-1" href="#!">Privacy policy</a>&bull;
                                                <a class="text-600 mx-1" href="#!">Terms</a>&bull;
                                                <a class="text-600 ms-1" href="#!">Cookies</a>
                                            </div>
                                        </div>
                                        @endguest
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="search-box ecommerce-search-box w-100">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                <input class="form-control search-input search form-control-sm" type="search"
                                    placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>

<nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-between">
    <div class="container-small d-flex flex-between-center" data-navbar="data-navbar">
        <div class="dropdown"><button class="btn text-900 ps-0 pe-5 text-nowrap dropdown-toggle dropdown-caret-none"
                data-category-btn="data-category-btn" data-bs-toggle="dropdown"><span
                    class="fas fa-bars me-2"></span>Category</button>
            <div class="dropdown-menu border py-0 category-dropdown-menu">
                <div class="card border-0 scrollbar" style="max-height: 657px;">
                    <div class="card-body p-6 pb-3">
                        <div class="row gx-7 gy-5 mb-5">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                        data-feather="pocket" style="stroke-width:3;"></span>
                                    <h6 class="text-1000 mb-0 text-nowrap">Menu</h6>
                                </div>
                                <div class="ms-n2">
                                    <a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                        href="#!">Billiard</a>
                                    <a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                        href="#!">Minuman</a>
                                    <a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                        href="#!">Makanan Ringan </a>
                                    <a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                                        href="#!">Makanan</a>
                                </div>
                            </div>
                            {{-- <div class="text-center border-top pt-3">
                                <a class="fw-bold" href="#!">See all Categories
                                    <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="navbar-nav justify-content-end align-items-center">
            <li class="nav-item" data-nav-item="data-nav-item">
                <a class="nav-link ps-0" aria-current="page" href="{{ route('index') }}">Home</a>
            </li>
            {{-- <li class="nav-item" data-nav-item="data-nav-item">
                <a class="nav-link ps-0" aria-current="page" href="{{ route('table-time') }}">Table Time</a>
            </li> --}}
        </ul>
    </div>
</nav>