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
            <div class="card-header bg-dark">Formulir Pengislaman</div>
            <div class="card card-outline-tabs">
                <div class="card-body">
                    <div class="tab-content">
                        <form action="/frontlayanan_tambahdatapengislaman" method="post" accept-charset="utf-8">
                            @csrf
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="namaspmodal" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-8">
                                                <input name="namaspmodal" type="text" class="form-control"
                                                    id="namaspmodal" placeholder="Masukkan nama lengkap..." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="jenkelspmodal" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-8">
                                                <select id="jenkelspmodal" class="form-control" name="jenkelspmodal">
                                                    <option selected="">--Pilih--</option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="ttlspmodal" class="col-sm-4 col-form-label">Tempat &amp; Tgl
                                                Lahir</label>
                                            <div class="col-sm-8">
                                                <input name="ttlspmodal" type="text" class="form-control" id="ttlspmodal"
                                                    placeholder="Masukkan tempat lahir, tgl lahir..." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="agamasemulaspmodal" class="col-sm-4 col-form-label">Agama
                                                Semula</label>
                                            <div class="col-sm-8">
                                                <select id="agamasemulaspmodal" class="form-control"
                                                    name="agamasemulaspmodal">
                                                    <option selected="">--Pilih--</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katholik">Katholik</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Khonghucu">Khonghucu</option>
                                                    <option value="Atheis">Atheis</option>
                                                    <option value="-">Tidak ada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamatspmodal" class="col-sm-2 col-form-label">Alamat Jalan</label>
                                    <div class="col-sm-10">
                                        <input name="alamatspmodal" type="text" class="form-control" id="alamatspmodal"
                                            placeholder="Masukkan alamat jalan lengkap..." required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat2spmodal" class="col-sm-2 col-form-label">Kel/Kec/Prov</label>
                                    <div class="col-sm-10">
                                        <input name="alamat2spmodal" type="text" class="form-control" id="alamat2spmodal"
                                            placeholder="Masukkan kelurahan /kecamatan / provinsi..." required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="pekerjaanspmodal"
                                                class="col-sm-4 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-8">
                                                <input name="pekerjaanspmodal" type="text" class="form-control"
                                                    id="pekerjaanspmodal" placeholder="Masukkan pekerjaan anda..."
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="nohpspmodal" class="col-sm-4 col-form-label">Nomor HP</label>
                                            <div class="col-sm-8">
                                                <input name="nohpspmodal" type="text" class="form-control"
                                                    id="nohpspmodal" placeholder="Masukkan nohp anda..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="saksispmodal" class="col-sm-4 col-form-label">Saksi</label>
                                            <div class="col-sm-8">
                                                <input name="saksispmodal" type="text" class="form-control"
                                                    id="saksispmodal" placeholder="Nama lengkap saksi pertama..."
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group row">
                                            <label for="saksispmodal" class="col-sm-1 col-form-label"></label>
                                            <div class="col-sm-11">
                                                <input name="saksi2spmodal" type="text" class="form-control"
                                                    id="saksi2spmodal" placeholder="Nama lengkap saksi kedua..." required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group row">
                                            <label for="saksispmodal" class="col-sm-1 col-form-label"></label>
                                            <div class="col-sm-11">
                                                <input name="saksi3spmodal" type="text" class="form-control"
                                                    id="saksi3spmodal"
                                                    placeholder="Nama lengkap saksi ketiga jika ada...">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="namabaruspmodal" class="col-sm-4 col-form-label">Nama Baru Muallaf
                                                <small>*boleh
                                                    tidak diisi</small> </label>
                                            <div class="col-sm-8">
                                                <input name="namabaruspmodal" type="text" class="form-control"
                                                    id="namabaruspmodal"
                                                    placeholder="Masukkan nama baru jika ingin ada...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="emailspmodal" class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input name="emailspmodal" type="text" class="form-control"
                                                    id="emailspmodal" placeholder="Masukkan email anda..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alasanspmodal" class="col-sm-2 col-form-label">Alasan</label>
                                    <div class="col-sm-10">
                                        <input name="alasanspmodal" type="text" class="form-control"
                                            id="alasanspmodal" placeholder="Alasan memeluk Agama Islam..."
                                            required></input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
