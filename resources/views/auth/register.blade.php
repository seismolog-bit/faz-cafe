@extends('layouts.admin')

@section('content')
<div class="container-fluid px-0" data-layout="container">
    <div class="row vh-100 flex-cente g-0">
        <div class="col-lg-6 position-relative d-none d-lg-block">
            <div class="bg-holder" style="background-image:url(../../../assets/img/bg/32.png);"></div>
            <!--/.bg-holder-->
        </div>
        <div class="col-lg-6">
            <div class="row flex-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    <a class="d-flex flex-center text-decoration-none mb-4" href="{{ route('index') }}">
                        <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block">
                            <img src="{{ asset('assets/img/icons/logo.png') }}" alt="phoenix" width="120">
                        </div>
                    </a>
                    <div class="text-center mb-7">
                        <h3 class="text-1000">Sign Up</h3>
                        <p class="text-700">Create your account today</p>
                    </div>

                    <form method="post" {{ route('register') }}>
                        @csrf

                        <div class="mb-3 text-start">
                            <label class="form-label" for="name">Nama Lengkap</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Nama Lengkap" required autocomplete="name" autofocus>
                            
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control  @error('email') is-invalid @enderror @error('email') is-invalid @enderror" name="email" id="email" type="email" placeholder="name@example.com" autocomplete="email" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label" for="no_hp">No WhatsApp</label>
                            <input class="form-control  @error('no_hp') is-invalid @enderror @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" type="number" placeholder="08XX XXXX XXXX" autocomplete="no_hp" required>

                            @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control form-icon-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="confirm_password">Ulangi Password</label>
                                <input class="form-control  form-icon-input" name="password_confirmation" autocomplete="new-password" type="password" placeholder="Ulangi Password" >
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="termsService" type="checkbox">
                            <label class="form-label fs--1 text-none" for="termsService">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a>
                            </label>
                        </div>
                        <button class="btn btn-primary w-100 mb-3">Sign up</button>
                        <div class="text-center">
                            <a class="fs--1 fw-bold" href="{{ route('login') }}">Sign in to an existing account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}