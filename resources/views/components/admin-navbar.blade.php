@livewireStyles
@livewireScripts

<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
    <script>
        var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('home') ? 'active' : '' }} label-1"
                            href="{{ route('home') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="compass"></span>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Home</span>
                                </span>
                            </div>
                        </a>
                    </span>
                </li>

                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Transaksi</p>
                    <hr class="navbar-vertical-line" />

                    @hasrole(['admin', 'cashier', 'waiters'])
                    <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#transaction" role="button"
                            data-bs-toggle="collapse"
                            aria-expanded="{{ request()->is('admin/orders*') ? 'true' : 'false' }}"
                            aria-controls="transaction">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon">
                                    <span class="fas fa-caret-right"></span>
                                </div>
                                <span class="nav-link-icon">
                                    <span data-feather="shopping-cart"></span>
                                </span>
                                <span class="nav-link-text">Transaksi</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent {{ request()->is(['admin/orders*', 'admin/carts']) ? 'show' : '' }}"
                                data-bs-parent="#navbarVerticalCollapse" id="transaction">
                                <p class="collapsed-nav-item-title d-none">Transaksi</p>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/carts') ? 'active' : '' }}"
                                        href="{{ route('admin.carts.index') }}" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Buat transaksi</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/orders/active') ? 'active' : '' }}"
                                        href="{{ route('admin.orders.index_active') }}" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Transaksi aktif</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.orders.index') }}" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Laporan transaksi</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </span>
                    @endrole

                    @hasrole(['admin', 'cashier'])
                    <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#product" role="button"
                            data-bs-toggle="collapse"
                            aria-expanded="{{ request()->is('admin/products*') ? 'true' : 'false' }}"
                            aria-controls="product">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon">
                                    <span class="fas fa-caret-right"></span>
                                </div>
                                <span class="nav-link-icon">
                                    {{-- <i class="fas fa-mug-saucer"></i> --}}
                                    <span data-feather="coffee"></span>
                                </span>
                                <span class="nav-link-text">Menu</span>
                            </div>
                        </a>


                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent {{ request()->is('admin/products*') ? 'show' : '' }}"
                                data-bs-parent="#navbarVerticalCollapse" id="product">
                                <p class="collapsed-nav-item-title d-none">Menu</p>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/products*') ? 'active' : '' }}"
                                        href="{{ route('admin.products.index') }}" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Daftar menu</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/products/create') ? 'active' : '' }}"
                                        href="{{ route('admin.products.create') }}" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Tambahkan menu</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/product-categories*') ? 'active' : '' }}"
                                        href="{{ route('admin.product-categories.index') }}" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Kategori</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </span>
                    @endrole

                    @hasrole(['admin', 'kitchen'])
                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/cooks') ? 'active' : '' }} label-1"
                            href="{{ route('admin.cooks.index') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span><i class="fa-solid fa-utensils"></i></span>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Status pesanan</span>
                                </span>
                            </div>
                        </a>
                    </span>
                    @endrole

                    @hasrole(['admin', 'waiters'])
                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/cooks/delivery') ? 'active' : '' }} label-1"
                            href="{{ route('admin.cooks.delivery') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="truck"></span>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Siap antar</span>
                                </span>
                            </div>
                        </a>
                    </span>
                    @endrole
                </li>

                @hasrole('admin')
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Barang</p>
                    <hr class="navbar-vertical-line" />

                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/receivings*') ? 'active' : '' }} label-1"
                            href="{{ route('admin.receivings.index') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa-solid fa-shop"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Belanja Barang</span>
                                </span>
                            </div>
                        </a>
                    </span>
                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/putaways*') ? 'active' : '' }} label-1"
                            href="{{ route('admin.putaways.index') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa-solid fa-arrow-trend-down"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Pengeluaran Barang</span>
                                </span>
                            </div>
                        </a>
                    </span>
                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/items*') ? 'active' : '' }} label-1"
                            href="{{ route('admin.items.index') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Stok Barang</span>
                                </span>
                            </div>
                        </a>
                    </span>

                    {{-- <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/putaways*') ? 'active' : '' }} label-1"
                            href="{{ route('admin.putaways.index') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Pengeluaran Barang</span>
                                </span>
                            </div>
                        </a>
                    </span> --}}
                </li>
                @endrole

                @hasrole('admin')
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Pengaturan</p>
                    <hr class="navbar-vertical-line" />

                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/tables*') ? 'active' : '' }} label-1"
                            href="{{ route('admin.tables.index') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    {{-- <span data-feather="tables"></span> --}}
                                    <i class="fas fa-table-columns"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Meja</span>
                                </span>
                            </div>
                        </a>
                    </span>
                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/cards*') ? 'active' : '' }} label-1"
                            href="{{ route('admin.cards.index') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    {{-- <span data-feather="tables"></span> --}}
                                    <i class="fas fa-id-card"></i>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Kartu Billiard</span>
                                </span>
                            </div>
                        </a>
                    </span>
                </li>
                @endrole

                @hasrole('admin')
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Users</p>
                    <hr class="navbar-vertical-line" />

                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }} label-1"
                            href="{{ route('admin.users.index') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="users"></span>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Users</span>
                                </span>
                            </div>
                        </a>
                    </span>

                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/roles*') ? 'active' : '' }} label-1"
                            href="{{ route('admin.roles.index') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="git-merge"></span>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Roles</span>
                                </span>
                            </div>
                        </a>
                    </span>

                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/permissions*') ? 'active' : '' }} label-1"
                            href="{{ route('admin.permissions.index') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="list"></span>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Permissions</span>
                                </span>
                            </div>
                        </a>
                    </span>
                </li>
                @endrole
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer"><button
            class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span
                class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span
                class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>
