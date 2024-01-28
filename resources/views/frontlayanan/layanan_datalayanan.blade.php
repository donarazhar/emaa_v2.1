@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary card-tabs">
                    {{-- PANEL MENU --}}
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="pt-2 px-3">
                                <h3 class="card-title">DATA LAYANAN</h3>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill"
                                    href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home"
                                    aria-selected="true">Buku Tamu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile"
                                    aria-selected="false">Pengislaman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill"
                                    href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages"
                                    aria-selected="false">Konsultasi</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-two-tabContent">

                            <!-- BUKU TAMU -->
                            <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel"
                                aria-labelledby="custom-tabs-two-home-tab">

                                {{-- Datatable Tamu --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-primary card-outline">
                                            <div class="card card-header">
                                                <div class="card-body">
                                                    <div id="example1_wrapper"
                                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table id="example1"
                                                                    class="table table-bordered table-striped dataTable no-footer"
                                                                    role="grid" aria-describedby="example1_info">
                                                                    <thead class="text-center">
                                                                        <tr role="row">
                                                                            <th style="width: auto;">No</th>
                                                                            <th style="width: auto;">Nama</th>
                                                                            <th style="width: auto;">Tgl</th>
                                                                            <th style="width: auto;">Handphone</th>
                                                                            <th style="width: auto;">Email</th>
                                                                            <th style="width: auto;">Keperluan</th>
                                                                            <th style="width: auto;">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($tbl_tamu as $tamu)
                                                                            <tr class="odd">
                                                                                <td class="sorting_1">{{ $loop->iteration }}
                                                                                </td>
                                                                                <td>{{ $tamu->nama_tamu }}</td>
                                                                                <td>{{ date('d-m-Y', strtotime($tamu->tgl_tamu)) }}
                                                                                </td>
                                                                                <td>{{ $tamu->nohp_tamu }}</td>
                                                                                <td>{{ $tamu->email_tamu }}</td>
                                                                                <td>{{ $tamu->keperluan_tamu }}</td>
                                                                                <td class="text-center inline-block">
                                                                                    <button
                                                                                        class="fa fa-edit btn btn-xs btn-warning"
                                                                                        data-toggle="modal"
                                                                                        data-target="#edittamu74"></button>
                                                                                    <button
                                                                                        class="fa fa-trash-alt btn btn-xs btn-danger"
                                                                                        data-toggle="modal"
                                                                                        data-target="#hapustamu74"></button>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- edit datatamu -->
                            <div class="modal fade" id="edittamu">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h6 class="far fa-edit modal-title">&nbsp;&nbsp;Mengubah Data Tamu</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/frontlayanan_editdatatamu" method="post" accept-charset="utf-8">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="namatamumodal">Nama Tamu</label>
                                                    <input name="namatamumodal" type="text" class="form-control"
                                                        id="namatamumodal" value="asdasd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamattamumodal">Alamat</label>
                                                    <input name="alamattamumodal" type="text" class="form-control"
                                                        id="alamattamumodal" value="asdasd" required>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="nohptamumodal">No Handphone</label>
                                                            <input name="nohptamumodal" type="text"
                                                                class="form-control" id="nohptamumodal" value="asdasd"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="emailtamumodal">Email</label>
                                                            <input name="emailtamumodal" type="text"
                                                                class="form-control" id="emailtamumodal" value="asdasd"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keperluantamumodal">Keperluan</label>
                                                    <textarea name="keperluantamumodal" rows="5" class="form-control" id="keperluantamumodal">asdasd</textarea>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default pull-left"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PENGISLAMAN -->
                            <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel"
                                aria-labelledby="custom-tabs-two-profile-tab">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="box box-primary box-solid">
                                            <div class="box-tools box-title pull-left">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title"></h3>
                                                    <button type="button" class="btn btn-primary btn-sm btn-flat"
                                                        data-toggle="modal" data-target="#tambahpengislaman">
                                                        <i class=""></i>Tambah+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Datatable Pengislaman --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-primary card-outline">
                                            <div class="card card-header">
                                                <div class="card-body">
                                                    <div id="example2_wrapper"
                                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table id="example2"
                                                                    class="table table-bordered table-striped dataTable no-footer"
                                                                    role="grid" aria-describedby="example3_info">
                                                                    <thead class="text-center">
                                                                        <tr role="row">
                                                                            <th style="width: auto;">No</th>
                                                                            <th style="width: auto;">No SP</th>
                                                                            <th style="width: auto;">Nama Muallaf</th>
                                                                            <th style="width: auto;">Jenkel</th>
                                                                            <th style="width: auto;">Agama Semula</th>
                                                                            <th style="width: auto;">Imam</th>
                                                                            <th style="width: auto;">Aksi</th>
                                                                            <th style="width: auto;"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($tbl_pengislaman as $pengislaman)
                                                                            <tr class="odd">
                                                                                <td class="sorting_1">
                                                                                    {{ $loop->iteration }}</td>
                                                                                <td>{{ $pengislaman->no_sp }}</td>
                                                                                <td>{{ $pengislaman->nama_sp }}</td>
                                                                                <td>{{ $pengislaman->jenkel_sp }}</td>
                                                                                <td>{{ $pengislaman->agamasemula_sp }}</td>
                                                                                <td>{{ $pengislaman->nama_imam }}</td>
                                                                                <td class="text-center inline-block">
                                                                                    <button
                                                                                        class="fa fa-edit btn btn-xs btn-warning"
                                                                                        data-toggle="modal"
                                                                                        data-target="#editsp113"></button>
                                                                                    <button
                                                                                        class="fa fa-trash-alt btn btn-xs btn-danger"
                                                                                        data-toggle="modal"
                                                                                        data-target="#hapussp113"></button>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="frontlayanan_cetaksp"
                                                                                        target="_blank"
                                                                                        class="btn btn-xs btn-success"><i
                                                                                            class="fa fa-print"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- AKHIR PENGISLAMAN -->

                            <!-- edit datasp  -->
                            <div class="modal fade" id="tambahpengislaman">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h6 class="far fa-envelope modal-title">&nbsp;&nbsp;Menambahkan Data</h6>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="frontlayanan_editdatasp" method="post" accept-charset="utf-8">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="nospmodal">No Sertifikat</label>
                                                                <input name="nospmodal" type="text"
                                                                    class="form-control" id="nospmodal"
                                                                    placeholder="No sertifikat..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="jamspmodal">Jam</label>
                                                                <input name="jamspmodal" type="text"
                                                                    class="form-control" id="jamspmodal"
                                                                    placeholder="WIB..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="harispmodal">Hari</label>
                                                                <select id="harispmodal" class="form-control"
                                                                    name="harispmodal">
                                                                    <option selected="">--Pilih--</option>
                                                                    <option value="Senin">Senin</option>
                                                                    <option value="Selasa">Selasa</option>
                                                                    <option value="Rabu">Rabu</option>
                                                                    <option value="Kamis">Kamis</option>
                                                                    <option value="Jum'at">Jum'at</option>
                                                                    <option value="Sabtu">Sabtu</option>
                                                                    <option value="Ahad">Ahad</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="tglspmodal">Tgl</label>
                                                                <input name="tglspmodal" type="text"
                                                                    class="form-control" id="tglspmodal"
                                                                    placeholder="Masukkan tgl..." required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="namaspmodal">Nama Lengkap</label>
                                                                <input name="namaspmodal" type="text"
                                                                    class="form-control" id="namaspmodal"
                                                                    placeholder="Masukkan nama lengkap..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="jenkelspmodal">Jenis Kelamin</label>
                                                                <select id="jenkelspmodal" class="form-control"
                                                                    name="jenkelspmodal">
                                                                    <option selected="">--Pilih--</option>
                                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="ttlspmodal">Tempat &amp; Tgl Lahir</label>
                                                                <input name="ttlspmodal" type="text"
                                                                    class="form-control" id="ttlspmodal"
                                                                    placeholder="Masukkan tempat lahir, tgl lahir..."
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="agamasemulaspmodal">Agama Semula</label>
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
                                                    <div class="form-group">
                                                        <label for="alamatspmodal">Alamat Jalan</label>
                                                        <input name="alamatspmodal" type="text" class="form-control"
                                                            id="alamatspmodal"
                                                            placeholder="Masukkan alamat jalan lengkap..." required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat2spmodal">Kelurahan / Kecamatan / Provinsi
                                                        </label>
                                                        <input name="alamat2spmodal" type="text" class="form-control"
                                                            id="alamat2spmodal"
                                                            placeholder="Masukkan kelurahan /kecamatan / provinsi..."
                                                            required>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="pekerjaanspmodal">Pekerjaan</label>
                                                                <input name="pekerjaanspmodal" type="text"
                                                                    class="form-control" id="pekerjaanspmodal"
                                                                    placeholder="Masukkan pekerjaan anda..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="saksispmodal">Saksi Saksi</label>
                                                                <input name="saksispmodal" type="text"
                                                                    class="form-control" id="saksispmodal"
                                                                    placeholder="Nama lengkap saksi pertama..." required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="namabaruspmodal">Nama Baru Muallaf
                                                                    <small>*boleh tidak diisi</small> </label>
                                                                <input name="namabaruspmodal" type="text"
                                                                    class="form-control" id="namabaruspmodal"
                                                                    placeholder="Masukkan nama baru jika ingin ada...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input name="saksi2spmodal" type="text"
                                                                    class="form-control" id="saksi2spmodal"
                                                                    placeholder="Nama lengkap saksi kedua..." required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="saksi3spmodal" type="text"
                                                                    class="form-control" id="saksi3spmodal"
                                                                    placeholder="Nama lengkap saksi ketiga jika ada..."
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="alasanspmodal">Alasan Memeluk Islam</label>
                                                                <input name="alasanspmodal" type="text"
                                                                    class="form-control" id="alasanspmodal"
                                                                    placeholder="Masukkan alasan memeluk islam..."
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="imamspmodal">Imam/Takmir</label>
                                                                <select id="imamspmodal" class="form-control"
                                                                    name="imamspmodal">
                                                                    <option value="">--Pilih--</option>
                                                                    <option value="32">H. Bukhari Muslim, SQ., MH
                                                                    </option>
                                                                    <option value="31">Dr. H. Yusup Hidayat, S.Ag., M.H
                                                                    </option>
                                                                    <option value="30">H. Risdin Zein Said</option>
                                                                    <option value="29">H. Mukhtar Ibnu, M.Pd.I</option>
                                                                    <option value="28">H. Achmad Khotib, SQ., MA
                                                                    </option>
                                                                    <option value="19">Dr. H. Shobahussurur, MA
                                                                    </option>
                                                                    <option value="18">H. Agus Nur Qowim, SQ., M.Pd.I
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="nohpspmodal">No Handphone</label>
                                                                <input name="nohpspmodal" type="text"
                                                                    class="form-control" id="nohpspmodal"
                                                                    placeholder="Masukkan nohp anda..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="emailspmodal">Email</label>
                                                                <input name="emailspmodal" type="text"
                                                                    class="form-control" id="emailspmodal"
                                                                    placeholder="Masukkan email anda..." required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="tglmasehispmodal">Tgl Masehi</label>
                                                                <input name="tglmasehispmodal" type="text"
                                                                    class="form-control" id="tglmasehispmodal"
                                                                    placeholder="Tgl masehi..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="tahunmasehispmodal">Tahun Masehi</label>
                                                                <select id="tahunmasehispmodal" class="form-control"
                                                                    name="tahunmasehispmodal">
                                                                    <option selected="">--Pilih--</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2025">2025</option>
                                                                    <option value="2026">2026</option>
                                                                    <option value="2027">2027</option>
                                                                    <option value="2028">2028</option>
                                                                    <option value="2029">2029</option>
                                                                    <option value="2030">2030</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="tglhijriyahspmodal">Tgl Hijriyah</label>
                                                                <input name="tglhijriyahspmodal" type="text"
                                                                    class="form-control" id="tglhijriyahspmodal"
                                                                    placeholder="Tgl hijriyah..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="tahunhijriyahspmodal">Tahun Hijriyah</label>
                                                                <select id="tahunhijriyahspmodal" class="form-control"
                                                                    name="tahunhijriyahspmodal">
                                                                    <option selected="">--Pilih--</option>
                                                                    <option value="1442">1442</option>
                                                                    <option value="1443">1443</option>
                                                                    <option value="1444">1444</option>
                                                                    <option value="1445">1445</option>
                                                                    <option value="1446">1446</option>
                                                                    <option value="1447">1447</option>
                                                                    <option value="1448">1448</option>
                                                                    <option value="1449">1449</option>
                                                                    <option value="1450">1450</option>
                                                                    <option value="1451">1451</option>
                                                                    <option value="1452">1452</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default pull-left"
                                                            data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- KONSULTASI -->
                            <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel"
                                aria-labelledby="custom-tabs-two-messages-tab">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="box box-primary box-solid">
                                            <div class="box-tools box-title pull-left">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title"></h3>
                                                    <button type="button" class="btn btn-primary btn-sm btn-flat"
                                                        data-toggle="modal" data-target="#tambahkonsultasi">
                                                        <i class=""></i>Tambah+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Datatable Konsultasi --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <!-- /.card-header -->
                                            <div class="card card-primary card-outline">
                                                <div class="card card-header">
                                                    <div id="example3_wrapper"
                                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table id="example3"
                                                                    class="table table-bordered table-striped dataTable no-footer"
                                                                    role="grid" aria-describedby="example5_info">
                                                                    <thead class="text-center">
                                                                        <tr role="row">
                                                                            <th style="width: auto;">No</th>
                                                                            <th style="width: auto;">Nama</th>
                                                                            <th style="width: auto;">Jenis Konsultasi</th>
                                                                            <th style="width: auto;">Konsultan</th>
                                                                            <th style="width: auto;">Tanggal</th>
                                                                            <th style="width: auto;">Jam</th>
                                                                            <th style="width: auto;">Aksi</th>
                                                                            <th style="width: auto;"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($tbl_konsultasi as $konsultasi)
                                                                            <tr class="odd">
                                                                                <td class="sorting_1">
                                                                                    {{ $loop->iteration }}</td>
                                                                                <td>{{ $konsultasi->nama_fk }}</td>
                                                                                <td>{{ $konsultasi->nama_jeniskonsultasi }}
                                                                                </td>
                                                                                <td>{{ $konsultasi->nama_imam }}</td>
                                                                                <td>{{ $konsultasi->hari_fk }}/{{ $konsultasi->tgl_fk }}
                                                                                </td>
                                                                                <td>{{ $konsultasi->jam_fk }}</td>

                                                                                <td class="text-center inline-block">
                                                                                    <button
                                                                                        class="fa fa-edit btn btn-xs btn-warning"
                                                                                        data-toggle="modal"
                                                                                        data-target="#editfk34"></button>
                                                                                    <button
                                                                                        class="fa fa-trash-alt btn btn-xs btn-danger"
                                                                                        data-toggle="modal"
                                                                                        data-target="#hapusfk34"></button>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="frontlayanan_cetakkonsultasi"
                                                                                        target="_blank"
                                                                                        class="btn btn-xs btn-success"><i
                                                                                            class="fa fa-print"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ADD /.KONSULTASI  -->
                            <div class="modal fade" id="tambahkonsultasi">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h6 class=" fa fa-archive modal-title">&nbsp;&nbsp;Menambah Data</h6>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/frontlayanan_tambahdatafk" method="post"
                                                accept-charset="utf-8">

                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <label for="tglfkmodal">Tgl</label>
                                                                <input name="tglfkmodal" type="text"
                                                                    class="form-control" id="tglfkmodal"
                                                                    placeholder="Masukkan tgl..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label for="jamfkmodal">Jam</label>
                                                                <input name="jamfkmodal" type="text"
                                                                    class="form-control" id="jamfkmodal"
                                                                    placeholder="WIB..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="harifkmodal">Hari</label>
                                                                <select id="harifkmodal" class="form-control"
                                                                    name="harifkmodal">
                                                                    <option selected="">--Pilih--</option>
                                                                    <option value="Senin">Senin</option>
                                                                    <option value="Selasa">Selasa</option>
                                                                    <option value="Rabu">Rabu</option>
                                                                    <option value="Kamis">Kamis</option>
                                                                    <option value="Jum'at">Jum'at</option>
                                                                    <option value="Sabtu">Sabtu</option>
                                                                    <option value="Ahad">Ahad</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-7">
                                                            <div class="form-group">
                                                                <label for="namafkmodal">Nama Lengkap</label>
                                                                <input name="namafkmodal" type="text"
                                                                    class="form-control" id="namafkmodal"
                                                                    placeholder="Masukkan nama lengkap..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <label for="jenkelfkmodal">Jenis Kelamin</label>
                                                                <select id="jenkelfkmodal" class="form-control"
                                                                    name="jenkelfkmodal">
                                                                    <option selected="">--Pilih--</option>
                                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="ttlfkmodal">Tempat &amp; Tgl Lahir</label>
                                                                <input name="ttlfkmodal" type="text"
                                                                    class="form-control" id="ttlfkmodal"
                                                                    placeholder="Masukkan tempat lahir, tgl lahir..."
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label for="pekerjaanfkmodal">Pekerjaan</label>
                                                                    <input name="pekerjaanfkmodal" type="text"
                                                                        class="form-control" id="pekerjaanfkmodal"
                                                                        placeholder="Masukkan pekerjaan anda..." required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="nohpfkmodal">No Handphone</label>
                                                                <input name="nohpfkmodal" type="text"
                                                                    class="form-control" id="nohpfkmodal"
                                                                    placeholder="Masukkan nohp anda..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="emailfkmodal">Email</label>
                                                                <input name="emailfkmodal" type="text"
                                                                    class="form-control" id="emailfkmodal"
                                                                    placeholder="Masukkan email anda..." required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="alamatfkmodal">Alamat Jalan</label>
                                                        <input name="alamatfkmodal" type="text" class="form-control"
                                                            id="alamatfkmodal"
                                                            placeholder="Masukkan alamat jalan lengkap..." required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat2fkmodal">Kelurahan / Kecamatan / Provinsi
                                                        </label>
                                                        <input name="alamat2fkmodal" type="text" class="form-control"
                                                            id="alamat2fkmodal"
                                                            placeholder="Masukkan kelurahan /kecamatan / provinsi..."
                                                            required>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="jeniskonsultasifkmodal">Jenis
                                                                    Konsultasi</label>
                                                                <select id="jeniskonsultasifkmodal" class="form-control"
                                                                    name="jeniskonsultasifkmodal">
                                                                    <option value="">--Pilih--</option>
                                                                    <option value="22">Hukum Islam</option>
                                                                    <option value="19">Rumah Tangga</option>
                                                                    <option value="18">Hukum Waris</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="imamfkmodal">Imam/Takmir</label>
                                                                <select id="imamfkmodal" class="form-control"
                                                                    name="imamfkmodal">
                                                                    <option value="">--Pilih--</option>
                                                                    <option value="32">H. Bukhari Muslim, SQ., MH
                                                                    </option>
                                                                    <option value="31">Dr. H. Yusup Hidayat, S.Ag.,
                                                                        M.H</option>
                                                                    <option value="30">H. Risdin Zein Said</option>
                                                                    <option value="29">H. Mukhtar Ibnu, M.Pd.I
                                                                    </option>
                                                                    <option value="28">H. Achmad Khotib, SQ., MA
                                                                    </option>
                                                                    <option value="19">Dr. H. Shobahussurur, MA
                                                                    </option>
                                                                    <option value="18">H. Agus Nur Qowim, SQ., M.Pd.I
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="deskripsifkmodal">Deskripsi Permasalahan</label>
                                                        <textarea name="deskripsifkmodal" type="text" class="form-control" id="deskripsifkmodal" rows="5"
                                                            placeholder="Masukkan deskripsi permasalahan..."></textarea>
                                                    </div>

                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default pull-left"
                                                            data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
        $(function() {
            // Proses edit dengan AJAX
            $(".edit").click(function() {
                var id = $(this).attr('id');
                $.ajax({
                    type: 'POST',
                    url: '/frontlayanan_editkategorilayanan',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(respond) {
                        $('#loadeditformkategorilayanan').html(respond);
                    }
                });
                $("#modal-editfrmeditkategorilayanan").modal("show");
            });
            // Proses delete dengan AJAX
            $(".delete-confirm").click(function(e) {
                var form = $(this).closest('form');
                e.preventDefault();
                Swal.fire({
                    title: "Yakin Hapus Data?",
                    text: "Data anda akan terhapus permanen!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire({
                            title: "Terhapus!",
                            text: "Data anda berhasil terhapus",
                            icon: "success"
                        });
                    }
                });
            });

        });
    </script>

    <script>
        $(function() {
            // Proses edit dengan AJAX
            $(".edit2").click(function() {
                var id = $(this).attr('id2');
                $.ajax({
                    type: 'POST',
                    url: '/frontlayanan_editjeniskonsultasi',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(respond) {
                        $('#loadeditformjeniskonsultasi').html(respond);
                    }
                });
                $("#modal-editfrmeditjeniskonsultasi").modal("show");
            });
            // Proses delete dengan AJAX
            $(".delete-confirm2").click(function(e) {
                var form = $(this).closest('form');
                e.preventDefault();
                Swal.fire({
                    title: "Yakin Hapus Data?",
                    text: "Data anda akan terhapus permanen!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire({
                            title: "Terhapus!",
                            text: "Data anda berhasil terhapus",
                            icon: "success"
                        });
                    }
                });
            });

        });
    </script>

    <script>
        $(function() {
            // Proses edit dengan AJAX
            $(".edit3").click(function() {
                var id = $(this).attr('id3');
                $.ajax({
                    type: 'POST',
                    url: '/frontlayanan_editjenispengislaman',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(respond) {
                        $('#loadeditformjenispengislaman').html(respond);
                    }
                });
                $("#modal-editfrmeditjenispengislaman").modal("show");
            });
            // Proses delete dengan AJAX
            $(".delete-confirm3").click(function(e) {
                var form = $(this).closest('form');
                e.preventDefault();
                Swal.fire({
                    title: "Yakin Hapus Data?",
                    text: "Data anda akan terhapus permanen!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hapus"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire({
                            title: "Terhapus!",
                            text: "Data anda berhasil terhapus",
                            icon: "success"
                        });
                    }
                });
            });

        });
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
        $(function() {
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
        $(function() {
            $("#example3").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush
