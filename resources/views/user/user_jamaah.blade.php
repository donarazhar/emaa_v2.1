<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="https://siap.al-azhar.id/upload/favicon.ico" type="image/x-icon">
    <title>Homepage Jamaah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{ asset('light/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('light/css/preloader.min.css') }}" rel="stylesheet">
    <link href="{{ asset('light/css/circle.css') }}" rel="stylesheet">
    <link href="{{ asset('light/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('light/css/fm.revealator.jquery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('light/css/style.css') }}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{ asset('light/css/skins/blue.css') }}" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{ asset('light/css/skins/blue.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{ asset('light/css/skins/green.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{ asset('light/css/skins/yellow.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet"
        href="{{ asset('light/css/skins/blueviolet.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod"
        href="{{ asset('light/css/skins/goldenrod.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta"
        href="{{ asset('light/css/skins/magenta.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{ asset('light/css/skins/orange.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{ asset('light/css/skins/purple.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{ asset('light/css/skins/red.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen"
        href="{{ asset('light/css/skins/yellowgreen.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('light/css/styleswitcher.css') }}" />

    <!-- Modernizr JS File -->
    <script src="{{ asset('light/js/modernizr.custom.js') }}"></script>
</head>

<body class="home light">
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>UBAH WARNA</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img
                            src="{{ asset(asset('light/img/styleswitcher/purple.png')) }}" alt="purple" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img
                            src="{{ asset(asset('light/img/styleswitcher/red.png')) }}" alt="red" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet"
                        class="color"><img src="{{ asset(asset('light/img/styleswitcher/blueviolet.png')) }}"
                            alt="blueviolet" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img
                            src="{{ asset(asset('light/img/styleswitcher/blue.png')) }}" alt="blue" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img
                            src="{{ asset(asset('light/img/styleswitcher/goldenrod.png')) }}" alt="goldenrod" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img
                            src="{{ asset(asset('light/img/styleswitcher/magenta.png')) }}" alt="magenta" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen"
                        class="color"><img src="{{ asset(asset('light/img/styleswitcher/yellowgreen.png')) }}"
                            alt="yellowgreen" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img
                            src="{{ asset(asset('light/img/styleswitcher/orange.png')) }}" alt="orange" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img
                            src="{{ asset(asset('light/img/styleswitcher/green.png')) }}" alt="green" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img
                            src="{{ asset(asset('light/img/styleswitcher/yellow.png')) }}" alt="yellow" /></a>
                </li>
            </ul>
            <div id="hideSwitcher">&times;</div>
        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Header Starts -->
    <header class="header" id="navbar-collapse-toggle">
        <!-- Fixed Navigation Starts -->
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box active">
                <i class="fa fa-home"></i>
                <a href="/jamaah">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-user"></i>
                <a href="/loginjamaah">
                    <h2>Login</h2>
                </a>
            </li>
        </ul>
        <!-- Fixed Navigation Ends -->
        <!-- Mobile Menu Starts -->
        <nav role="navigation" class="d-block d-lg-none">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul class="list-unstyled" id="menu">
                    <li class="active"><a href="/jamaah"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li><a href="/loginjamaah"><i class="fa fa-user"></i><span>Login</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
    <!-- Header Ends -->
    <!-- Main Content Starts -->
    <section
        class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
        <div class="color-block d-none d-lg-block"></div>
        <div class="row home-details-container align-items-center">
            <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
            <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                <div>
                    <img src="{{ asset('light/img/img-mobile-light.jpg') }}"
                        class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                    <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">Assalamu'alaikum !</h6>
                    <h1 class="text-uppercase poppins-font">Masjid Agung Al Azhar</h1>
                    <p class="open-sans-font">Menyampaikan salam takzim, semoga ALLAH S.W.T selalu memberikan
                        kesehatan, dan keberkahan kepada kita semua. Selanjutnya silahkan Register data untuk lebih
                        dekat
                        kepada kami.</p>
                    <a href="/registerjamaah" class="btn btn-about">Register sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Template JS Files -->
    <script src="{{ asset('light/js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('light/js/styleswitcher.js') }}"></script>
    <script src="{{ asset('light/js/preloader.min.js') }}"></script>
    <script src="{{ asset('light/js/fm.revealator.jquery.min.js') }}"></script>
    <script src="{{ asset('light/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('light/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('light/js/classie.js') }}"></script>
    <script src="{{ asset('light/js/cbpGridGallery.js') }}"></script>
    <script src="{{ asset('light/js/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('light/js/popper.min.js') }}"></script>
    <script src="{{ asset('light/js/bootstrap.js') }}"></script>
    <script src="{{ asset('light/js/custom.js') }}"></script>

</body>


</html>
