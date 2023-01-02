@extends('layouts.front')

@section('content')

@auth
<div class="container">
    <!-- Profile Wrapper-->
    <div class="profile-wrapper-area py-3">
        <!-- User Information-->
        <div class="card user-info-card">
            <div class="card-body p-4 d-flex align-items-center">
                <div class="user-profile me-3"><img src="{{ asset(Auth::user()->avatar) }}" alt=""></div>
                <div class="user-info">
                    <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                    <p class="mb-0 text-dark">{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
        <!-- User Meta Data-->
        <div class="card user-data-card">
            <div class="card-body">
                <div class="single-profile-data d-flex align-items-center justify-content-between">
                    <div class="title d-flex align-items-center"><i class="fa-solid fa-user"></i><span>Nama</span>
                    </div>
                    <div class="data-content">{{ Auth::user()->name }}</div>
                </div>
                <div class="single-profile-data d-flex align-items-center justify-content-between">
                    <div class="title d-flex align-items-center"><i class="fa-solid fa-phone"></i><span>No HP</span>
                    </div>
                    <div class="data-content">{{ Auth::user()->no_hp }}</div>
                </div>
                <div class="single-profile-data d-flex align-items-center justify-content-between">
                    <div class="title d-flex align-items-center"><i class="fa-solid fa-envelope"></i><span>Email</span>
                    </div>
                    <div class="data-content">{{ Auth::user()->email }} </div>
                </div>
                {{-- <div class="single-profile-data d-flex align-items-center justify-content-between">
                    <div class="title d-flex align-items-center">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Shipping Address</span>
                    </div>
                    <div class="data-content">28/C Green Road, BD</div>
                </div> --}}
                {{-- <div class="single-profile-data d-flex align-items-center justify-content-between">
                    <div class="title d-flex align-items-center"><i class="fa-solid fa-star"></i><span>My Orders</span>
                    </div>
                    <div class="data-content"><a class="btn btn-success btn-sm" href="my-order.html">View Status</a>
                    </div>
                </div> --}}
                <!-- Edit Profile-->
                @hasrole(['admin', 'waiters', 'kitchen', 'cashier'])
                <div class="edit-profile-btn mt-3 mb-3">
                    <a class="btn btn-primary w-100" href="{{ route('admin.index') }}">
                        <i class="fa-solid fa-unlock me-2"></i>Halaman Admin</a>
                </div>
                @endhasrole


                @auth
                <a class="btn btn-secondary w-100" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="me-2" data-feather="log-out"> </span>Sign out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endauth
            </div>
        </div>
    </div>
</div>

@endauth

@endsection