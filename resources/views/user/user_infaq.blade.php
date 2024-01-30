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
    <title>Infaq a.n {{ $tbl_jamaahID->nama_user }}</title>
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

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Header Content-->
            <div
                class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button-->
                <div class="back-button"><a href="/panel/frontlayanan_konsultasi"><svg width="32" height="32"
                            viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                        </svg></a></div>
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

    <div class="page-content-wrapper py-3">
        <div class="container">
            <!-- Cart Wrapper-->
            <div class="cart-wrapper-area">
                <div class="cart-table card mb-3">
                    <div class="table-responsive card-body">
                        <table class="table mb-0 text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><img src="img/bg-img/p1.jpg" alt=""></th>
                                    <td>
                                        <h6 class="mb-1">Wooden Tool</h6><span>$9.89 × 1</span>
                                    </td>
                                    <td>
                                        <div class="quantity">
                                            <input class="qty-text" type="text" value="1">
                                        </div>
                                    </td>
                                    <td><a class="remove-product" href="#"><i class="fa fa-close"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="img/bg-img/p3.jpg" alt=""></th>
                                    <td>
                                        <h6 class="mb-1">Black T-shirt</h6><span>$10.99 × 2</span>
                                    </td>
                                    <td>
                                        <div class="quantity">
                                            <input class="qty-text" type="text" value="2">
                                        </div>
                                    </td>
                                    <td><a class="remove-product" href="#"><i class="fa fa-close"></i></a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="img/bg-img/p5.jpg" alt=""></th>
                                    <td>
                                        <h6 class="mb-1">Crispy Biscuit</h6><span>$0.78 × 9</span>
                                    </td>
                                    <td>
                                        <div class="quantity">
                                            <input class="qty-text" type="text" value="9">
                                        </div>
                                    </td>
                                    <td><a class="remove-product" href="#"><i class="fa fa-close"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body border-top">
                        <div class="apply-coupon">
                            <h6 class="mb-0">Have a coupon?</h6>
                            <p class="mb-2">Enter your coupon code here &amp; get awesome discounts!</p>
                            <div class="coupon-form">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input
                                                class="form-control input-group-text text-start form-control-clicked"
                                                type="text" placeholder="OFFER30">
                                            <button class="btn btn-primary" type="submit">Apply</button>
                                        </div>
                                    </div>
                                    <!-- Checkout--><a class="btn btn-danger w-100 mt-4"
                                        href="page-checkout.html">$38.89 &amp; Pay</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
        <div class="container px-0">
            <!-- Footer Content-->
            <div class="footer-nav position-relative">
                <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                    <li>
                        <a href="/panel/frontlayanan_konsultasi">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                <path
                                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                            <span>Jadwal</span></a>
                    </li>
                    <li>
                        <a href="/panel/dashboarduser">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                <path
                                    d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z" />
                            </svg>
                            <span>History</span></a>
                    </li>
                    <li class="active"><a href="/panel/frontlayanan_infaq">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-collection-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1" />
                            </svg>
                            <span>Infaq</span></a></li>
                    <li><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z" />
                            </svg>
                            <span>Chat</span></a></li>
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
