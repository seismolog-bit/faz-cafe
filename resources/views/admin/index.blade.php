@extends('layouts.admin')

@section('content')
<div class="d-flex flex-center content-min-h">
    <div class="text-center py-9">
        <img class="img-fluid mb-7 d-dark-none" src="{{ asset('assets/img/spot-illustrations/2.png') }}" width="470" alt="" />
        <img class="img-fluid mb-7 d-light-none" src="{{ asset('assets/img/spot-illustrations/dark_2.png') }}" width="470" alt="" />
        <h1 class="text-800 fw-normal">Create Something Beautiful.</h1>
        <p class="mb-5">Wait a few moments for the admin to verify your account.</p>
        <a class="btn btn-lg btn-primary" href="documentation/getting-started.html">Getting Started</a>
    </div>
</div>
@endsection

