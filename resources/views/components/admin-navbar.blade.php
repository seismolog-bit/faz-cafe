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
                        <a class="nav-link {{ request()->is('home') ? 'active' : '' }} label-1" href="{{ route('home') }}" role="button" data-bs-toggle=""
                            aria-expanded="false">
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

                    <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#transaction"
                            role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="transaction">
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
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="transaction">
                                <p class="collapsed-nav-item-title d-none">Transaksi</p>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/pricing/pricing-column.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Buat transaksi</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/pricing/pricing-grid.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Transaksi aktif</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/pricing/pricing-grid.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Laporan transaksi</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </span>

                    <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#product"
                            role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="product">
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
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="product">
                                <p class="collapsed-nav-item-title d-none">Menu</p>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/pricing/pricing-column.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Daftar menu</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/pricing/pricing-grid.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Tambahkan menu</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('admin/product-categories*') ? 'active' : '' }}" href="{{ route('admin.product-categories.index') }}" data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Kategori</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </span>

                    <span class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1" href="#stock"
                            role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="stock">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon">
                                    <span class="fas fa-caret-right"></span>
                                </div>
                                <span class="nav-link-icon">
                                    <span data-feather="package"></span>
                                </span>
                                <span class="nav-link-text">Stok</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="stock">
                                <p class="collapsed-nav-item-title d-none">Stok</p>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/pricing/pricing-column.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Laporan stok</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/pricing/pricing-grid.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Opname stok</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/pricing/pricing-grid.html" data-bs-toggle=""
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Masuk stok</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </span>
                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/tables*') ? 'active' : '' }} label-1" href="{{ route('admin.tables.index') }}" role="button" data-bs-toggle=""
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
                </li>
                
                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Users</p>
                    <hr class="navbar-vertical-line" />

                    <span class="nav-item-wrapper">
                        <a class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }} label-1" href="{{ route('admin.users.index') }}" role="button" data-bs-toggle=""
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
                        <a class="nav-link {{ request()->is('admin/roles*') ? 'active' : '' }} label-1" href="{{ route('admin.roles.index') }}" role="button" data-bs-toggle=""
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
                        <a class="nav-link {{ request()->is('admin/permissions*') ? 'active' : '' }} label-1" href="{{ route('admin.permissions.index') }}" role="button" data-bs-toggle=""
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
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer"><button
            class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span
                class="uil uil-left-arrow-to-left fs-0"></span><span
                class="uil uil-arrow-from-right fs-0"></span><span
                class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>
