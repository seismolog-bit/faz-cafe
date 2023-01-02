@extends('layouts.admin')

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.reservations.index', ['date' => Carbon\Carbon::now()->format('d-m-Y')]) }}">Booking</a></li>
        <li class="breadcrumb-item active">Tambah booking</li>
    </ol>
</nav>

<form class="mb-9" action="{{ route('admin.reservations.store') }}" method="post">
    @csrf
    <div class="row g-3 flex-between-end mb-5">
        <div class="col-auto">
            <h2 class="mb-2">Tambah booking</h2>
            <h5 class="text-700 fw-semi-bold">Lengkapi detail formulir booking</h5>
        </div>
        <div class="col-auto">
            <a class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" href="{{ route('admin.reservations.index', ['date' => Carbon\Carbon::now()->format('d-m-Y')]) }}">Discard</a>
            <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Simpan booking</button>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-12 col-md-8 mb-4">
            <div class="mb-4">
                <label class="text-1000 form-label">Tanggal</label>
                <input class="form-control datetimepicker" id="datepicker" type="text" placeholder="dd/mm/yyyy" name="reservation_date" value="{{ old('reservation_date') }}" data-options='{"disableMobile":false,"dateFormat":"d/m/Y"}' required />
            </div>
            <div class="row g-5">
                <div class="col-12 col-sm-6">
                    <div class="mb-4">
                        <label class="text-1000 form-label">Jam Mulai</label>
                        <input class="form-control datetimepicker" id="timepicker1" name="start_time" type="text" placeholder="Jam : Menit" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":false, "time_24hr": true}' value="{{ old('start_time') }}" required />
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="mb-4">
                        <label class="text-1000 form-label">Jam Selesai</label>
                        <input class="form-control datetimepicker" id="timepicker2" name="end_time" type="text" placeholder="Jam : Menit" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":false, "time_24hr": true}' value="{{ old('end_time') }}" required />
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="form-label text-1000">Table</label>
                <select class="form-select mb-3" aria-label="table_id" name="table_id" data-choices="data-choices"
                single="single" data-options='{"removeItemButton":true,"placeholder":true}' required>
                    @foreach ($tables as $table)
                        <option value="{{ $table->id }}">{{ $table->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="text-1000 form-label">Pembeli</label>
                <input class="form-control" type="text" placeholder="Pembeli" required name="buyer" value="{{ old('buyer') }}"/>
            </div>
            <div class="mb-4">
                <label class="text-1000 form-label">DP</label>
                <input class="form-control" type="number" placeholder="Down Payment" required name="down_payment" value="{{ old('down_payment') }}"/>
            </div>
            
            <div class="mb-4">
                <label class="text-1000 form-label">Catatan</label>
                <textarea name="note" class="form-control"> {{ old('note') }} </textarea>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="row g-2">
                <div class="col-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="mb-4">
                                <label class="form-label">Catatan</label>
                                <small>
                                    <br>
                                    <p>Sebelum membuat formulir boking pastikan tidak ada jam yang bentrok.</p>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('script')
<link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet" />
<script src="{{ asset('vendors/choices/choices.min.js') }}"></script>

<link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
{{-- <script src="{{ asset('assets/js/flatpickr.js') }}"></script> --}}

@endsection