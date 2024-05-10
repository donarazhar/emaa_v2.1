@extends('dashboard.dash_sidebarbukutamu')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-12 col-sm-12 col-md-12">

            <nav class="navbar navbar-expand navbar-primary navbar-dark" style="padding-right: 0px">
                <ul class="navbar-nav" style="padding-right: 0px">
                    <li class="nav-item">
                        <a href="/panel/dashboarduser" class="nav-link" style="padding-right: 0px"><i
                                class="fas fa-home mr-2"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="/panel/frontlayanan_bukutamu" class="nav-link" style="padding-right: 0px"><i
                                class="fas fa-address-book mr-2"></i>Buku Tamu</a>
                    </li>
                    <li class="nav-item">
                        <a href="/panel/frontlayanan_konsultasi" class="nav-link"><i
                                class="fas fa-calendar-alt mr-2"></i>Konsultasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="/panel/frontlayanan_pengislaman" class="nav-link"><i
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
            <div class="card-header bg-dark">Formulir Buku Tamu</div>
            <div class="card card-outline-tabs">
                <div class="card-body">
                    <div class="tab-content">
                        <form action="/panel/frontlayanan_tambahdatatamu" method="post" accept-charset="utf-8">
                            @csrf
                            <div class="form-group row">
                                <label for="namatamumodal" class="col-sm-2 col-form-label">Nama Tamu</label>
                                <div class="col-sm-10">
                                    <input name="namatamumodal" type="text" class="form-control" id="namatamumodal"
                                        placeholder="Masukkan nama anda..." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamattamumodal" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input name="alamattamumodal" type="text" class="form-control" id="alamattamumodal"
                                        placeholder="Masukkan alamat anda..." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nohptamumodal" class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input name="nohptamumodal" type="text" class="form-control" id="nohptamumodal"
                                        placeholder="Masukkan nohp anda..." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="emailtamumodal" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="emailtamumodal" type="email" class="form-control" id="emailtamumodal"
                                        placeholder="Masukkan email anda..." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keperluantamumodal" class="col-sm-2 col-form-label">Keperluan</label>
                                <div class="col-sm-10">
                                    <input name="keperluantamumodal" type="text" class="form-control"
                                        id="keperluantamumodal" placeholder="Masukkan keperluan anda..." required></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
