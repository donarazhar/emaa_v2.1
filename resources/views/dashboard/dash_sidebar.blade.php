<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://siap.al-azhar.id/upload/favicon.ico" type="image/x-icon">
    <title>E-Maa v2.1 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
    {{-- Datatable --}}
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="/dashboard" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <a class="nav-link" href="/proseslogout" aria-expanded="true">
                <i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="badge badge-danger navbar-badge">Logout</span>
            </a>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link">
                <img src="{{ asset('adminlte/img/logo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">E-Maa v2.12</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        @php
                            $user = Auth::guard('karyawan')->user();
                            $path = Storage::url('uploads/marbout/' . $user->foto_user);
                        @endphp
                        <img src="{{ $path }}" alt="avatar" class="img-circle elevation-2">
                    </div>
                    <div class="info">
                        <a href="/dashboard" class="d-block">{{ $tbl_userID->nama_user }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-header">Selamat Datang di Aplikasi</li>

                        {{-- SIDEBAR E-MARBOUT --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->is(['*']) ? 'active' : '' }}">
                                <i class="fas fa-users nav-icon"></i>
                                <p>
                                    E-Marbout
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="right badge badge-danger">Klik</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview"
                                style="{{ request()->is(['marbout_index', 'marbout_suamiistri', 'marbout_anak', 'marbout_orangtua', 'marbout_sekolah', 'marbout_bahasa', 'marbout_jabatan', 'marbout_penugasan', 'marbout_seminar', 'marbout_penghargaan', 'marbout_pelanggaran', 'marbout_mutasi', 'marbout_dp4']) ? 'display: block;' : 'display: none;' }}">
                                <li
                                    class="nav-item {{ request()->is(['marbout_index']) ? 'menu-is-opening menu-open' : '' }} ">
                                    <a href="/marbout_index"
                                        class="nav-link {{ request()->is(['marbout_index']) ? 'active' : '' }}">
                                        <i class="fas fa-user-check nav-icon"></i>
                                        <p>Data Marbout</p>
                                    </a>
                                </li>

                                {{-- Riwayat Keluaraga --}}
                                <li
                                    class="nav-item {{ request()->is(['marbout_suamiistri', 'marbout_anak', 'marbout_orangtua']) ? 'active' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ request()->is(['marbout_suamiistri', 'marbout_anak', 'marbout_orangtua']) ? 'active' : '' }} ">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>
                                            Riwayat Keluarga
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview"
                                        style="{{ request()->is(['marbout_suamiistri', 'marbout_anak', 'marbout_orangtua']) ? 'display: block;' : 'display: none;' }}">
                                        <li
                                            class="nav-item {{ request()->is(['marbout_suamiistri']) ? 'active' : '' }}">
                                            <a href="/marbout_suamiistri"
                                                class="nav-link {{ request()->is(['marbout_suamiistri']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Suami / Istri</p>
                                            </a>
                                        </li>
                                        <li class="nav-item  {{ request()->is(['marbout_anak']) ? 'active' : '' }}">
                                            <a href="/marbout_anak"
                                                class="nav-link {{ request()->is(['marbout_anak']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Anak</p>
                                            </a>
                                        </li>
                                        <li
                                            class="nav-item {{ request()->is(['marbout_orangtua']) ? 'active' : '' }}">
                                            <a href="/marbout_orangtua"
                                                class="nav-link {{ request()->is(['marbout_orangtua']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Orang Tua</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- Riwayat Pendidikan --}}
                                <li
                                    class="nav-item {{ request()->is(['marbout_sekolah', 'marbout_bahasa']) ? 'active' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ request()->is(['marbout_sekolah', 'marbout_bahasa']) ? 'active' : '' }} ">
                                        <i class="fas fa-graduation-cap nav-icon"></i>
                                        <p>
                                            Riwayat Pendidikan
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview"
                                        style="{{ request()->is(['marbout_sekolah', 'marbout_bahasa']) ? 'display: block;' : 'display: none;' }}">
                                        <li class="nav-item {{ request()->is(['marbout_sekolah']) ? 'active' : '' }}">
                                            <a href="/marbout_sekolah"
                                                class="nav-link {{ request()->is(['marbout_sekolah']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Sekolah</p>
                                            </a>
                                        </li>
                                        <li class="nav-item  {{ request()->is(['marbout_bahasa']) ? 'active' : '' }}">
                                            <a href="/marbout_bahasa"
                                                class="nav-link {{ request()->is(['marbout_bahasa']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Penguasaan Bahasa</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- Riawayat Kepegawaian --}}
                                <li
                                    class="nav-item {{ request()->is(['marbout_jabatan', 'marbout_penugasan', 'marbout_seminar', 'marbout_penghargaan', 'marbout_pelanggaran']) ? 'active' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ request()->is(['marbout_jabatan', 'marbout_penugasan', 'marbout_seminar', 'marbout_penghargaan', 'marbout_pelanggaran']) ? 'active' : '' }}">
                                        <i class="fas fa-briefcase nav-icon"></i>
                                        <p>
                                            Kepegawaian
                                            <i class="right fas fa-angle-down"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview"
                                        style="{{ request()->is(['marbout_jabatan', 'marbout_penugasan', 'marbout_seminar', 'marbout_penghargaan', 'marbout_pelanggaran']) ? 'display: block;' : 'display: none;' }}">
                                        <li class="nav-item {{ request()->is(['marbout_jabatan']) ? 'active' : '' }}">
                                            <a href="/marbout_jabatan"
                                                class="nav-link {{ request()->is(['marbout_jabatan']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Jabatan</p>
                                            </a>
                                        </li>
                                        <li
                                            class="nav-item {{ request()->is(['marbout_penugasan']) ? 'active' : '' }}">
                                            <a href="/marbout_penugasan"
                                                class="nav-link {{ request()->is(['marbout_penugasan']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Penugasan</p>
                                            </a>
                                        </li>
                                        <li class="nav-item {{ request()->is(['marbout_seminar']) ? 'active' : '' }}">
                                            <a href="/marbout_seminar"
                                                class="nav-link {{ request()->is(['marbout_seminar']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Seminar</p>
                                            </a>
                                        </li>
                                        <li
                                            class="nav-item {{ request()->is(['marbout_penghargaan']) ? 'active' : '' }}">
                                            <a href="/marbout_penghargaan"
                                                class="nav-link {{ request()->is(['marbout_penghargaan']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Penghargaan</p>
                                            </a>
                                        </li>
                                        <li
                                            class="nav-item {{ request()->is(['marbout_pelanggaran']) ? 'active' : '' }}">
                                            <a href="/marbout_pelanggaran"
                                                class="nav-link {{ request()->is(['marbout_pelanggaran']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Pelanggaran</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                {{-- Mutasi --}}
                                <li class="nav-item {{ request()->is(['marbout_mutasi']) ? 'active' : '' }} ">
                                    <a href="/marbout_mutasi"
                                        class="nav-link {{ request()->is(['marbout_mutasi']) ? 'active' : '' }}">
                                        <i class="fas fa-exchange-alt nav-icon"></i>
                                        <p>Mutasi</p>
                                    </a>
                                </li>

                                {{-- DP4 --}}
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-exchange-alt nav-icon"></i>
                                        <p>DP4</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- SIDEBAR E-FRONT OFFICE --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->is(['*']) ? 'active' : '' }}">
                                <i class="fas fa-door-open nav-icon"></i>
                                <p>
                                    eMAA Front Office
                                    <i class="right fas fa-angle-down"></i>
                                    <span class="right badge badge-danger">Klik</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview"
                                style="{{ request()->is(['front_kategorisurat', 'front_asalsurat', 'front_datasurat', 'front_bukutamu', 'front_kategorilayanan', 'front_dataimam', 'front_layanan', 'front_laporansurat', 'frontlayanan_kategorilayanan', 'frontlayanan_dataimam', 'frontlayanan_datalayanan']) ? 'display: block;' : 'display: none;' }}">
                                <li
                                    class="nav-item {{ request()->is(['front_kategorisurat', 'front_asalsurat', 'front_datasurat', 'front_bukutamu', 'front_kategorilayanan', 'front_dataimam', 'front_layanan', 'front_laporansurat', 'frontlayanan_kategorilayanan', 'frontlayanan_dataimam', 'frontlayanan_datalayanan']) ? 'active' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ request()->is(['front_kategorisurat', 'front_asalsurat', 'front_datasurat', 'front_bukutamu', 'front_layanan', 'front_laporansurat']) ? 'active' : '' }}">
                                        <i class="fas fa-address-card nav-icon"></i>
                                        <p>
                                            Persuratan
                                            <i class="right fas fa-angle-down"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview"
                                        style="{{ request()->is(['front_kategorisurat', 'front_asalsurat', 'front_datasurat', 'front_bukutamu', 'front_layanan', 'front_laporansurat']) ? 'display: block;' : 'display: none;' }}">
                                        <li
                                            class="nav-item {{ request()->is(['front_kategorisurat', 'front_asalsurat']) ? 'active' : '' }}">
                                            <a href="#"
                                                class="nav-link {{ request()->is(['front_kategorisurat', 'front_asalsurat']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>
                                                    Master
                                                    <i class="right fas fa-angle-down"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview"
                                                style="{{ request()->is(['front_kategorisurat', 'front_asalsurat', 'front_datasurat', 'front_bukutamu', 'front_layanan', 'front_laporansurat']) ? 'display: block;' : 'display: none;' }}">
                                                <li
                                                    class="nav-item {{ request()->is(['front_kategorisurat']) ? 'active' : '' }}">
                                                    <a href="/front_kategorisurat"
                                                        class="nav-link {{ request()->is(['front_kategorisurat']) ? 'active' : '' }}">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Kategori Surat</p>
                                                    </a>
                                                </li>
                                                <li
                                                    class="nav-item {{ request()->is(['front_asalsurat']) ? 'active' : '' }}">
                                                    <a href="/front_asalsurat"
                                                        class="nav-link {{ request()->is(['front_asalsurat']) ? 'active' : '' }}">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Asal Surat</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item {{ request()->is(['front_datasurat']) ? 'active' : '' }}">
                                            <a href="/front_datasurat"
                                                class="nav-link {{ request()->is(['front_datasurat']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Transaksi Surat</p>
                                            </a>
                                        </li>
                                        <li
                                            class="nav-item {{ request()->is(['front_laporansurat']) ? 'active' : '' }}">
                                            <a href="/front_laporansurat"
                                                class="nav-link {{ request()->is(['front_laporansurat']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Laporan Surat</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#"
                                        class="nav-link {{ request()->is(['frontlayanan_kategorilayanan', 'frontlayanan_dataimam', 'frontlayanan_datalayanan']) ? 'active' : '' }}">
                                        <i class="fas fa-address-card nav-icon"></i>
                                        <p>
                                            Layanan
                                            <i class="right fas fa-angle-down"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview"
                                        style="{{ request()->is(['frontlayanan_kategorilayanan', 'frontlayanan_dataimam', 'frontlayanan_datalayanan']) ? 'display: block;' : 'display: none;' }}">
                                        <li class="nav-item">
                                            <a href="#"
                                                class="nav-link {{ request()->is(['frontlayanan_kategorilayanan', 'frontlayanan_dataimam']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>
                                                    Master
                                                    <i class="right fas fa-angle-down"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview"
                                                style="{{ request()->is(['frontlayanan_kategorilayanan', 'frontlayanan_dataimam']) ? 'display: block;' : 'display: none;' }}">
                                                <li
                                                    class="nav-item {{ request()->is(['frontlayanan_kategorilayanan']) ? 'active' : '' }}">
                                                    <a href="/frontlayanan_kategorilayanan"
                                                        class="nav-link {{ request()->is(['frontlayanan_kategorilayanan']) ? 'active' : '' }}">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Kategori Layanan</p>
                                                    </a>
                                                </li>
                                                <li
                                                    class="nav-item {{ request()->is(['frontlayanan_dataimam']) ? 'active' : '' }}">
                                                    <a href="/frontlayanan_dataimam"
                                                        class="nav-link {{ request()->is(['frontlayanan_dataimam']) ? 'active' : '' }}">
                                                        <i class="far fa-dot-circle nav-icon"></i>
                                                        <p>Data Takmir &amp; Imam</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li
                                            class="nav-item {{ request()->is(['frontlayanan_datalayanan']) ? 'active' : '' }}">
                                            <a href="/frontlayanan_datalayanan"
                                                class="nav-link {{ request()->is(['frontlayanan_datalayanan']) ? 'active' : '' }}">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Transaksi Layanan</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="fas fa-caret-right nav-icon"></i>
                                                <p>Laporan Layanan</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-calendar-alt nav-icon"></i>
                                        <p>Kegiatan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header">MISCELLANEOUS</li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content-header">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2024 <a href="#">Masjid Agung Al Azhar</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <strong><a href="#">E-MAA App</a></strong> v.2.1 by DalArmy
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script>
    {{-- Datatable --}}
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    @stack('myscript')
</body>

</html>
