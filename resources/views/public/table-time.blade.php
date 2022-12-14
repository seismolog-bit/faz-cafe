<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Table Time</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="front/css/vendor.min.css">
    <link rel="stylesheet" href="front/vendor/bootstrap-icons/font/bootstrap-icons.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="front/css/theme.min.css?v=1.0">
    <link rel="stylesheet" href="front/css/snippets.css">
</head>

<body>
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <div class="container-fluid p-0">
            <div class="video-bg" style="height: 100vh;">
                <div class="js-video-bg video-bg-content" data-hs-video-bg-options='{
               "videoId": "front/video/working-in-office"
             }'></div>
                <div class="video-bg-replacer-img"
                    style="background-image: url(front/video/working-in-office.jpg);">
                </div>
                <div class="position-absolute w-100 bottom-0 mb-3">
                    <div class="row justify-content-center m-0">

                        <div id="order_datas"></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.js"></script>

    <script type="text/javascript" src="//cdn.rawgit.com/hilios/jQuery.countdown/2.0.4/dist/jquery.countdown.min.js"></script>

    <script>
        function fetchdata(){
            $.get("{{ url('fetch_order') }}", {}, function(data, status) {
                $("#order_datas").html(data);
            });
        }

        $(document).ready(function(){
            setInterval(fetchdata,2000);
        });
    </script>

    <script src="front/js/vendor.min.js"></script>
    <script src="front/js/theme.min.js"></script>

    <script>
        (function () {
            new HSGoTo('.js-go-to')

            new HSMegaMenu('.js-mega-menu', {
                desktop: {
                    position: 'left'
                }
            })

            HSCore.components.HSTyped.init('.js-typedjs')

            document.querySelectorAll('.js-video-bg').forEach(item => {
                new HSVideoBg(item).init()
            })
        })()
    </script>
</body>

</html>