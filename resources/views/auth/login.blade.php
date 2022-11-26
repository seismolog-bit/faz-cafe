@extends('layouts.admin')

@section('content')
<div class="container-fluid px-0" data-layout="container">
    <div class="row vh-100 flex-cente g-0">
        <div class="col-lg-6 position-relative d-none d-lg-block">
            <div class="bg-holder" style="background-image:url({{ asset('assets/img/bg/30.png') }});"></div>
            <!--/.bg-holder-->
        </div>
        <div class="col-lg-6">
            <div class="row flex-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <a class="d-flex flex-center text-decoration-none mb-4" href="{{ route('index') }}">
                            <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block">
                                <img src="{{ asset('assets/img/icons/logo.png') }}" alt="phoenix" width="120" />
                            </div>
                        </a>
                        <div class="text-center mb-7">
                            <h3 class="text-1000">Sign In</h3>
                            <p class="text-700">Get access to your account</p>
                        </div>
                        {{-- <button class="btn btn-phoenix-secondary w-100 mb-3"><span
                                class="fab fa-google text-danger me-2 fs--1"></span>Sign in with
                            google</button>
                        <button class="btn btn-phoenix-secondary w-100"><span
                                class="fab fa-facebook text-primary me-2 fs--1"></span>Sign in with
                            facebook</button> --}}
                        {{-- <div class="position-relative">
                            <hr class="bg-200 mt-5 mb-4" />
                            <div class="divider-content-center">or use email</div>
                        </div> --}}
                        <div class="mb-3 text-start">
                            <label class="form-label" for="email">{{ __('Email Address') }}</label>
                            <div class="form-icon-container">
                                <input class="form-control form-icon-input @error('email') is-invalid @enderror" id="email"
                                    type="email" placeholder="name@example.com" value="{{ old('email') }}" name="email"
                                    required autocomplete="email" autofocus />
                                <span class="fas fa-user text-900 fs--1 form-icon"></span>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label" for="password">{{ __('Password') }}</label>
                            <div class="form-icon-container">
                                <input class="form-control form-icon-input @error('password') is-invalid @enderror"
                                    type="password" placeholder="Password" name="password" required
                                    autocomplete="current-password" />
                                <span class="fas fa-key text-900 fs--1 form-icon"></span>
                            </div>
                        </div>
                        <div class="row flex-between-center mb-7">
                            <div class="col-auto">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" id="basic-checkbox" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }} />
                                    <label class="form-check-label mb-0" for="basic-checkbox">{{ __('Remember Me')
                                        }}</label>
                                </div>
                            </div>
                            {{-- <div class="col-auto">
                                <a class="fs--1 fw-semi-bold" href="../simple/forgot-password.html">Forgot Password?</a>
                            </div> --}}
                        </div>
                        <button class="btn btn-primary w-100 mb-3">{{ __('Login') }}</button>
                        <div class="text-center">
                            <a class="fs--1 fw-bold" href="{{ route('register') }}">Create an account</a>
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
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}