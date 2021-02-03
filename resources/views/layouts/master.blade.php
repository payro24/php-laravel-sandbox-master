<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8"/>
    <title>آزمایشگاه سرویس پرداخت payro24</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-3.4.1/css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-front.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontiran.css') }}">
    <link rel="icon" href="{{asset('image/favicon.ico')}}" type="image/gif" sizes="16x16">
    @toastr_css

    @yield('header')
    <style type="text/css">
        .pull-right {
            float: left !important;
        }
    </style>
</head>

<body>
<header id="header" class="navbar navbar-static-top ">
    <div class="container">
            <div id="header-logo">
                <a href="{{route('index')}}">
                    <img class="logo" typeof="foaf:Image" src="{{asset('image/logo-orange.svg')}}" alt="payro24 logo">
                </a>
            </div>
            <div id="header-title">
                <h3>آزمایشگاه سرویس پرداخت آیدی‌ پی</h3>
            </div>
    </div>
</header>

<div class="container">
    @yield('content')
</div>

<footer id="footer">
    <p style="text-align: center;  font-size:12px; padding-top:10px; ">
        توسعه یافته توسط
        <a href="https://payro24.ir/" target="_blank" style="color:#fe681e">
            پیرو
        </a>
        <a href="https://github.com/payro24/php-laravel-sandbox" style="padding-right:2px;">
            <img width="30px" src="{{asset('image/github.svg')}}" alt="">
        </a>
    </p>
</footer>


<script>
    function loadWaiting() {
        var div = $("#loadWaiting");
        div.animate({width: '100%', opacity: '1'}, "100");
    }

    function stopLoadWaiting() {
        var div = $("#loadWaiting");
        div.stop();
        div.animate({width: '0', opacity: '0'}, "fast");
    }
</script>

</body>

@jquery
@toastr_js
@toastr_render

<div class="row" id="loadWaiting"></div>

</html>
