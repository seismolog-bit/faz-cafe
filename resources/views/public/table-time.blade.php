<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Faz Cafe & Balls</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendors/unicons/release/v4.0.0/css/line.css') }}">
    <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body>
    <main class="main" id="top">
        <div class="row container-fluid px-0 mx-0">
            <div class="col-md-9 p-0">
                <iframe id="ytplayer" type="text/html" src="https://www.youtube.com/embed/QK2BB3KpeSQ?autoplay=1&disablekb=1&enablejsapi=1&loop=1&playsinline=1&color=white" frameborder="0" allowfullscreen style="height: 100vh; width: 100%;"> </iframe>
            </div>
            <div class="col-md-3 p-0">
                {{-- @foreach ($orders as $order) --}}
                <div class="card overflow-hidden">
                    <div class="bg-holder d-block bg-card"
                        style="background-image:url({{ asset('assets/img/spot-illustrations/32.png') }});background-position: top right;">
                    </div>
                    <!--/.bg-holder-->
                    <div class="bg-holder d-none d-sm-block d-lg-none d-xxl-block bg-card"
                        style="background-image:url({{ asset('assets/img/spot-illustrations/21.png') }});background-position: bottom right; background-size: auto;">
                    </div>
                    <!--/.bg-holder-->
                    <div class="card-body px-5 position-relative">
                        

                        <livewire:orders-index>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
        {{-- <iframe id="ytplayer" type="text/html"
            src="https://www.youtube.com/embed/QK2BB3KpeSQ?autoplay=1&disablekb=1&enablejsapi=1&loop=1&playsinline=1&color=white"
            frameborder="0" allowfullscreen style="height: 100vh; width: 100%;"> --}}

        </iframe>

    </main>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.js"></script>

    <script type="text/javascript" src="//cdn.rawgit.com/hilios/jQuery.countdown/2.0.4/dist/jquery.countdown.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('[data-countdown]').each(function() {
                var $this = $(this),
                    finalDate = $(this).data('countdown');
                $this.countdown(finalDate, function(event) {
                    $this.html(event.strftime('%H:%M:%S'));
                });
            });
        });
    </script>

<script>
    const notes = document.querySelector('.notes');
    function addNote(note) {
        notes.insertAdjacentHTML('beforeend', note);
    }
    function deleteNote(id){
        let note = document.querySelector(`[data-note="${id}"]`);
        note.remove()
    }
    
    laratime.db('notes') 
            .on('added', ({model}) => {
                let {id, body}  = model;
                let note = `<li data-note="${id}">${body}</li>`;
                addNote(note)
            })
            .on('deleted', ({model}) => {
                let {id} = model;
                deleteNote(id);
            })
</script>

@livewireScripts
    
    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/phoenix.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
</body>

</html>