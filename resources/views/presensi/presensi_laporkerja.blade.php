@extends('dashboard.dash_sidebar')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="font-weight-bold">
                                <i class="fas fa-chart-pie mr-1"></i>
                                <strong>Data Lapor Kerja</strong>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($tbl_laporkerja as $laporkerja)
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h4> {{ $laporkerja->nama_user }}</h4>

                                <p> {{ $laporkerja->judul_laporkerja }}</p>
                            </div>
                            <div class="icon">
                                <i class="img-profile rounded-circle">
                                    @php
                                        $path = Storage::url('uploads/marbout/' . $laporkerja->foto_laporkerja);
                                    @endphp
                                    <img src="{{ $path }}" width="40px">
                                </i>
                            </div>
                            <a class="small-box-footer"> {{ $laporkerja->isi_laporkerja }} </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ $tbl_laporkerja->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
@endsection
