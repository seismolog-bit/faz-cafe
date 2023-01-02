@extends('layouts.admin')

@section('content')

<div class="row gy-3 mb-6 justify-content-between">
    <div class="col-md-9 col-auto">
        <h2 class="mb-2 text-1100">Daftar menu</h2>
        <h5 class="text-700 fw-semi-bold">Daftar semua menu billiard & cafe</h5>
    </div>
    <div class="col-auto">
        <div class="flatpickr-input-container">
            <a class="btn btn-primary" href="{{ route('admin.products.create') }}">
                <span class="fas fa-plus me-2"></span>Tambah product
            </a>
        </div>
    </div>
</div>

<div class="mb-3 gy-6">
    <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
        <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('admin.products.index') }}" class="d-flex align-items-center text-decoration-none"><span
                    class="fs-4 lh-1 uil shopping-bag text-primary-500"></span>
                <div class="ms-2">
                    <h2 class="mb-0">{{ $product_count->count() }}<span
                            class="fs-1 fw-semi-bold text-900 ms-2">Menu</span></h2>
                    <p class="text-800 fs--1 mb-0">yang terdaftar</p>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('admin.products.index', 'category=1') }}"
                class="d-flex align-items-center text-decoration-none">
                <span class="fs-4 lh-1 uil uil-rocket text-success-500"></span>
                <div class="ms-2">
                    <h2 class="mb-0">{{ $product_count->where('category_id', 1)->count() }}<span
                            class="fs-1 fw-semi-bold text-900 ms-2">Billiard</span></h2>
                    <p class="text-800 fs--1 mb-0">dan karaoke</p>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('admin.products.index', 'category=2') }}"
                class="d-flex align-items-center text-decoration-none">
                <span class="fs-4 lh-1 uil uil-crockery text-warning-500"></span>
                <div class="ms-2">
                    <h2 class="mb-0">{{ $product_count->where('category_id', 2)->count() }}<span
                            class="fs-1 fw-semi-bold text-900 ms-2">Makanan</span></h2>
                    <p class="text-800 fs--1 mb-0">Soon to be cleared</p>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ route('admin.products.index', 'category=3') }}"
                class="d-flex align-items-center text-decoration-none">
                <span class="fs-4 lh-1 uil uil-glass-tea text-danger-500"></span>
                <div class="ms-2">
                    <h2 class="mb-0">{{ $product_count->where('category_id', 3)->count() }}<span
                            class="fs-1 fw-semi-bold text-900 ms-2">Minuman</span></h2>
                    <p class="text-800 fs--1 mb-0">Fresh start</p>
                </div>
            </a>
        </div>
    </div>
</div>

{{-- <nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item active">Product</li>
    </ol>
</nav> --}}
{{-- <h2 class="text-bold text-1100 mb-5">Daftar Product</h2> --}}
<div id="members" data-list='{"valueNames":["name","category","stock","price","item"],"page":10,"pagination":true}'>
    <div class="row align-items-center justify-content-between g-3 mb-3">
        <div class="col col-auto">
            <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                        class="form-control search-input search" type="search" placeholder="Cari" aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                </form>
            </div>
        </div>
        <div class="col-auto">
            {{-- <div class="d-flex align-items-center">
                <a class="btn btn-primary" href="{{ route('admin.products.create') }}">
                    <span class="fas fa-plus me-2"></span>Tambah product
                </a>
            </div> --}}
        </div>
    </div>
    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
        <div class="table-responsive scrollbar ms-n1 ps-1">
            <table class="table table-sm fs--1 mb-0">
                <thead>
                    <tr>
                        <th class="sort align-middle" scope="col" data-sort="name">PRODUCT</th>
                        <th class="sort align-middle" scope="col" data-sort="category"> KATEGORI</th>
                        {{-- <th class="sort align-middle" scope="col" data-sort="detail"> DETAIL</th> --}}
                        <th class="sort align-middle" scope="col" data-sort="stock"> DURASI/STOCK</th>
                        <th class="sort align-middle" scope="col" data-sort="price"> HARGA</th>
                        <th class="sort align-middle" scope="col" data-sort="item"> RELASI ITEM</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                    @foreach ($products as $product)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="name align-middle white-space-nowrap">
                            <a class="d-flex align-items-center text-900 text-hover-1000"
                                href="{{ route('admin.products.show', $product) }}">
                                <div class="avatar avatar-xl">
                                    <div class="border rounded-2 overflow-hidden"><img
                                            src="{{ asset($product->image) }}"
                                            style="width: -webkit-fill-available; height: 46px;"></div>
                                    {{-- <div class="avatar-name rounded">
                                        <img src="" alt=""> --}}
                                        {{-- <span
                                            class="{{ $product->category_id == 1 ? 'text-primary' : 'text-secondary' }}">{{
                                            substr($product->name, 0, 1) }}</span> --}}
                                        {{--
                                    </div> --}}
                                </div>
                                <h6 class="mb-0 ms-3 fw-semi-bold">
                                    {{ $product->name }}
                                    <br>
                                    <small class="text-secondary">Status produk: {{ $product->archive ? 'Diarsipkan' :
                                        'Aktif' }}</small>
                                </h6>

                            </a>
                        </td>
                        <td class="category align-middle white-space-nowrap">
                            {{ $product->category->name }}
                        </td>
                        {{-- <td class="detail align-middle white-space-nowrap">
                            {!! $product->detail !!}
                        </td> --}}
                        <td class="stock align-middle white-space-nowrap">
                            {{ ($product->category_id == 1 || $product->category_id == 4) ? $product->duration . ' menit' : $product->stock . ' pcs' }}
                        </td>
                        <td class="stock align-middle white-space-nowrap">
                            {{ number_format($product->price, 0) }}
                        </td>
                        <td class="stock align-middle white-space-nowrap">
                            {{ $product->item_id ? $product->item->name . ' (' . $product->item->stock . ' ' .
                            $product->item->unit . ')' : '-' }}
                        </td>
                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4">

                            <div class="position-relative">
                                <div class="hover-actions">
                                    <a class="btn btn-sm btn-phoenix-secondary me-1 fs--2"
                                        href="{{ route('admin.products.show', $product) }}">
                                        <span class="fas fa-eye"></span>
                                    </a>
                                    <a class="btn btn-sm btn-phoenix-secondary fs--2"
                                        href="{{ route('admin.products.edit', $product) }}">
                                        <span class="fas fa-edit"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                <button
                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                    type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                    aria-expanded="false" data-bs-reference="parent">
                                    <span class="fas fa-ellipsis-h fs--2"></span>
                                </button>
                                @if ($product->archive)
                                <div class="dropdown-menu dropdown-menu-end py-2">
                                    {!! Form::open(['method' => 'DELETE','route' => ['admin.products.destroy',
                                    $product],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Terbitkan', ['class' => 'dropdown-item text-danger']) !!}
                                    {!! Form::close() !!}
                                </div>
                                @else
                                <div class="dropdown-menu dropdown-menu-end py-2">
                                    {!! Form::open(['method' => 'DELETE','route' => ['admin.products.destroy',
                                    $product],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Arsipkan', ['class' => 'dropdown-item text-primary']) !!}
                                    {!! Form::close() !!}
                                </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
            <div class="col-auto d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a
                    class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!"
                    data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a>
            </div>
            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                        class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span
                        class="fas fa-chevron-right"></span></button>
            </div>
        </div>
    </div>
</div>
@endsection