<nav class="navbar navbar-top navbar-expand" id="navbarDefault" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                aria-controls="navbarVerticalCollapse" aria-expanded="false"
                aria-label="Toggle Navigation">
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
        <div class="search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                    class="form-control form-control-sm rounded-pill search-input fuzzy-search"
                    type="search" placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
                <button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
            </div>
            <div class="dropdown-menu border font-base start-0 py-0 overflow-hidden w-100">
                <div class="scrollbar list pb-3" style="max-height: 30rem;">
                    <h6 class="dropdown-header text-1000 fs--1 py-2 lh-sm"> </h6>
                    {{-- <a class="dropdown-item py-2 d-flex align-items-center" href="members.html">
                        <div class="avatar avatar-l status-online  me-2 text-900">
                            <img class="rounded-circle " src="../../assets/img/team/10.png" alt="" />
                        </div>
                        <div class="flex-1">
                            <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                            <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                        </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="members.html">
                        <div class="avatar avatar-l  me-2 text-900">
                            <img class="rounded-circle " src="../../assets/img/team/12.png" alt="" />
                        </div>
                        <div class="flex-1">
                            <h6 class="mb-0 text-1000 title">John Smith</h6>
                            <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2">
                    <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" />
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                        <span class="icon" data-feather="moon"></span>
                    </label>
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                        <span class="icon" data-feather="sun"></span>
                    </label>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="16"
                        height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            style="height: 20rem;">
                            <div class="row text-center align-items-center gx-0 gy-0">
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/behance.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/google-cloud.png"
                                            alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/slack.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/gitlab.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/bitbucket.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/google-drive.png"
                                            alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/trello.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/figma.png" alt=""
                                            width="20" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/twitter.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/pinterest.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/ln.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/google-maps.png"
                                            alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/google-photos.png"
                                            alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/spotify.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    <img class="rounded-circle " src="{{ asset(Auth::user()->avatar) }}"
                                        alt="" />
                                </div>
                                <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                            </div>
                            <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                    id="statusUpdateInput" type="text" placeholder="Update your status" />
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="user"></span>Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"><span
                                            class="me-2 text-900"
                                            data-feather="pie-chart"></span>Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="lock"></span>Posts &amp;
                                        Activity</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="settings"></span>Settings
                                        &amp; Privacy </a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="help-circle"></span>Help
                                        Center</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="globe"></span>Language</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer p-0 border-top">
                            <ul class="nav d-flex flex-column my-3">
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="user-plus"></span>Add
                                        another account</a></li>
                            </ul>
                            <hr />
                            <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                    href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign
                                    out</a></div>
                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                    href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1"
                                    href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-top navbar-slim navbar-expand" id="navbarSlim" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                aria-controls="navbarVerticalCollapse" aria-expanded="false"
                aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
            <a class="navbar-brand navbar-brand" href="../../index.html">phoenix <span
                    class="text-1000">slim</span></a>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
                <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                        type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Switch theme"><span class="icon me-1 d-none d-sm-block"
                            data-feather="moon"></span><span class="fs--1 fw-bold">Dark</span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Switch theme"><span class="icon me-1 d-none d-sm-block"
                            data-feather="sun"></span><span class="fs--1 fw-bold">Light</span></label></div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNotification" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                        data-feather="bell" style="height:12px;width:12px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
                    id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                    <div class="card position-relative border-0">
                        <div class="card-header p-2">
                            <div class="d-flex justify-content-between">
                                <h5 class="text-black mb-0">Notificatons</h5><button
                                    class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as
                                    read</button>
                            </div>
                        </div>
                        <div class="card-body p-0"></div>
                        <div class="scrollbar-overlay">
                            <div class="overflow-auto" style="height: 27rem;">
                                <div class="border-300">
                                    <div
                                        class="p-3 border-300 notification-card position-relative read border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="../../assets/img/team/30.png" alt="" /></div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1'>💬</span>Mentioned you in a
                                                        comment.<span
                                                            class="ms-2 text-500 fw-bold fs--2">10m</span>
                                                    </p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:41 AM </span>August 7,2021
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="p-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3">
                                                    <div class="avatar-name rounded-circle"><span>J</span>
                                                    </div>
                                                </div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Jane Foster</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1'>📅</span>Created an event.<span
                                                            class="ms-2 text-500 fw-bold fs--2">20m</span>
                                                    </p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:20 AM </span>August 7,2021
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="p-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle avatar-placeholder"
                                                        src="../../assets/img/team/avatar.png" alt="" />
                                                </div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-500 fw-bold fs--2">1h</span>
                                                    </p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-300">
                                    <div
                                        class="p-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="../../assets/img/team/57.png" alt="" /></div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1 fs--2'>💬</span>Mentioned you in a
                                                        comment.<span
                                                            class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="p-3 border-300 notification-card position-relative unread border-bottom">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="../../assets/img/team/59.png" alt="" /></div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Herman Carter</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1'>👤</span>Tagged you in a
                                                        comment.<span
                                                            class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:58 PM </span>August 7,2021
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-300 notification-card position-relative read ">
                                        <div
                                            class="d-flex align-items-center justify-content-between position-relative">
                                            <div class="d-flex">
                                                <div class="avatar avatar-m status-online me-3"><img
                                                        class="rounded-circle"
                                                        src="../../assets/img/team/58.png" alt="" /></div>
                                                <div class="me-3 flex-1">
                                                    <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                    <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                            class='me-1'>👍</span>Liked your comment.<span
                                                            class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                    <p class="text-800 fs--1 mb-0"><span
                                                            class="me-1 fas fa-clock"></span><span
                                                            class="fw-bold">10:18 AM </span>August 7,2021
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="font-sans-serif d-none d-sm-block"><button
                                                    class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown"
                                                    data-boundary="window" aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">Mark as unread</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-0 border-top border-0">
                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                    href="notifications.html">Notification history</a></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="10"
                        height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            style="height: 20rem;">
                            <div class="row text-center align-items-center gx-0 gy-0">
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/behance.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/google-cloud.png"
                                            alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/slack.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/gitlab.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/bitbucket.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/google-drive.png"
                                            alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/trello.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/figma.png" alt=""
                                            width="20" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/twitter.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/pinterest.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/ln.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin
                                        </p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/google-maps.png"
                                            alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/google-photos.png"
                                            alt="" width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                        href="#!"><img src="../../assets/img/nav-icons/spotify.png" alt=""
                                            width="30" />
                                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs--2"></span></a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                    aria-labelledby="navbarDropdownUser">
                    <div class="card position-relative border-0">
                        <div class="card-body p-0">
                            <div class="text-center pt-4 pb-3">
                                <div class="avatar avatar-xl ">
                                    <img class="rounded-circle " src="../../assets/img/team/57.png"
                                        alt="" />
                                </div>
                                <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                            </div>
                            <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                    id="statusUpdateInput" type="text" placeholder="Update your status" />
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="user"></span>Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"><span
                                            class="me-2 text-900"
                                            data-feather="pie-chart"></span>Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="lock"></span>Posts &amp;
                                        Activity</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="settings"></span>Settings
                                        &amp; Privacy </a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="help-circle"></span>Help
                                        Center</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="globe"></span>Language</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer p-0 border-top">
                            <ul class="nav d-flex flex-column my-3">
                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                            class="me-2 text-900" data-feather="user-plus"></span>Add
                                        another account</a></li>
                            </ul>
                            <hr />
                            <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                    href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign
                                    out</a></div>
                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                    href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1"
                                    href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-top navbar-expand-lg" id="navbarTopNew" style="display:none;">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarToplCollapse"
            aria-controls="navbarToplCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="../../index.html">
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="../../assets/img/icons/logo.png"
                        alt="phoenix" width="27" />
                    <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                </div>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarToplCollapse">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="dashboards">Dashboard</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="dashboards">
                    <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold"
                            href="../../index.html">E commerce</a><a class="dropdown-item fw-semi-bold"
                            href="../../dashboard/project-management.html">Project management</a><a
                            class="dropdown-item fw-semi-bold" href="../../landing.html">Landing</a><a
                            class="dropdown-item fw-semi-bold" href="../../apps/social/feed.html">Social
                            feed</a></div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="appss">Apps</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="appss">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Admin</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/add-product.html">Add
                                            product</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/products.html">Products</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/customers.html">Customers</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/customer-details.html">Customer
                                            details</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/orders.html">Orders</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/order-details.html">Order
                                            details</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/refund.html">Refund</a>
                                        <p class="nav-link mb-0 fw-bold">Landing</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/homepage.html">Homepage</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/product-details.html">Product
                                            details</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/products-filter.html">Products
                                            filter</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/cart.html">Cart</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/checkout.html">Checkout</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/shipping-info.html">Shipping
                                            info</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/profile.html">Profile</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/favourite-stores.html">Favourite
                                            stores</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/wishlist.html">Wishlist</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/order-tracking.html">Order
                                            tracking</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/invoice.html">Invoice</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Projects</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/create-new.html">Create
                                            new</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/project-list-view.html">Project
                                            list view</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/project-card-view.html">Project
                                            card view</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/project-board-view.html">Project
                                            board view</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/todo-list.html">Todo
                                            list</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/project-details.html">Project
                                            details</a>
                                        <p class="nav-link mb-0 fw-bold">Email</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/email/inbox.html">Inbox</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/email/email-detail.html">Email detail</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/email/compose.html">Compose</a>
                                        <p class="nav-link mb-0 fw-bold">Events</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/events/create-an-event.html">Create an
                                            event</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/events/event-detail.html">Event detail</a>
                                        <p class="nav-link mb-0 fw-bold">Social</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/social/profile.html">Profile</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/social/settings.html">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="pagess">Pages</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="pagess">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="../starter.html">Starter</a><a
                                            class="nav-link fw-semi-bold" href="faq.html">Faq</a>
                                        <p class="nav-link mb-0 fw-bold">Pricing</p><a
                                            class="nav-link fw-semi-bold"
                                            href="pricing/pricing-column.html">Pricing column</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pricing/pricing-grid.html">Pricing grid</a><a
                                            class="nav-link fw-semi-bold"
                                            href="notifications.html">Notifications</a><a
                                            class="nav-link fw-semi-bold" href="members.html">Members</a>
                                        <p class="nav-link mb-0 fw-bold">Split</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/split/sign-in.html">Sign in</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/split/sign-up.html">Sign up</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/split/sign-out.html">Sign out</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/split/forgot-password.html">Forgot
                                            password</a><a class="nav-link fw-semi-bold"
                                            href="../authentication/split/reset-password.html">Reset
                                            password</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Errors</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../errors/404.html">404</a><a
                                            class="nav-link fw-semi-bold" href="../errors/500.html">500</a>
                                        <p class="nav-link mb-0 fw-bold">Simple</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/simple/sign-in.html">Sign in</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/simple/sign-up.html">Sign up</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/simple/sign-out.html">Sign out</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/simple/forgot-password.html">Forgot
                                            password</a><a class="nav-link fw-semi-bold"
                                            href="../authentication/simple/reset-password.html">Reset
                                            password</a><a class="nav-link fw-semi-bold"
                                            href="../authentication/simple/lock-screen.html">Lock screen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="moduless">Modules</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="moduless">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/form-control.html">Form
                                            control</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/input-group.html">Input
                                            group</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/select.html">Select</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/checks.html">Checks</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/range.html">Range</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/floating-labels.html">Floating
                                            labels</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/layout.html">Layout</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/forms/advance/advance-select.html">Advance
                                            select</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/advance/date-picker.html">Date
                                            picker</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/advance/editor.html">Editor</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/advance/file-uploader.html">File
                                            uploader</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/advance/rating.html">Rating</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/forms/wizard.html">Wizard</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/icons/feather.html">Feather</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/icons/font-awesome.html">Font awesome</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/icons/unicons.html">Unicons</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/tables/basic-tables.html">Basic tables</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/tables/advance-tables.html">Advance
                                            tables</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/components/accordion.html">Accordion</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/components/avatar.html">Avatar</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="documentations">Documentation</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="documentations">
                    <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold"
                            href="../../documentation/getting-started.html">Getting started</a><a
                            class="dropdown-item fw-semi-bold"
                            href="../../documentation/customization/styling.html">Styling</a><a
                            class="dropdown-item fw-semi-bold"
                            href="../../documentation/customization/plugin.html">Plugin</a><a
                            class="dropdown-item fw-semi-bold"
                            href="../../documentation/layouts/vertical-navbar.html">Vertical navbar</a><a
                            class="dropdown-item fw-semi-bold"
                            href="../../documentation/layouts/horizontal-navbar.html">Horizontal
                            navbar</a><a class="dropdown-item fw-semi-bold"
                            href="../../documentation/gulp.html">Gulp</a><a
                            class="dropdown-item fw-semi-bold"
                            href="../../documentation/design-file.html">Design file</a><a
                            class="dropdown-item fw-semi-bold" href="../../changelog.html">Changelog</a><a
                            class="dropdown-item fw-semi-bold" href="../../showcase.html">Showcase</a></div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input
                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                    type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="Switch theme"><span class="icon" data-feather="moon"></span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><span class="text-700" data-feather="bell"
                    style="height:20px;width:20px;"></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                    <div class="card-header p-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="text-black mb-0">Notificatons</h5><button
                                class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as
                                read</button>
                        </div>
                    </div>
                    <div class="card-body p-0"></div>
                    <div class="scrollbar-overlay">
                        <div class="overflow-auto" style="height: 27rem;">
                            <div class="border-300">
                                <div
                                    class="p-3 border-300 notification-card position-relative read border-bottom">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="../../assets/img/team/30.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>💬</span>Mentioned you in a
                                                    comment.<span
                                                        class="ms-2 text-500 fw-bold fs--2">10m</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">10:41 AM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3">
                                                <div class="avatar-name rounded-circle"><span>J</span></div>
                                            </div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>📅</span>Created an event.<span
                                                        class="ms-2 text-500 fw-bold fs--2">20m</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">10:20 AM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle avatar-placeholder"
                                                    src="../../assets/img/team/avatar.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👍</span>Liked your comment.<span
                                                        class="ms-2 text-500 fw-bold fs--2">1h</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">9:30 AM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-300">
                                <div
                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="../../assets/img/team/57.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in a
                                                    comment.<span
                                                        class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">9:11 AM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="../../assets/img/team/59.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👤</span>Tagged you in a comment.<span
                                                        class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">10:58 PM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-300 notification-card position-relative read ">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="../../assets/img/team/58.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👍</span>Liked your comment.<span
                                                        class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">10:18 AM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-0 border-top border-0">
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                href="notifications.html">Notification history</a></div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="16"
                    height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                        <div class="row text-center align-items-center gx-0 gy-0">
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/behance.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/google-cloud.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/slack.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/gitlab.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/bitbucket.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/google-drive.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/trello.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/figma.png" alt=""
                                        width="20" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/twitter.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/pinterest.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/ln.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/google-maps.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/google-photos.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/spotify.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                    <img class="rounded-circle " src="../../assets/img/team/57.png" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                    <div class="card-body p-0">
                        <div class="text-center pt-4 pb-3">
                            <div class="avatar avatar-xl ">
                                <img class="rounded-circle " src="../../assets/img/team/57.png" alt="" />
                            </div>
                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                        </div>
                        <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                        <ul class="nav d-flex flex-column mb-2 pb-1">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span
                                        class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a>
                            </li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="lock"></span>Posts &amp;
                                    Activity</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="settings"></span>Settings &amp;
                                    Privacy </a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="help-circle"></span>Help
                                    Center</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                        </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                        <ul class="nav d-flex flex-column my-3">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="user-plus"></span>Add another
                                    account</a></li>
                        </ul>
                        <hr />
                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a>
                        </div>
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1"
                                href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
<nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarTopSlimNew"
    style="display:none;">
    <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarToplCollapse"
            aria-controls="navbarToplCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand navbar-brand" href="../../index.html">phoenix <span
                class="text-1000">slim</span></a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarToplCollapse">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="dashboards">Dashboard</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="dashboards">
                    <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold"
                            href="../../index.html">E commerce</a><a class="dropdown-item fw-semi-bold"
                            href="../../dashboard/project-management.html">Project management</a><a
                            class="dropdown-item fw-semi-bold" href="../../landing.html">Landing</a><a
                            class="dropdown-item fw-semi-bold" href="../../apps/social/feed.html">Social
                            feed</a></div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="appss">Apps</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="appss">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Admin</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/add-product.html">Add
                                            product</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/products.html">Products</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/customers.html">Customers</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/customer-details.html">Customer
                                            details</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/orders.html">Orders</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/order-details.html">Order
                                            details</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/admin/refund.html">Refund</a>
                                        <p class="nav-link mb-0 fw-bold">Landing</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/homepage.html">Homepage</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/product-details.html">Product
                                            details</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/products-filter.html">Products
                                            filter</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/cart.html">Cart</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/checkout.html">Checkout</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/shipping-info.html">Shipping
                                            info</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/profile.html">Profile</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/favourite-stores.html">Favourite
                                            stores</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/wishlist.html">Wishlist</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/order-tracking.html">Order
                                            tracking</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/e-commerce/landing/invoice.html">Invoice</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Projects</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/create-new.html">Create
                                            new</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/project-list-view.html">Project
                                            list view</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/project-card-view.html">Project
                                            card view</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/project-board-view.html">Project
                                            board view</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/todo-list.html">Todo
                                            list</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/project-management/project-details.html">Project
                                            details</a>
                                        <p class="nav-link mb-0 fw-bold">Email</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/email/inbox.html">Inbox</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/email/email-detail.html">Email detail</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/email/compose.html">Compose</a>
                                        <p class="nav-link mb-0 fw-bold">Events</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/events/create-an-event.html">Create an
                                            event</a><a class="nav-link fw-semi-bold"
                                            href="../../apps/events/event-detail.html">Event detail</a>
                                        <p class="nav-link mb-0 fw-bold">Social</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/social/profile.html">Profile</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../apps/social/settings.html">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="pagess">Pages</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="pagess">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="../starter.html">Starter</a><a
                                            class="nav-link fw-semi-bold" href="faq.html">Faq</a>
                                        <p class="nav-link mb-0 fw-bold">Pricing</p><a
                                            class="nav-link fw-semi-bold"
                                            href="pricing/pricing-column.html">Pricing column</a><a
                                            class="nav-link fw-semi-bold"
                                            href="pricing/pricing-grid.html">Pricing grid</a><a
                                            class="nav-link fw-semi-bold"
                                            href="notifications.html">Notifications</a><a
                                            class="nav-link fw-semi-bold" href="members.html">Members</a>
                                        <p class="nav-link mb-0 fw-bold">Split</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/split/sign-in.html">Sign in</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/split/sign-up.html">Sign up</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/split/sign-out.html">Sign out</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/split/forgot-password.html">Forgot
                                            password</a><a class="nav-link fw-semi-bold"
                                            href="../authentication/split/reset-password.html">Reset
                                            password</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column">
                                        <p class="nav-link mb-0 fw-bold">Errors</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../errors/404.html">404</a><a
                                            class="nav-link fw-semi-bold" href="../errors/500.html">500</a>
                                        <p class="nav-link mb-0 fw-bold">Simple</p><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/simple/sign-in.html">Sign in</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/simple/sign-up.html">Sign up</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/simple/sign-out.html">Sign out</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../authentication/simple/forgot-password.html">Forgot
                                            password</a><a class="nav-link fw-semi-bold"
                                            href="../authentication/simple/reset-password.html">Reset
                                            password</a><a class="nav-link fw-semi-bold"
                                            href="../authentication/simple/lock-screen.html">Lock screen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="moduless">Modules</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="moduless">
                    <div class="dropdown-menu-content navbar-top-card p-3">
                        <div class="scrollbar max-h-dropdown">
                            <div class="row gx-0">
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/form-control.html">Form
                                            control</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/input-group.html">Input
                                            group</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/select.html">Select</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/checks.html">Checks</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/range.html">Range</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/floating-labels.html">Floating
                                            labels</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/basic/layout.html">Layout</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/forms/advance/advance-select.html">Advance
                                            select</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/advance/date-picker.html">Date
                                            picker</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/advance/editor.html">Editor</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="nav flex-column"><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/advance/file-uploader.html">File
                                            uploader</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/forms/advance/rating.html">Rating</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/forms/wizard.html">Wizard</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/icons/feather.html">Feather</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/icons/font-awesome.html">Font awesome</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/icons/unicons.html">Unicons</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/tables/basic-tables.html">Basic tables</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/tables/advance-tables.html">Advance
                                            tables</a><a class="nav-link fw-semi-bold"
                                            href="../../modules/components/accordion.html">Accordion</a><a
                                            class="nav-link fw-semi-bold"
                                            href="../../modules/components/avatar.html">Avatar</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="documentations">Documentation</a>
                <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="documentations">
                    <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold"
                            href="../../documentation/getting-started.html">Getting started</a><a
                            class="dropdown-item fw-semi-bold"
                            href="../../documentation/customization/styling.html">Styling</a><a
                            class="dropdown-item fw-semi-bold"
                            href="../../documentation/customization/plugin.html">Plugin</a><a
                            class="dropdown-item fw-semi-bold"
                            href="../../documentation/layouts/vertical-navbar.html">Vertical navbar</a><a
                            class="dropdown-item fw-semi-bold"
                            href="../../documentation/layouts/horizontal-navbar.html">Horizontal
                            navbar</a><a class="dropdown-item fw-semi-bold"
                            href="../../documentation/gulp.html">Gulp</a><a
                            class="dropdown-item fw-semi-bold"
                            href="../../documentation/design-file.html">Design file</a><a
                            class="dropdown-item fw-semi-bold" href="../../changelog.html">Changelog</a><a
                            class="dropdown-item fw-semi-bold" href="../../showcase.html">Showcase</a></div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                    type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="Switch theme"><span class="icon me-1 d-none d-sm-block"
                        data-feather="moon"></span><span class="fs--1 fw-bold">Dark</span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="Switch theme"><span class="icon me-1 d-none d-sm-block"
                        data-feather="sun"></span><span class="fs--1 fw-bold">Light</span></label></div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNotification" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                    data-feather="bell" style="height:12px;width:12px;"></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                    <div class="card-header p-2">
                        <div class="d-flex justify-content-between">
                            <h5 class="text-black mb-0">Notificatons</h5><button
                                class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as
                                read</button>
                        </div>
                    </div>
                    <div class="card-body p-0"></div>
                    <div class="scrollbar-overlay">
                        <div class="overflow-auto" style="height: 27rem;">
                            <div class="border-300">
                                <div
                                    class="p-3 border-300 notification-card position-relative read border-bottom">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="../../assets/img/team/30.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>💬</span>Mentioned you in a
                                                    comment.<span
                                                        class="ms-2 text-500 fw-bold fs--2">10m</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">10:41 AM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3">
                                                <div class="avatar-name rounded-circle"><span>J</span></div>
                                            </div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>📅</span>Created an event.<span
                                                        class="ms-2 text-500 fw-bold fs--2">20m</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">10:20 AM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle avatar-placeholder"
                                                    src="../../assets/img/team/avatar.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👍</span>Liked your comment.<span
                                                        class="ms-2 text-500 fw-bold fs--2">1h</span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">9:30 AM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-300">
                                <div
                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="../../assets/img/team/57.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1 fs--2'>💬</span>Mentioned you in a
                                                    comment.<span
                                                        class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">9:11 AM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="p-3 border-300 notification-card position-relative unread border-bottom">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="../../assets/img/team/59.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👤</span>Tagged you in a comment.<span
                                                        class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">10:58 PM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 border-300 notification-card position-relative read ">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-relative">
                                        <div class="d-flex">
                                            <div class="avatar avatar-m status-online me-3"><img
                                                    class="rounded-circle"
                                                    src="../../assets/img/team/58.png" alt="" /></div>
                                            <div class="me-3 flex-1">
                                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                <p class="fs--1 text-1000 mb-2 mb-sm-3"><span
                                                        class='me-1'>👍</span>Liked your comment.<span
                                                        class="ms-2 text-500 fw-bold fs--2"></span></p>
                                                <p class="text-800 fs--1 mb-0"><span
                                                        class="me-1 fas fa-clock"></span><span
                                                        class="fw-bold">10:18 AM </span>August 7,2021</p>
                                            </div>
                                        </div>
                                        <div class="font-sans-serif d-none d-sm-block"><button
                                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"
                                                aria-labelledby="documentations"><a class="dropdown-item"
                                                    href="#!">Mark as unread</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-0 border-top border-0">
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                href="notifications.html">Notification history</a></div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="10"
                    height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                        <div class="row text-center align-items-center gx-0 gy-0">
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/behance.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/google-cloud.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/slack.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/gitlab.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/bitbucket.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/google-drive.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/trello.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/figma.png" alt=""
                                        width="20" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/twitter.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/pinterest.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/ln.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/google-maps.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/google-photos.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                </a></div>
                            <div class="col-4"><a
                                    class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                    href="#!"><img src="../../assets/img/nav-icons/spotify.png" alt=""
                                        width="30" />
                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Olivia
                <span class="fa-solid fa-chevron-down fs--2"></span></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                    <div class="card-body p-0">
                        <div class="text-center pt-4 pb-3">
                            <div class="avatar avatar-xl ">
                                <img class="rounded-circle " src="../../assets/img/team/57.png" alt="" />
                            </div>
                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                        </div>
                        <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                        <ul class="nav d-flex flex-column mb-2 pb-1">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span
                                        class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a>
                            </li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="lock"></span>Posts &amp;
                                    Activity</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="settings"></span>Settings &amp;
                                    Privacy </a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="help-circle"></span>Help
                                    Center</a></li>
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                        </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                        <ul class="nav d-flex flex-column my-3">
                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                        class="me-2 text-900" data-feather="user-plus"></span>Add another
                                    account</a></li>
                        </ul>
                        <hr />
                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a>
                        </div>
                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1"
                                href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>