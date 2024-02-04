<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="https://siap.al-azhar.id/upload/favicon.ico" type="image/x-icon">
    <title>Register Jamaah</title>
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
        href="{{ asset('light/css/skins/blue.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('light/css/styleswitcher.css') }}" />

    <!-- Modernizr JS File -->
    <script src="{{ asset('light/js/modernizr.custom.js') }}"></script>
</head>

<body class="contact light">
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>UBAH WARNA</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img
                            src="{{ asset('light/img/styleswitcher/purple.png') }}" alt="purple" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img
                            src="{{ asset('light/img/styleswitcher/red.png') }}" alt="red" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet"
                        class="color"><img src="{{ asset('light/img/styleswitcher/blueviolet.png') }}"
                            alt="blueviolet" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img
                            src="{{ asset('light/img/styleswitcher/blue.png') }}" alt="blue" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img
                            src="{{ asset('light/img/styleswitcher/goldenrod.png') }}" alt="goldenrod" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img
                            src="{{ asset('light/img/styleswitcher/magenta.png') }}" alt="magenta" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen"
                        class="color"><img src="{{ asset('light/img/styleswitcher/yellowgreen.png') }}"
                            alt="yellowgreen" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img
                            src="{{ asset('light/img/styleswitcher/orange.png') }}" alt="orange" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img
                            src="{{ asset('light/img/styleswitcher/green.png') }}" alt="green" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img
                            src="{{ asset('light/img/styleswitcher/yellow.png') }}" alt="yellow" /></a>
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
            <li class="icon-box">
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
                    <li><a href="/jamaah"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li class="active"><a href="/loginjamaah"><i class="fa fa-user"></i><span>Login</span></a></li>

                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
    <!-- Header Ends -->
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>jamaah <span>masjid</span></h1>
        <span class="title-bg">register</span>
    </section>
    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row">
                <!-- Left Side Starts -->
                <div class="col-12 col-lg-4">
                    <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Jamaah Terhormat !</h3>
                    <p class="open-sans-font mb-3">Jangan ragu untuk menghubungi kami. <br>Silahkan daftarkan diri anda
                        untuk lebih dekat dengan kami.</p>
                    <p class="open-sans-font custom-span-contact position-relative">
                        <i class="fa fa-envelope-open position-absolute"></i>
                        <span class="d-block">email masjid</span>masjidagungalazhar@gmail.com
                    </p>
                    <p class="open-sans-font custom-span-contact position-relative">
                        <i class="fa fa-phone-square position-absolute"></i>
                        <span class="d-block">whatsapp center</span>0882 1211 4771
                    </p>
                </div>
                <!-- Left Side Ends -->
                <!-- Contact Form Starts -->
                <div class="col-12 col-lg-8">
                    <form method="post" action="/prosesregisterjamaah">
                        @csrf
                        <div class="contactform">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" name="namauser" placeholder="NAMA ANDA" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="email" name="emailuser" placeholder="EMAIL ANDA" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" name="nohpuser" placeholder="NOMOR HP" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" name="passworduser" placeholder="PASSWORD ANDA" required>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-contact">Kirim Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-12 col-md-6 mt-3">
                        <p class="output_message font-weight-600 text-uppercase">Anda sudah memiliki akun ?
                            <br>
                            <a class="output_message font-weight-600 text-uppercase stretched-link"
                                href="/loginjamaah">Kembali kehalaman Login !</a>
                        </p>
                    </div>
                </div>
                <!-- Contact Form Ends -->
            </div>
            <div class="row">
                <!-- Left Side Starts -->
                <div class="col-12 col-lg-4">
                    <ul class="social list-unstyled pt-1 mb-5">
                        <li class="facebook"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="twitter"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="youtube"><a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li class="dribbble"><a title="Website" href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-8"> </div>
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
