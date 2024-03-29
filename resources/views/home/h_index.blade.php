<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="https://siap.al-azhar.id/upload/favicon.ico" type="image/x-icon">
    <title>E-MAA V2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top" style="font-size: 14px;">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-primary bg-primary topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small">Masjid Agung Al Azhar</span>
                                <img class="img-profile rounded-circle" src="{{ asset('sbadmin/img/logo.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Login
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-home fa-lg text-white"></i> E-Maa Dashboard V2</a>
                    </div>
                    {{-- Row Data Karyawan --}}
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
                                </div>
                            </div>
                        </div>
                        @foreach ($tbl_user as $user)
                            <div class="col-xl-3 col-md-2 mb-2">
                                <div class="card border-left-primary shadow h-100">
                                    <div class="card-body position-relative">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase">
                                                    {{ $user->nohp }}
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{ $user->nama_user }}
                                                </div>
                                                <div class="text-sm">
                                                    {{ $user->email }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user fa-2x text-gray-300"></i>
                                            </div>
                                            <div class="col-auto mt-0 mb-5">
                                                <span
                                                    class="badge bg-primary text-light">{{ $loop->iteration + $tbl_user->firstItem() - 1 }}</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            {{ $tbl_user->appends(['tbl_user_page' => $tbl_user->currentPage()])->appends(request()->except('tbl_user_page'))->links('pagination::bootstrap-5') }}
                        </div>
                    </div>


                    {{-- Row Grafik persuratan --}}
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Data Persuratan</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" style="height: 340px;">
                                    <div class="chart-area" style="height: 100%;">
                                        <canvas id="myAreaChart" style="width: 100%; height: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Row Lapor Keja --}}
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Lapor Kerja Karyawan</h6>
                                </div>
                            </div>
                        </div>
                        @foreach ($laporkerja as $kerja)
                            <div class="col-lg-3">
                                <!-- Illustrations -->
                                <div class="card shadow">
                                    <div class="card-header">
                                        <h6 class="m-0 font-weight-bold text-primary">
                                            {{ \Illuminate\Support\Str::limit($kerja->judul_laporkerja, 30) }}
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 8rem;"
                                                src="{{ asset('sbadmin/img/undraw_rocket.svg') }}">
                                        </div>
                                        <p> {{ \Illuminate\Support\Str::limit($kerja->isi_laporkerja, 50) }}</p>
                                        <span class="badge bg-primary text-light">Oleh :
                                            {{ $kerja->nama_user }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            {{ $laporkerja->appends(['laporkerja_page' => $laporkerja->currentPage()])->appends(request()->except('laporkerja_page'))->links('pagination::bootstrap-5') }}

                        </div>
                    </div>

                    {{-- Row Datatable Inventaris --}}
                    <div class="row mt-3">
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tabel Inventaris Masjid</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="row mt-2">
                                                        <div class="col-12">
                                                            <form action="/" method="GET">
                                                                <div class="row">
                                                                    <div class="col-xl-4">
                                                                        <input type="text"
                                                                            class="form-control form-group"
                                                                            name="cariinventaris" id="cariinventaris"
                                                                            nameplaceholder="Cari Inventaris"
                                                                            value="{{ Request('cariinventaris') }}">
                                                                    </div>
                                                                    <div class="col-xl-2">
                                                                        <div class="form-group">
                                                                            <button type="submit"
                                                                                class="btn btn-primary">
                                                                                <i class="fas fa-search fa-sm"></i>
                                                                                search
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <table class="table table-bordered dataTable text-center"
                                                        width="100%" cellspacing="0" role="grid"
                                                        aria-describedby="dataTable_info" style="width: 100%;">
                                                        <thead>
                                                            <tr role="row">
                                                                <th style="width: auto;">No.</th>
                                                                <th style="width: auto;">Gambar</th>
                                                                <th style="width: auto;">Nama</th>
                                                                <th style="width: auto;">Merk</th>
                                                                <th style="width: auto;">Tgl Beli</th>
                                                                <th style="width: auto;">Lokasi</th>
                                                                <th style="width: auto;">Stok</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($datainventaris as $inventaris)
                                                                <tr class="odd">
                                                                    <td class="sorting_1">
                                                                        {{ $loop->iteration + $datainventaris->firstItem() - 1 }}
                                                                    </td>
                                                                    <td> <img
                                                                            src="{{ asset('sbadmin/img/undraw_rocket.svg') }}"
                                                                            style="height: 40px;">
                                                                    </td>
                                                                    <td>{{ $inventaris->nama_datainventaris }}</td>
                                                                    <td>{{ $inventaris->nama_merk }}</td>
                                                                    <td>{{ date('d-m-Y', strtotime($inventaris->tgl_datainventaris)) }}
                                                                    </td>
                                                                    <td>{{ $inventaris->nama_bagian }}</td>
                                                                    <td>{{ $inventaris->stok_datainventaris }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    {{ $datainventaris->appends(['datainventaris_page' => $datainventaris->currentPage()])->appends(request()->except('datainventaris_page'))->links('pagination::bootstrap-5') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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

    <!-- Page level plugins -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Script untuk meng-handle peristiwa input -->
    <script>
        var ctx = document.getElementById('myAreaChart').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($labelssurat) !!},
                datasets: [{
                    label: 'Grafik Persuratan',
                    data: {!! json_encode($datasurat) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>
