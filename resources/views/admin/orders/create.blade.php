@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">Transaksi</a></li>
        <li class="breadcrumb-item active">Buat transaksi</li>
    </ol>
</nav>
<h2 class="text-bold text-1100 mb-5">Buat Transaksi </h2>



@endsection