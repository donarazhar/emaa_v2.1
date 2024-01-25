@extends('dashboard.dash_sidebarbukutamu')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-12 col-sm-12 col-md-12">
            <nav class="navbar navbar-expand navbar-primary navbar-dark" style="padding-right: 0px">
                <ul class="navbar-nav" style="padding-right: 0px">
                    <li class="nav-item">
                        <a href="/frontlayanan_bukutamu" class="nav-link" style="padding-right: 0px"><i
                                class="fas fa-address-book mr-2"></i>Buku Tamu</a>
                    </li>
                    <li class="nav-item">
                        <a href="/frontlayanan_konsultasi" class="nav-link"><i
                                class="fas fa-calendar-alt mr-2"></i>Konsultasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="/frontlayanan_pengislaman" class="nav-link"><i
                                class="fas fa-concierge-bell mr-2"></i>Pengislaman</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row px-3 py-3">
        <div class="col-12 col-lg-12 col-sm-12 col-md-12">
            {{-- Pesan error --}}
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::get('warning'))
                <div class="alert alert-warning">
                    {{ Session::get('warning') }}
                </div>
            @endif
            <div class="card-header bg-dark">Formulir Konsultasi</div>
            <div class="card card-outline-tabs">
                <div class="card-body">
                    <div class="tab-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
