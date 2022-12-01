@extends('layouts.admin')

@section('content')
{{-- <div class="d-flex flex-center content-min-h"> --}}
    <div class="row justify-content-md-center">
        <div class="col-lg-6">
            <div class="py-9">
                <form action="{{ route('admin.cards.store') }}" method="post">
                    @csrf
                    {{-- <img class="img-fluid mb-7 d-dark-none" src="{{ asset('assets/img/spot-illustrations/2.png') }}" width="470" alt="" /> --}}

                    <div class="" id="reader" width="320px"></div>

                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Code</label>
                        <input class="form-control" id="code" type="text" name="code" value="" readonly placeholder="Scan QRCode Kartu" />
                    </div>
                    
                    <button class="btn btn-lg btn-primary" type="submit">Registrasi Kartu</button>
                </form>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection

@section('script')
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"> </script>

<script>
    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete"
            || document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(function () {
        var resultContainer = document.getElementById('code');
        var lastResult, countResults = 0;
        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText !== lastResult) {
                ++countResults;
                document.getElementById("code").value = decodedText;
                console.log(`Scan result ${decodedText}`, decodedResult);
            }
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    });
</script>
@endsection