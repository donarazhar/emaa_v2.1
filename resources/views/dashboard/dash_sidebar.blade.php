<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="https://siap.al-azhar.id/upload/favicon.ico" type="image/x-icon" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>E-Maa v2.1</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/panel/beranda">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-home"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-Maa <sup>v.2.1</sup></div>
            </a>
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="/panel/beranda">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Interface
            </div>
            {{-- Menu E-Marbout --}}
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>E-Marbout</span>
                </a>
                <ul id="collapseTwo" class="collapse list-unstyled" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseKel">
                            <i class="fas fa-users nav-icon"></i><span>Riwayat Keluarga</span>
                        </a>
                        <ul id="collapseKel" class="collapse list-unstyled" data-parent="#collapseTwo">
                            <li class="bg-white collapse-inner">
                                <a class="collapse-item" href="#">Suami/Istri</a>
                                <a class="collapse-item" href="#">Anak</a>
                                <a class="collapse-item" href="#">Orang Tua</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            {{-- Button toggle --}}
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->nama_user }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('sbadmin/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/proseslogout" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Masjid Agung Al Azhar by DalArmy 2024</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda ingin keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-gradient-warning" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="/proseslogout">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>
    {{-- Script tambahan --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/lib/jquery.mask.min.js') }}"></script>

    @stack('after-script')
</body>

</html>
