@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Home</a></li>
        <li class="breadcrumb-item active">Transaksi</li>
    </ol>
</nav>
<div class="row align-items-center justify-content-between g-3 mb-4">
    <div class="col-auto">
        <h2 class="mb-0">{{ $status ? 'Transaksi Aktif' : 'Laporan Transaksi' }}</h2>
    </div>
    <div class="col-auto">
        <div class="row g-2 g-sm-3">
            <div class="col-auto">
                <a class="btn btn-phoenix-primary" href="{{ route('admin.orders.create.create_activate') }}">
                    <i class="fa-regular fa-circle-dot"></i> Transaksi Billiard
                </a>
                <a class="btn btn-phoenix-primary" href="">
                    <i class="fa-solid fa-mug-hot"></i> Transaksi Cafe
                </a>
            </div>
        </div>
    </div>
</div>

@if ($status)

<div class="row g-3">
    {{-- <h3 class="fw-semi-bold mb-3">Transaksi Aktif</h3> --}}
    @foreach ($orders as $order)
    <div class="col-6 col-md-4">
        <div
            class="card h-100 overflow-hidden {{ $order->table->is_billiard ? 'bg-primary-soft border-primary primary-boxshadow light' : '' }} ">
            <div class="bg-holder"
                style="background-image:url(../../../assets/img/bg/8.png);background-position:left bottom;background-size:auto;">
            </div>
            <!--/.bg-holder-->
            <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                <div class="d-flex justify-content-between">
                    <div class="mb-5 mb-md-0 mb-lg-5">
                        <div class="d-sm-flex align-items-center mb-3">
                            <h3 class="mb-0">{{ $order->table->name }} | Lantai {{ $order->table->floor }}</h3>
                        </div>
                        <p class="fs--1 text-700">Pembeli: {{ $order->buyer }}</p>

                    </div>
                    @if (strtotime(Carbon\Carbon::now()) > strtotime($order->end_time))
                    <i class="fa-regular fa-circle-xmark text-danger" style="width: 54px; height: 54px;"></i>
                    @else
                    <i class="fa-solid fa-rocket text-primary" style="width: 54px; height: 54px;"></i>
                    @endif
                </div>
                <div class="d-flex mb-6">
                    <div class="me-3">
                        <p class="mb-2 text-800">Start</p>
                        <h5 class="text-800">{{ Carbon\Carbon::parse($order->start_time)->format('g:i:s'
                            ) }}</h5>
                    </div>
                    <div class="my-3 mx-3 border-start"></div>
                    <div class="mx-3">
                        <p class="mb-2 text-800">End</p>
                        <h5 class="text-800">{{ Carbon\Carbon::parse($order->end_time)->format('g:i:s') }}</h5>
                    </div>
                    <div class="my-3 mx-3 border-start"></div>
                    <div class="ms-3">
                        <p class="mb-2 text-800">Time</p>
                        <span class='countdown' value='2023/05/07 01:15:15'></span>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Produk</th>
                            <th scope="col">Qty</th>
                            <th scope="col" class="text-end">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->order_items as $item)
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->qty }}</td>
                            <td class="text-end">{{ number_format($item->grand_total) }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>Total</td>
                            <td colspan="2" class="text-end">{{ number_format($order->grand_total) }}</td>
                        </tr>
                    </tbody>
                </table>

                {{-- <a class="stretched-link" href="#!"></a> --}}

                <div class="row g-2">
                    <div class="col-12 col-md-auto flex-md-grow-1">
                        <button class="btn btn-primary w-100" type="button">Selesaikan Transaksi</button>
                    </div>
                    <div class="col-6 col-sm-auto">
                        <button class="btn btn-phoenix-primary w-100" type="button">
                            <i class="fas fa-plus"></i> Pesanan</button>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @endforeach
    {{-- <div class="col-6 col-md-4 col-lg-3 col-xl-3">
        <div class="card h-100 overflow-hidden bg-warning-soft border-warning warning-boxshadow light">
            <div class="bg-holder"
                style="background-image:url(../../../assets/img/bg/bg-11.html);background-position:left bottom;background-size:auto;">
            </div>
            <!--/.bg-holder-->
            <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                <div class="d-flex justify-content-between">
                    <div class="mb-5 mb-md-0 mb-lg-5">
                        <div class="d-sm-flex align-items-center mb-3">
                            <h3 class="mb-0">Business Plus</h3><span
                                class="badge ms-sm-3 text-uppercase fs--2 bg-warning">recommended</span>
                        </div>
                        <p class="fs--1 text-700">For teams that need to manage <br> work across initiatives.</p>
                        <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                            <h4 class="fw-bolder me-1">$599.88</h4>
                            <h5 class="fs--1 fw-normal text-700 ms-1">Per year</h5>
                        </div>
                    </div><img src="../../../assets/img/spot-illustrations/star.png" width="54" height="54" alt="">
                </div>
                <div class="row flex-1 justify-content-end">
                    <div class="col-sm-8 col-md-12">
                        <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                            <ul
                                class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                <li class="d-flex align-items-center"><span
                                        class="uil uil-check-circle text-success me-2"></span><span
                                        class="text-700 fw-semi-bold">Technical Supports</span></li>
                                <li class="d-flex align-items-center"><span
                                        class="uil uil-check-circle text-success me-2"></span><span
                                        class="text-700 fw-semi-bold">Up to 20 Members</span></li>
                                <li class="d-flex align-items-center"><span
                                        class="uil uil-check-circle text-success me-2"></span><span
                                        class="text-700 fw-semi-bold">Create &amp; Share libraries</span></li>
                                <li class="d-flex align-items-center"><span
                                        class="uil uil-check-circle text-success me-2"></span><span
                                        class="text-700 fw-semi-bold"><span class="fw-bold">Unlimited</span>
                                        Collaboration</span></li>
                            </ul>
                        </div>
                    </div>
                </div><a class="stretched-link" href="#!"></a>
            </div>
        </div>
    </div> --}}
</div>

@else

<div id="members"
    data-list='{"valueNames":["customer","email","mobile_number","role","status","joined"],"page":10,"pagination":true}'>
    <div class="row align-items-center justify-content-between g-3 mb-3">
        <div class="col col-auto">
            <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                        class="form-control search-input search" type="search" placeholder="Search members"
                        aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                </form>
            </div>
        </div>
        <div class="col-auto">
            <div class="d-flex align-items-center">
                <a class="btn btn-primary" href="{{ route('admin.users.create') }}">
                    <span class="fas fa-plus me-2"></span>Tambah user
                </a>
            </div>
        </div>
    </div>
    <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
        <div class="table-responsive scrollbar ms-n1 ps-1">
            <table class="table table-sm fs--1 mb-0">
                <thead>
                    <tr>
                        <th class="sort align-middle" scope="col" data-sort="customer"
                            style="width:15%; min-width:200px;">NAMA</th>
                        <th class="sort align-middle" scope="col" data-sort="email" style="width:15%; min-width:200px;">
                            EMAIL</th>
                        <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number"
                            style="width:20%; min-width:200px;">NO HP</th>
                        <th class="sort align-middle" scope="col" data-sort="role" style="width:10%;"> ROLE</th>
                        <th class="sort align-middle" scope="col" data-sort="status" style="width:10%;"> STATUS</th>
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="joined"
                            style="width:19%;  min-width:200px;">JOINED</th>
                    </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                    @foreach ($orders as $order)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="customer align-middle white-space-nowrap">
                            <a class="d-flex align-items-center text-900 text-hover-1000"
                                href="{{ route('admin.users.show', $order) }}">
                                <div class="avatar avatar-m">
                                    <img class="rounded-circle" src="{{ asset($order->avatar) }}" alt="" />
                                </div>
                                <h6 class="mb-0 ms-3 fw-semi-bold">{{ $order->name }}</h6>
                            </a>
                        </td>
                        <td class="email align-middle white-space-nowrap">
                            <a class="fw-semi-bold" href="mailto:{{ $order->email }}">{{ $order->email }}</a>
                        </td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-1100"
                                href="tel:{{ $order->no_hp }}">{{ $order->no_hp }}</a></td>
                        <td class="city align-middle white-space-nowrap text-900">
                            @foreach ($order->roles as $role)
                            {{ ucfirst($role->name) }}
                            @endforeach
                        </td>
                        <td class="city align-middle white-space-nowrap text-900">{{ $order->status ? 'Aktif' :
                            'Nonaktif' }}</td>
                        <td class="joined align-middle white-space-nowrap text-700 text-end">{{
                            $order->created_at->format('d m Y') }}</td>
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

@endif

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/gh/hilios/jQuery.countdown@2.1.0/dist/jquery.countdown.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<script>
    $(function(){
        $('.countdown').each(function(){
            $(this).countdown($(this).attr('value'), function(event) {
            $(this).text(
            event.strftime('%D days %H:%M:%S')
        );
            });
        });
    });
</script>
@endsection