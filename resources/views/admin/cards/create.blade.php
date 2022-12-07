@extends('layouts.admin')

@section('content')
{{-- <div class="d-flex flex-center content-min-h"> --}}
    <div class="row justify-content-md-center">
        <div class="col-lg-6">
            <div class="py-9">
                <form action="{{ route('admin.cards.store') }}" method="post">
                    @csrf
                    {{-- <img class="img-fluid mb-7 d-dark-none" src="{{ asset('assets/img/spot-illustrations/2.png') }}" width="470" alt="" /> --}}

                    {{-- <div class="" id="reader" width="320px"></div> --}}

                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Code</label>
                        <input class="form-control" id="code" type="text" name="code" value="{{ time() }}" readonly placeholder="Scan QRCode Kartu" />
                    </div>
                    
                    <button class="btn btn-lg btn-primary" type="submit">Generate Kartu</button>
                </form>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection