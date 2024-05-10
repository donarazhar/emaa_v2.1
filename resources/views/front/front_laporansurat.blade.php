@extends('dashboard.dash_sidebar')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark">Grafik Persuratan</div>
                        <div class="card-body">
                            <div class="chart" style="width:100%; height: 100%;">
                                <canvas id="myAreaChart" style="width: 100%;"></canvas>
                            </div>
                        </div>

                    </div>
                </div>

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
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        // Tambahkan warna lainnya sesuai kebutuhan
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 205, 86, 1)',
                        // Tambahkan warna lainnya sesuai kebutuhan
                    ],
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
@endpush
