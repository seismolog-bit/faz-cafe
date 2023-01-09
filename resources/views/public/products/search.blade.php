@extends('layouts.front')

@section('content')

@include('components.app-search-form')

<div class="py-3">
    <div class="container">
        <div class="row g-2 rtl-flex-d-row-r">
            @forelse ($products as $product)
            @include('components.app-product-card', ['product' => $product])
            
            @empty
                <p>Produk tidak ditemukan</p>
            @endforelse
        </div>
        {{-- {{ $products->links() }} --}}
    </div>
</div>

@endsection