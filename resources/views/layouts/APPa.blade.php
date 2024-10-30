<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page | BarberSalon</title>

    <!-- Css Files -->
    <link href="{{ asset('main/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/style.css') }}" rel="stylesheet">

<link href="{{ asset('main/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/dl-menu.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/flexslider.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/prettyphoto.css') }}" rel="stylesheet">

<link href="{{ asset('main/css/responsive.css') }}" rel="stylesheet">





@include('partials/mainNavbar')


@yield('content')






@include('partials/Footer')






<script src="{{ asset('main/script/jquery.min.js') }}"></script>
<script src="{{ asset('main/script/modernizr.js') }}"></script>
<script src="{{ asset('main/script/bootstrap.min.js') }}"></script>
<script src="{{ asset('main/script/jquery.dlmenu.js') }}"></script>
<script src="{{ asset('main/script/flexslider-min.js') }}"></script>
<script src="{{ asset('main/script/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('main/script/jquery.prettyphoto.js') }}"></script>
<script src="{{ asset('main/script/waypoints-min.js') }}"></script>
<script src="{{ asset('main/script/owl.carousel.min.js') }}"></script>
<script src="{{ asset('main/script/fitvideo.js') }}"></script>
<script src="{{ asset('main/script/functions.js') }}"></script>

<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

<!-- Flexslider JS -->
<script src="{{ asset('js/jquery.flexslider.js') }}"></script>

</body>

</html>