@extends('home.h_layoutsdashboard')
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-home fa-lg text-white"></i>
            E-Maa Dashboard V2</a>
    </div>
    {{-- Row Data Karyawan --}}
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
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
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
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
        <div class="col-xl-8 col-lg-8">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Pengislaman &
                        Konsultasi</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myPieChart" style="width: 100%; height: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Row Lapor Keja --}}
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
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
                                                        <input type="text" class="form-control form-group"
                                                            name="cariinventaris" id="cariinventaris"
                                                            nameplaceholder="Cari Inventaris"
                                                            value="{{ Request('cariinventaris') }}">
                                                    </div>
                                                    <div class="col-xl-2">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="fas fa-search fa-sm"></i>
                                                                search
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <table class="table table-bordered dataTable text-center" width="100%" cellspacing="0"
                                        role="grid" aria-describedby="dataTable_info" style="width: 100%;">
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
            </div>
        </div>
    </div>
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
