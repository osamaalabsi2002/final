<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/images/favicon.png') }}">
<link rel="stylesheet" href="{{ asset('asset/vendor/jqvmap/css/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('asset/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('asset/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/skin-2.css') }}">


</head>

<body>
    <!-- Top Bar Start -->
    <!-- Your Top Bar Content Here -->

    <!-- Nav Bar Start -->
    <!-- Your Navbar Content Here -->
    <!-- @include('partials.navbarAdmin') -->
    @include('partials.SideBaradmin')
    <!-- Main Content Start -->
    @yield('content')
    <!-- Main Content End -->

    <!-- Footer Start -->
    <!-- Your Footer Content Here -->

    <script src="{{ asset('asset/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('asset/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('asset/js/custom.min.js') }}"></script>
<script src="{{ asset('asset/js/dlabnav-init.js') }}"></script>

<!-- Chart ChartJS plugin files -->
<script src="{{ asset('asset/vendor/chart.js/Chart.bundle.min.js') }}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('asset/vendor/peity/jquery.peity.min.js') }}"></script>

<!-- Chart sparkline plugin files -->
<script src="{{ asset('asset/vendor/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Demo scripts -->
<script src="{{ asset('asset/js/dashboard/dashboard-3.js') }}"></script>

<!-- Svganimation scripts -->
<script src="{{ asset('asset/vendor/svganimation/vivus.min.js') }}"></script>
<script src="{{ asset('asset/vendor/svganimation/svg.animation.js') }}"></script>
<script src="{{ asset('asset/js/styleSwitcher.js') }}"></script>

	
</body>
</html>