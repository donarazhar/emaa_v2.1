@extends('home.h_layoutsdashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {{-- Data Karyawan --}}
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="font-weight-bold">
                                <i class="fas fa-chart-pie mr-1"></i>
                                <strong>Data Karyawan</strong>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($tbl_user as $user)
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h4> {{ $user->nama_user }}</h4>
                                <p> {{ $user->nohp }}</p>
                            </div>
                            <div class="icon">
                                <i class="img-profile rounded-circle">
                                    @php
                                        $path = Storage::url('uploads/marbout/' . $user->foto_user);
                                    @endphp
                                    <img src="{{ $path }}" width="40px">
                                </i>
                            </div>
                            <a class="small-box-footer"> {{ $user->email }} </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ $tbl_user->appends(['tbl_user_page' => $tbl_user->currentPage()])->appends(request()->except('tbl_user_page'))->links('pagination::bootstrap-5') }}
                </div>
            </div>

            <!-- Main row -->
            <div class="row">
                <section class="col-lg-7 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                <strong>Grafik Data</strong>
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Pengislaman &
                                            Konsultasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Persuratan</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body" style="height: 320px;">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart" style="height: 300px;">
                                    <canvas id="myPieChart" style="width: 100%;"></canvas>
                                </div>
                                <div class="chart tab-pane" id="sales-chart" style="width:80%; height: 320px;">
                                    <canvas id="myAreaChart" style="width: 100%;"></canvas>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                </section>
                <section class="col-lg-5 connectedSortable">
                    <!-- Calendar -->
                    <div class="card bg-gradient-success">
                        <div class="card-header border-0">
                            <h3 class="card-title">
                                <i class="far fa-calendar-alt"></i>
                                Calendar
                            </h3>
                            <!-- tools card -->
                            <div class="card-tools">
                                <!-- button with a dropdown -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                        data-toggle="dropdown" data-offset="-52">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a href="#" class="dropdown-item">Add new event</a>
                                        <a href="#" class="dropdown-item">Clear events</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">View calendar</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pt-0">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%"></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card bg-gradient-primary" hidden>
                        <!-- /.card-body-->
                        <div class="card-footer bg-transparent">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <div id="sparkline-1"></div>
                                    <div class="text-white">Tamu</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-4 text-center">
                                    <div id="sparkline-2"></div>
                                    <div class="text-white">Jamaah</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-4 text-center">
                                    <div id="sparkline-3"></div>
                                    <div class="text-white">Muallaf</div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>


                </section>
            </div>
            <div class="row">
                <section class="col-lg-12 connectedSortable">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i>
                                <strong>DataTable Inventaris Barang</strong>
                            </h3>
                        </div>

                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2"
                                            class="table table-bordered table-hover dataTable dtr-inline text-center"
                                            aria-describedby="example2_info">
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
                                                        <td> <img src="{{ asset('sbadmin/img/undraw_rocket.svg') }}"
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
                </section>
            </div>

        </div>
    </section>
    <!-- /.content -->
@endsection
@push('myscript')
    <script>
        var ctx = document.getElementById('myAreaChart').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'bar',
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
    <script>
        // Inisialisasi data untuk Pie Chart
        var labelsdata = <?php echo $labelsdata; ?>;
        var dataIslamKonsul = <?php echo $dataIslamKonsul; ?>;

        // Menggambar Pie Chart menggunakan Chart.js
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labelsdata,
                datasets: [{
                    label: 'Grafik Pengislaman & Konsultasi',
                    data: dataIslamKonsul,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(255, 159, 64, 0.7)',
                    ],
                    borderWidth: 1,
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            },
        });
    </script>
@endpush
