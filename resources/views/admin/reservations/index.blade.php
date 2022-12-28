@extends('layouts.admin')

@section('content')

<div class="row gy-3 mb-6 justify-content-between">
    <div class="col-md-6 col-auto">
        <h2 class="mb-2 text-1100">Booking Meja</h2>
        <h5 class="text-700 fw-semi-bold">Daftar booking tanggal {{ $date }}</h5>
    </div>
    <div class="col-auto">
        <div class="row">
            <div class="col-md-6 col-auto">

                <form action="{{ route('admin.reservations.index') }}" class="row gy-2 gx-3 align-items-center">
                    <div class="col-md-6 p-0 col-auto">
                        <input class="form-control datetimepicker" id="datepicker" type="text" name="date" placeholder="dd-mm-yyyy"
                            data-options='{"disableMobile":true,"dateFormat":"d-m-Y"}' value="{{ $date }}" />
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-auto">
                <div class="flatpickr-input-container">
                    <a class="btn btn-primary" href="{{ route('admin.reservations.create') }}">
                        <span class="fas fa-plus me-2"></span>Tambah booking
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-12 col-sm-6">
        <div class="card h-100 overflow-hidden">
            <div class="bg-holder"
                style="background-image:url({{ asset('assets/img/bg/8.png') }});background-position:left bottom;background-size:auto;">
            </div>
            <!--/.bg-holder-->
            <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                <div class="d-flex justify-content-between">
                    <div class="mb-5 mb-md-0 mb-lg-5">
                        <div class="d-sm-flex align-items-center mb-3">
                            <h3 class="mb-0">Table 1</h3>
                        </div>
                        <p class="fs--1 text-700">Daftar booking billiard table 1</p>

                    </div>
                    <img src="{{ asset('assets/img/spot-illustrations/rocket.png') }}" width="54" height="54" alt="">
                </div>
                <div id="tableExample1"
                    data-list='{"valueNames":["date","buyer","time", "dp"],"page":10,"pagination":true}'>
                    <div class="table-responsive">
                        <table class="table table-sm fs--1 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top ps-3" data-sort="date">TGL</th>
                                    <th class="sort border-top" data-sort="buyer">WAKTU</th>
                                    <th class="sort border-top" data-sort="time">PEMESAN</th>
                                    <th class="sort border-top" data-sort="dp">DP</th>
                                    <th class="sort text-end align-middle pe-0 border-top" scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @forelse ($reservations->where('table_id', 1)->sortBy('start_time') as $reservation)
                                <tr>
                                    <td class="align-middle ps-3 date">{{ $reservation->reservation_date }}</td>
                                    <td class="align-middle buyer">{{ $reservation->start_time . ' - ' .
                                        $reservation->end_time }}</td>
                                    <td class="align-middle time">{{ $reservation->buyer }}</td>
                                    <td class="align-middle dp">{{ number_format($reservation->down_payment) }}</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="{{ route('admin.reservations.edit', $reservation->id) }}">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                {!! Form::open(['method' => 'DELETE','route' => ['admin.reservations.destroy', $reservation->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Hapus', ['class' => 'dropdown-item text-danger']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="align-middle ps-3 name" colspan="5">Tidak ada data booking</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button class="page-link" data-list-pagination="prev">
                            <span class="fas fa-chevron-left"></span>
                        </button>
                        <ul class="mb-0 pagination"></ul>
                        <button class="page-link pe-0" data-list-pagination="next">
                            <span class="fas fa-chevron-right"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="card h-100 overflow-hidden">
            <div class="bg-holder"
                style="background-image:url({{ asset('assets/img/bg/8.png') }});background-position:left bottom;background-size:auto;">
            </div>
            <!--/.bg-holder-->
            <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                <div class="d-flex justify-content-between">
                    <div class="mb-5 mb-md-0 mb-lg-5">
                        <div class="d-sm-flex align-items-center mb-3">
                            <h3 class="mb-0">Table 2</h3>
                        </div>
                        <p class="fs--1 text-700">Daftar booking billiard table 2</p>

                    </div>
                    <img src="{{ asset('assets/img/spot-illustrations/rocket.png') }}" width="54" height="54" alt="">
                </div>
                <div id="tableExample2"
                    data-list='{"valueNames":["date","buyer","time", "dp"],"page":10,"pagination":true}'>
                    <div class="table-responsive">
                        <table class="table table-sm fs--1 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top ps-3" data-sort="date">TGL</th>
                                    <th class="sort border-top" data-sort="buyer">WAKTU</th>
                                    <th class="sort border-top" data-sort="time">PEMESAN</th>
                                    <th class="sort border-top" data-sort="dp">DP</th>
                                    <th class="sort text-end align-middle pe-0 border-top" scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @forelse ($reservations->where('table_id', 2)->sortBy('start_time') as $reservation)
                                <tr>
                                    <td class="align-middle ps-3 date">{{ $reservation->reservation_date }}</td>
                                    <td class="align-middle buyer">{{ $reservation->start_time . ' - ' .
                                        $reservation->end_time }}</td>
                                    <td class="align-middle time">{{ $reservation->buyer }}</td>
                                    <td class="align-middle dp">{{ number_format($reservation->down_payment) }}</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                
                                                <a class="dropdown-item" href="{{ route('admin.reservations.edit', $reservation->id) }}">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                {!! Form::open(['method' => 'DELETE','route' => ['admin.reservations.destroy', $reservation->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Hapus', ['class' => 'dropdown-item text-danger']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="align-middle ps-3 name" colspan="5">Tidak ada data booking</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button class="page-link" data-list-pagination="prev">
                            <span class="fas fa-chevron-left"></span>
                        </button>
                        <ul class="mb-0 pagination"></ul>
                        <button class="page-link pe-0" data-list-pagination="next">
                            <span class="fas fa-chevron-right"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="card h-100 overflow-hidden">
            <div class="bg-holder"
                style="background-image:url({{ asset('assets/img/bg/8.png') }});background-position:left bottom;background-size:auto;">
            </div>
            <!--/.bg-holder-->
            <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                <div class="d-flex justify-content-between">
                    <div class="mb-5 mb-md-0 mb-lg-5">
                        <div class="d-sm-flex align-items-center mb-3">
                            <h3 class="mb-0">Table 3</h3>
                        </div>
                        <p class="fs--1 text-700">Daftar booking billiard table 3</p>

                    </div>
                    <img src="{{ asset('assets/img/spot-illustrations/rocket.png') }}" width="54" height="54" alt="">
                </div>
                <div id="tableExample3"
                    data-list='{"valueNames":["date","buyer","time", "dp"],"page":10,"pagination":true}'>
                    <div class="table-responsive">
                        <table class="table table-sm fs--1 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top ps-3" data-sort="date">TGL</th>
                                    <th class="sort border-top" data-sort="buyer">WAKTU</th>
                                    <th class="sort border-top" data-sort="time">PEMESAN</th>
                                    <th class="sort border-top" data-sort="dp">DP</th>
                                    <th class="sort text-end align-middle pe-0 border-top" scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @forelse ($reservations->where('table_id', 3)->sortBy('start_time') as $reservation)
                                <tr>
                                    <td class="align-middle ps-3 date">{{ $reservation->reservation_date }}</td>
                                    <td class="align-middle buyer">{{ $reservation->start_time . ' - ' .
                                        $reservation->end_time }}</td>
                                    <td class="align-middle time">{{ $reservation->buyer }}</td>
                                    <td class="align-middle dp">{{ number_format($reservation->down_payment) }}</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                
                                                <a class="dropdown-item" href="{{ route('admin.reservations.edit', $reservation->id) }}">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                {!! Form::open(['method' => 'DELETE','route' => ['admin.reservations.destroy', $reservation->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Hapus', ['class' => 'dropdown-item text-danger']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="align-middle ps-3 name" colspan="5">Tidak ada data booking</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button class="page-link" data-list-pagination="prev">
                            <span class="fas fa-chevron-left"></span>
                        </button>
                        <ul class="mb-0 pagination"></ul>
                        <button class="page-link pe-0" data-list-pagination="next">
                            <span class="fas fa-chevron-right"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="card h-100 overflow-hidden">
            <div class="bg-holder"
                style="background-image:url({{ asset('assets/img/bg/8.png') }});background-position:left bottom;background-size:auto;">
            </div>
            <!--/.bg-holder-->
            <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                <div class="d-flex justify-content-between">
                    <div class="mb-5 mb-md-0 mb-lg-5">
                        <div class="d-sm-flex align-items-center mb-3">
                            <h3 class="mb-0">Table 4</h3>
                        </div>
                        <p class="fs--1 text-700">Daftar booking billiard table 4</p>

                    </div>
                    <img src="{{ asset('assets/img/spot-illustrations/rocket.png') }}" width="54" height="54" alt="">
                </div>
                <div id="tableExample4"
                    data-list='{"valueNames":["date","buyer","time", "dp"],"page":10,"pagination":true}'>
                    <div class="table-responsive">
                        <table class="table table-sm fs--1 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-top ps-3" data-sort="date">TGL</th>
                                    <th class="sort border-top" data-sort="buyer">WAKTU</th>
                                    <th class="sort border-top" data-sort="time">PEMESAN</th>
                                    <th class="sort border-top" data-sort="dp">DP</th>
                                    <th class="sort text-end align-middle pe-0 border-top" scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @forelse ($reservations->where('table_id', 4)->sortBy('start_time') as $reservation)
                                <tr>
                                    <td class="align-middle ps-3 date">{{ $reservation->reservation_date }}</td>
                                    <td class="align-middle buyer">{{ $reservation->start_time . ' - ' .
                                        $reservation->end_time }}</td>
                                    <td class="align-middle time">{{ $reservation->buyer }}</td>
                                    <td class="align-middle dp">{{ number_format($reservation->down_payment) }}</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                
                                                <a class="dropdown-item" href="{{ route('admin.reservations.edit', $reservation->id) }}">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                {!! Form::open(['method' => 'DELETE','route' => ['admin.reservations.destroy', $reservation->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Hapus', ['class' => 'dropdown-item text-danger']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="align-middle ps-3 name" colspan="5">Tidak ada data booking</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button class="page-link" data-list-pagination="prev">
                            <span class="fas fa-chevron-left"></span>
                        </button>
                        <ul class="mb-0 pagination"></ul>
                        <button class="page-link pe-0" data-list-pagination="next">
                            <span class="fas fa-chevron-right"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />

<script>

</script>
@endsection