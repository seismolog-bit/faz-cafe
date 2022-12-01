@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Kartu billiard</li>
    </ol>
</nav>
<div class="row align-items-center justify-content-between g-3 mb-4">
    <div class="col-auto">
        <h2 class="mb-0">Kartu billiard</h2>
    </div>
    <div class="col-auto">
        <div class="row g-2 g-sm-3">
            <div class="col-auto">
                <a class="btn btn-phoenix-primary" href="{{ route('admin.cards.create') }}">
                    <i class="fa-regular fa-id-card"></i> Registrasi kartu
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row g-3">
    @foreach ($cards as $card)
    <div class="col-6 col-md-3 col-lg-6 col-xl-4">
        <div class="card h-100 overflow-hidden">
          <div class="bg-holder" style="background-image:url(../../../assets/img/bg/8.png);background-position:left bottom;background-size:auto;"></div>
          <!--/.bg-holder-->
          <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
            <div class="d-flex justify-content-between">
              <div class="mb-5 mb-md-0 mb-lg-5">
                <div class="d-sm-flex align-items-center mb-3">
                  <h3 class="mb-0">{{ $card->code }}</h3>
                </div>
                <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                  <h5 class="fs--1 fw-normal text-700 ms-1"><span class="{{ $card->status ? 'text-primary' : 'text-secondary' }}">• {{ $card->status ? 'Aktif' : 'Tidak aktif' }}</span> | Registered: {{ $card->created_at->format('d m Y') }}</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
</div>

@endsection