<nav class="navbar navbar-top navbar-expand" id="navbarDefault" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggle-icon">
                    <span class="toggle-line"></span>
                </span>
            </button>
            <a class="navbar-brand me-1 me-sm-3" href="{{ route('home') }}">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center"><img src="{{ asset('assets/img/icons/logo-menu.png') }}"
                            alt="phoenix" height="28" />
                        {{-- <p class="logo-text ms-2 d-none d-sm-block">phoenix</p> --}}
                    </div>
                </div>
            </a>
        </div>
        @livewire('nav-card-search')
        
        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2">
                    <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                        type="checkbox" data-theme-control="phoenixTheme" value="dark" />
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                        <span class="icon" data-feather="moon"></span>
                    </label>
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                        <span class="icon" data-feather="sun"></span>
                    </label>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                        <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                        <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                        <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                        <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                        <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                        <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                        <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                        <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                    </svg></a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
                    aria-labelledby="navbarDropdownNindeDots">
                    <div class="card bg-white position-relative border-0">
                        <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar"
                            style="height: 20rem; width: 19rem;">
                            <div class="row text-center align-items-center gx-0 gy-0">
                                @hasrole(['admin', 'cashier'])
                                <div class="col-4">
                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="{{ route('admin.carts.index') }}">
                                        <img src="{{ asset('assets/img/icons/add-to-basket.png') }}" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Tambah Tr.</p>
                                    </a>
                                </div>
                                @endhasrole
                                @role(['admin', 'waiters', 'cashier'])
                                <div class="col-4">
                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="{{ route('admin.orders.index_active') }}">
                                        <img src="{{ asset('assets/img/icons/money-times.png') }}" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Tr. Aktif</p>
                                    </a>
                                </div>
                                @endrole
                                @role(['admin','cashier'])
                                <div class="col-4">
                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="{{ route('admin.orders.index') }}">
                                        <img src="{{ asset('assets/img/icons/expenses.png') }}" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Laporan Tr.</p>
                                    </a>
                                </div>
                                @endrole
                                @role(['admin', 'kitchen'])
                                <div class="col-4">
                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="{{ route('admin.cooks.index', ['category' => 'makanan']) }}">
                                        <img src="{{ asset('assets/img/icons/lunch-time.png') }}" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Psn. Makanan
                                        </p>
                                    </a>
                                </div>
                                @endrole
                                @role(['admin', 'kitchen'])
                                <div class="col-4">
                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="{{ route('admin.cooks.index', ['category' => 'minuman']) }}">
                                        <img src="{{ asset('assets/img/icons/coffee-break.png') }}" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Psn. Minuman
                                        </p>
                                    </a>
                                </div>
                                @endrole
                                @role(['admin', 'waiters'])
                                <div class="col-4">
                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="{{ route('admin.cooks.delivery') }}">
                                        <img src="{{ asset('assets/img/icons/food-delivery.png') }}" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Antar Psn.</p>
                                    </a>
                                </div>
                                @endrole
                                @role(['admin', 'cashier'])
                                <div class="col-4">
                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="{{ route('admin.products.index') }}">
                                        <img src="{{ asset('assets/img/icons/burger.png') }}" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Menu</p>
                                    </a>
                                </div>
                                @endrole
                                @role('admin')
                                <div class="col-4">
                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="{{ route('admin.tables.index') }}">
                                        <img src="{{ asset('assets/img/icons/chair.png') }}" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Set. Table</p>
                                    </a>
                                </div>
                                @endrole
                                @role('admin')
                                <div class="col-4">
                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="{{ route('admin.users.index') }}">
                                        <img src="{{ asset('assets/img/icons/man.png') }}" alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Users</p>
                                    </a>
                                </div>
                                @endrole
                                @role('admin')
                                <div class="col-4">
                                    <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="{{ route('admin.roles.index') }}">
                                        <img src="{{ asset('assets/img/icons/gear-assembly.png') }}" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Roles</p>
                                    </a>
                                </div>
                                @endrole
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-l ">
                        <img class="rounded-circle " src="{{ asset(Auth::user()->avatar) }}" alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                    aria-labelledby="navbarDropdownUser">
                    <div class="card position-relative border-0">
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
                                {{-- <li class="nav-item">
                                    <a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user">
                                        </span>Profile</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link px-3" href="{{ route('home') }}">
                                        <span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link px-3" href="#!">
                                        <span class="me-2 text-900" data-feather="settings"></span>Pengaturan
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="card-footer border-top">
                            <div class="px-3">
                                <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="me-2" data-feather="log-out"> </span>Sign out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            <div class="my-2 text-center fw-bold fs--2 text-600">
                                <a class="text-600 me-1" href="#!">Privacy policy</a>&bull;
                                <a class="text-600 mx-1" href="#!">Terms</a>&bull;
                                <a class="text-600 ms-1" href="#!">Cookies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-top navbar-slim navbar-expand" id="navbarSlim" style="display:none;">
</nav>
<nav class="navbar navbar-top navbar-expand-lg" id="navbarTopNew" style="display:none;">
</nav>
<nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarTopSlimNew"
    style="display:none;">
</nav>