<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>E-Maa v.2.1 | Dashboard</title>
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('app_ui/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/apexcharts.css') }}">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="{{ asset('app_ui/style.css') }}">
    <!-- Web App Manifest-->
    <link rel="manifest" href="{{ asset('app_ui/manifest.json') }}">
</head>

<body>
    <!-- Back Button-->
    <div class="login-back-button"><a href="/panel/frontlayanan_konsultasi">
            <svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
            </svg></a></div>
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="{{ asset('app_ui/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/default/internet-status.js') }}"></script>
    <script src="{{ asset('app_ui/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/wow.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/default/dark-mode-switch.js') }}"></script>
    <script src="{{ asset('app_ui/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/default/active.js') }}"></script>
    <script src="{{ asset('app_ui/js/default/clipboard.js') }}"></script>
    <!-- PWA-->
    <script src="{{ asset('app_ui/js/pwa.js') }}"></script>
    @stack('myscript')
</body>

</html>
