<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Program Kami</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('light/css/styleswitcher.css') }}" />

    <!-- Modernizr JS File -->
    <script src="{{ asset('light/js/modernizr.custom.js') }}"></script>
</head>

<body class="blog light">
    <header class="header" id="navbar-collapse-toggle mb-5">
        <!-- Header Area-->
        <div class="header-area" id="headerArea">
            <div class="container">
                <!-- Header Content-->
                <div
                    class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                    <!-- Back Button-->
                    <div class="back-button"><a href="/panel/frontlayanan_jadwalkonsultasi" style="color:#0d6efd;">
                            <svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-arrow-left-short"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                            </svg>
                        </a>
                    </div>
                    <!-- Page Title-->
                    <div class="page-heading">
                        <h6 class="mb-0">History a.n {{ $tbl_jamaahID->nama_user }}</h6>
                    </div>
                    <!-- Navbar Toggler-->
                    <div class="navbar--toggler" id="affanNavbarToggler">
                        <div class="logo-wrapper">
                            <a href="#">
                                <img src="{{ asset('app_ui/img/bg-img/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Ends -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1 mt-5">
        <h1>program <span>kami</span></h1>
        <span class="title-bg">masjid</span>
    </section>
    <!-- Page Title Ends -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1 mt-5 mb-5">
        <div class="container">
            <!-- Articles Starts -->
            <div class="row">
                <!-- Article Starts -->
                <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                    <article class="post-container">
                        <div class="post-thumb">
                            <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                                <img src="{{ asset('light/img/blog/blog-post-1.jpg') }}" class="img-fluid"
                                    alt="Blog Post">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="entry-header">
                                <h3><a href="blog-post.html">How to Own Your Audience by Creating an Email List</a>
                                </h3>
                            </div>
                            <div class="entry-content open-sans-font">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore...
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article Ends -->
                <!-- Article Starts -->
                <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                    <article class="post-container">
                        <div class="post-thumb">
                            <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                                <img src="{{ asset('light/img/blog/blog-post-1.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="entry-header">
                                <h3><a href="blog-post.html">Top 10 Toolkits for Deep Learning in 2020</a></h3>
                            </div>
                            <div class="entry-content open-sans-font">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore...
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article Ends -->
                <!-- Article Starts -->
                <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                    <article class="post-container">
                        <div class="post-thumb">
                            <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                                <img src="{{ asset('light/img/blog/blog-post-1.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="entry-header">
                                <h3><a href="blog-post.html">Everything You Need to Know About Web Accessibility</a>
                                </h3>
                            </div>
                            <div class="entry-content open-sans-font">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore...
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article Ends -->
                <!-- Article Starts -->
                <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                    <article class="post-container">
                        <div class="post-thumb">
                            <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                                <img src="{{ asset('light/img/blog/blog-post-1.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="entry-header">
                                <h3><a href="blog-post.html">How to Inject Humor & Comedy Into Your Brand</a></h3>
                            </div>
                            <div class="entry-content open-sans-font">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore...
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article Ends -->
                <!-- Article Starts -->
                <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                    <article class="post-container">
                        <div class="post-thumb">
                            <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                                <img src="{{ asset('light/img/blog/blog-post-1.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="entry-header">
                                <h3><a href="blog-post.html">Women in Web Design: How To Achieve Success</a></h3>
                            </div>
                            <div class="entry-content open-sans-font">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore...
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article Ends -->
                <!-- Article Starts -->
                <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                    <article class="post-container">
                        <div class="post-thumb">
                            <a href="blog-post.html" class="d-block position-relative overflow-hidden">
                                <img src="{{ asset('light/img/blog/blog-post-1.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="entry-header">
                                <h3><a href="blog-post.html">Evergreen versus topical content: An overview</a></h3>
                            </div>
                            <div class="entry-content open-sans-font">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore...
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article Ends -->
                <!-- Pagination Starts -->
                <div class="col-12 mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination Ends -->
            </div>
            <!-- Articles Ends -->
        </div>
    </section>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
        <div class="container px-0">
            <!-- Footer Content-->
            <div class="footer-nav position-relative">
                <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                    <li class="{{ request()->is(['/panel/frontlayanan_konsultasi']) ? 'active' : '' }}"><a
                            href="/panel/frontlayanan_konsultasi">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                <path
                                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                            <span>Jadwal</span></a></li>
                    <li class="{{ request()->is(['/panel/dashboarduser']) ? 'active' : '' }}"><a
                            href="/panel/dashboarduser">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                <path
                                    d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z" />
                            </svg>
                            <span>History</span></a></li>
                    <li><a href="/panel/frontlayanan_infaq">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-collection-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1" />
                            </svg>
                            <span>Infaq</span></a></li>
                    <li class="active"><a href="/panel/frontlayanan_program">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
                                <path
                                    d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11" />
                            </svg>
                            <span>Program</span></a></li>
                    <li><a href="/panel/proseslogoutuser">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1" />
                            </svg>
                            <span>Logout</span></a></li>
                </ul>
            </div>
        </div>
    </div>

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

</body>


</html>
