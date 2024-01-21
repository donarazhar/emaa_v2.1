@extends('dashboard.dash_sidebar')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <div class="row sm-2">
                                <div class="col-lg-6">
                                    <h4><strong>Profile {{ $tbl_marboutID->nama_user }}</strong></h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header px-2 py-2">
                                        <ul class="nav nav-pills ">
                                            <li class="nav-item"><a class="nav-link active fas fa-user-circle nav-icon"
                                                    href="#biodata" data-toggle="tab">&nbsp; Biodata</a></li>
                                            <li class="nav-item"><a class="nav-link fas fa-user-plus nav-icon"
                                                    href="#suami" data-toggle="tab">&nbsp; Suami/Istri</a></li>
                                            <li class="nav-item"><a class="nav-link fas fa-user-plus nav-icon"
                                                    href="#anak" data-toggle="tab">&nbsp; Anak</a></li>
                                            <li class="nav-item"><a class="nav-link fas fa-user-plus nav-icon"
                                                    href="#orangtua" data-toggle="tab">&nbsp; Orang Tua</a></li>
                                            <li class="nav-item"><a class="nav-link fas fa-graduation-cap nav-icon"
                                                    href="#pendidikan" data-toggle="tab">&nbsp; Pendidikan</a></li>
                                            <li class="nav-item"><a class="nav-link fas fa-language nav-icon" href="#bahasa"
                                                    data-toggle="tab">&nbsp; Bahasa</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body ">
                                        <div class="tab-content">
                                            <!-- BIODATA -->
                                            <div class="active tab-pane" id="biodata">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="card card-dark card-outline">
                                                                <div class="card-body box-profile-circle text-center">
                                                                    <div class="text-center">

                                                                        @php
                                                                            $path = Storage::url('uploads/marbout/' . $tbl_marboutID->foto_user);
                                                                        @endphp
                                                                        <img src="{{ $path }}" width="85%">
                                                                    </div>
                                                                    <br>
                                                                    <span class="badge bg-primary">
                                                                        {{ $tbl_marboutID->nip }}
                                                                    </span>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-12 col-form-label">
                                                                            <i><strong>{{ $tbl_marboutID->nama_user }}</strong></i><br>
                                                                            <i><small>{{ $tbl_marboutID->nama_unitkerja }}</small></i>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card card-dark card-outline">
                                                                <div class="card-body text-left">
                                                                    <hr>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Jenis
                                                                            Kelamin</h6>
                                                                        <label class="col-sm-8 col-form-label far fa-user">
                                                                            {{ $tbl_marboutID->jenkel }} </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Tempat,
                                                                            Tgl Lahir</h6>
                                                                        <label
                                                                            class="col-sm-8 col-form-label far fa-calendar-alt">
                                                                            {{ $tbl_marboutID->tempat_lahir }},
                                                                            &nbsp;{{ date('d-m-Y', strtotime($tbl_marboutID->tgl_lahir)) }}
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Golongan
                                                                            Darah</h6>
                                                                        <label class="col-sm-8 col-form-label">
                                                                            {{ $tbl_marboutID->goldar }} </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Status
                                                                            Pernikahan</h6>
                                                                        <label class="col-sm-8 col-form-label">
                                                                            {{ $tbl_marboutID->status_nikah }} </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">No Telp
                                                                        </h6>
                                                                        <label
                                                                            class="col-sm-8 col-form-label fas fa-mobile-alt">
                                                                            {{ $tbl_marboutID->nohp }}</label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Email
                                                                        </h6>
                                                                        <label class="col-sm-8 col-form-label">
                                                                            {{ $tbl_marboutID->email }} </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Alamat
                                                                        </h6>
                                                                        <label class="col-sm-8 col-form-label">
                                                                            {{ $tbl_marboutID->alamat }} </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Status
                                                                            Pegawai</h6>
                                                                        <label class="col-sm-8 col-form-label">
                                                                            {{ $tbl_marboutID->status_kepeg }} </label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- /.BIODATA -->

                                            <!-- SUAMI ISTRI-->
                                            <div class="tab-pane" id="suami">
                                                <div class="card card-outline">
                                                    <div class="card-body">
                                                        <div id="example1_wrapper"
                                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="example1"
                                                                        class="table table-bordered table-striped dataTable no-footer"
                                                                        role="grid" aria-describedby="example1_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th style="width: auto;">No</th>
                                                                                <th style="width: auto;">Foto</th>
                                                                                <th style="width: auto;">NIK</th>
                                                                                <th style="width: auto;">Nama</th>
                                                                                <th style="width: auto;">TTL</th>
                                                                                <th style="width: auto;">Pendidikan </th>
                                                                                <th style="width: auto;">Pekerjaan </th>
                                                                                <th style="width: auto;">Hubungan </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($tbl_datakelID as $datakel)
                                                                                <tr class="odd">
                                                                                    <td class="sorting_1">
                                                                                        <small>{{ $loop->iteration }}</small>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        @php
                                                                                            $path = Storage::url('uploads/marbout/datakel/' . $datakel->foto);
                                                                                        @endphp

                                                                                        @if (empty($datakel->foto))
                                                                                            <img src="{{ asset('adminlte/img/nophoto.png') }}"
                                                                                                width="80px">
                                                                                        @else
                                                                                            <img src="{{ $path }}"
                                                                                                width="80px">
                                                                                        @endif
                                                                                    </td>
                                                                                    <td><small>{{ $datakel->nik }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel->namadatakel }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel->tempat_lahir }},
                                                                                            {{ date('d-m-Y', strtotime($datakel->tgl_lahir)) }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel->pendidikan }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel->pekerjaan }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel->status_hub }}</small>
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
                                            <!-- AKHIR SUAMI ISTRI-->

                                            <!-- ANAK -->
                                            <div class="tab-pane" id="anak">
                                                <div class="card card-outline">
                                                    <div class="card-body">
                                                        <div id="example3_wrapper"
                                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="example3"
                                                                        class="table table-bordered table-striped dataTable no-footer"
                                                                        role="grid" aria-describedby="example3_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th style="width: auto;">No</th>
                                                                                <th style="width: auto;">Foto</th>
                                                                                <th style="width: auto;">NIK</th>
                                                                                <th style="width: auto;">Nama</th>
                                                                                <th style="width: auto;">TTL</th>
                                                                                <th style="width: auto;">Jenkel</th>
                                                                                <th style="width: auto;">Pendidikan </th>
                                                                                <th style="width: auto;">Pekerjaan </th>
                                                                                <th style="width: auto;">Hubungan </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($tbl_datakel2ID as $datakel2)
                                                                                <tr class="odd">
                                                                                    <td class="sorting_1">
                                                                                        <small>{{ $loop->iteration }}</small>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        @php
                                                                                            $path = Storage::url('uploads/marbout/datakel2/' . $datakel2->foto2);
                                                                                        @endphp

                                                                                        @if (empty($datakel2->foto2))
                                                                                            <img src="{{ asset('adminlte/img/nophoto.png') }}"
                                                                                                width="80px">
                                                                                        @else
                                                                                            <img src="{{ $path }}"
                                                                                                width="80px">
                                                                                        @endif
                                                                                    </td>
                                                                                    <td><small>{{ $datakel2->nik2 }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel2->namadatakel2 }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel2->tempat_lahir2 }}.
                                                                                            {{ date('d-m-Y', strtotime($datakel2->tgl_lahir2)) }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel2->jenkel2 }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel2->pendidikan2 }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel2->pekerjaan2 }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel2->status_hub2 }}</small>
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
                                            <!-- AKHIR ANAK -->

                                            <!-- ORANG TUA-->
                                            <div class="tab-pane" id="orangtua">
                                                <div class="card card-outline">
                                                    <div class="card-body">
                                                        <div id="example5_wrapper"
                                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="example5"
                                                                        class="table table-bordered table-striped dataTable no-footer"
                                                                        role="grid" aria-describedby="example5_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th style="width: auto;">No</th>
                                                                                <th style="width: auto;">Foto</th>
                                                                                <th style="width: auto;">NIK</th>
                                                                                <th style="width: auto;">Nama</th>
                                                                                <th style="width: auto;">TTL</th>
                                                                                <th style="width: auto;">Pendidikan</th>
                                                                                <th style="width: auto;">Pekerjaan</th>
                                                                                <th style="width: auto;">Hubungan</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($tbl_datakel3ID as $datakel3)
                                                                                <tr class="odd">
                                                                                    <td class="sorting_1">
                                                                                        <small>{{ $loop->iteration }}</small>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        @php
                                                                                            $path = Storage::url('uploads/marbout/datakel3/' . $datakel->foto);
                                                                                        @endphp

                                                                                        @if (empty($datakel->foto))
                                                                                            <img src="{{ asset('adminlte/img/nophoto.png') }}"
                                                                                                width="80px">
                                                                                        @else
                                                                                            <img src="{{ $path }}"
                                                                                                width="80px">
                                                                                        @endif
                                                                                    </td>
                                                                                    <td><small>{{ $datakel3->nik3 }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel3->namadatakel3 }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel3->tempat_lahir3 }},
                                                                                            {{ date('d-m-Y', strtotime($datakel3->tgl_lahir3)) }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel3->pendidikan3 }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel3->pekerjaan3 }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $datakel3->status_hub3 }}</small>
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
                                            <!-- AKHIR ORANG TUA -->

                                            <!-- PENDIDIKAN-->
                                            <div class="tab-pane" id="pendidikan">
                                                <div class="card card-outline">
                                                    <div class="card-body">
                                                        <div id="example7_wrapper"
                                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="example7"
                                                                        class="table table-bordered table-striped dataTable no-footer"
                                                                        role="grid" aria-describedby="example7_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th style="width: auto;">No</th>
                                                                                <th style="width: auto;">Tingkat</th>
                                                                                <th style="width: auto;">Nama Sekolah</th>
                                                                                <th style="width: auto;">Lokasi</th>
                                                                                <th style="width: auto;">Jurusan</th>
                                                                                <th style="width: auto;">No Ijazah</th>
                                                                                <th style="width: auto;">Tgl Ijazah</th>
                                                                                <th style="width: auto;">Kepsek</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($tbl_sekolahID as $sekolah)
                                                                                <tr class="odd">
                                                                                    <td class="sorting_1">
                                                                                        <small>{{ $loop->iteration }}</small>
                                                                                    </td>
                                                                                    <td> <small>{{ $sekolah->tingkat }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $sekolah->namasekolah }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $sekolah->lokasi }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $sekolah->jurusan }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $sekolah->nomorijazah }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ date('d-m-Y', strtotime($sekolah->tgl_ijazah)) }}</small>
                                                                                    </td>
                                                                                    <td><small>{{ $sekolah->namakepsek }}</small>
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
                                            <!-- AKHIR PENDIDIKAN -->

                                            <!-- BAHASA-->
                                            <div class="tab-pane" id="bahasa">
                                                <div class="card card-outline">
                                                    <div class="card-body">
                                                        <table id="example5" class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Jenis Bahasa</th>
                                                                    <th>Nama Bahasa</th>
                                                                    <th>Kemampuan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($tbl_bahasaID as $bahasa)
                                                                    <tr>
                                                                        <td><small>{{ $loop->iteration }}</small></td>
                                                                        <td><small>{{ $bahasa->jenisbahasa }}</small></td>
                                                                        <td><small>{{ $bahasa->bahasa }}</small></td>
                                                                        <td><small>{{ $bahasa->kemampuan }}</small></td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- AKHIR BAHASA -->

                                            <!-- AKHIR TAB PANEl -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- AWAL PANEL MENU MODAL --}}
                            <div class="col-lg-2">
                                <div class="car-header">
                                    <div class="card card-primary px-2 mt-2">
                                        <div class="card-header">
                                            <h2 class="card-title far fa-file-code nav-icon text-center">
                                                &nbsp;&nbsp;<strong>Kepegawaian</strong></h2>
                                        </div>
                                        <hr>
                                        <button type="button" class="btn btn-dark btn-xl fab fa-searchengin"
                                            data-toggle="modal"
                                            data-target="#modal-xl">&nbsp;&nbsp;&nbsp;Jabatan&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <hr>
                                        <button type="button" class="btn btn-dark btn-xl fab fa-searchengin"
                                            data-toggle="modal"
                                            data-target="#modal-xl2">&nbsp;&nbsp;&nbsp;Penugasan&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <hr>
                                        <button type="button" class="btn btn-dark btn-xl fab fa-searchengin"
                                            data-toggle="modal"
                                            data-target="#modal-xl3">&nbsp;&nbsp;&nbsp;Seminar&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <hr>
                                        <button type="button" class="btn btn-dark btn-xl fab fa-searchengin"
                                            data-toggle="modal"
                                            data-target="#modal-xl4">&nbsp;&nbsp;&nbsp;Penghargaan&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <hr>
                                        <button type="button" class="btn btn-dark btn-xl fab fa-searchengin"
                                            data-toggle="modal"
                                            data-target="#modal-xl5">&nbsp;&nbsp;&nbsp;Pelanggaran&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <hr>
                                        <a class="btn btn-primary btn-xl" href="/marbout_index"><i
                                                class="fas fa-undo">&nbsp;&nbsp;&nbsp;Kembali&nbsp;&nbsp;&nbsp;</i>
                                        </a>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            {{-- AKHIR PANEL MENU MODAL --}}
                        </div>

                        {{-- Awal Modal Jabatan --}}
                        <div class="modal fade" id="modal-xl" aria-hidden="true" style="display: none;">
                            <!-- AWAL MODAL JABATAN -->
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <div class="col-xl-6">
                                            <h4 class="modal-title"><strong>Riwayat Jabatan</strong></h4>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card card-outline">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        Nama :
                                                        &nbsp;&nbsp;<strong>{{ $tbl_marboutID->nama_user }}</strong>
                                                    </div>
                                                </div><br>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: auto;">No</th>
                                                            <th style="width: auto;">Foto</th>
                                                            <th style="width: auto;">Jabatan</th>
                                                            <th style="width: auto;">Eselon</th>
                                                            <th style="width: auto;">No SK</th>
                                                            <th style="width: auto;">Tgl SK</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($tbl_jabatanID as $jabatan)
                                                            <tr>
                                                                <td><small>{{ $loop->iteration }}</small></td>
                                                                <td class="text-center">
                                                                    @php
                                                                        $path = Storage::url('uploads/marbout/jabatan/' . $jabatan->filesk_jabatan);
                                                                    @endphp

                                                                    @if (empty($jabatan->filesk_jabatan))
                                                                        <img src="{{ asset('adminlte/img/nophoto.png') }}"
                                                                            width="80px">
                                                                    @else
                                                                        <img src="{{ $path }}" width="40px">
                                                                    @endif
                                                                </td>
                                                                <td><small>{{ $jabatan->namajabatan }}</small></td>
                                                                <td><small>{{ $jabatan->namaeselon }}</small></td>
                                                                <td><small>{{ $jabatan->nosk_jabatan }}</small></td>
                                                                <td><small>{{ date('d-m-Y', strtotime($jabatan->tglsk_jabatan)) }}</small>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- AKHIR MODAL JABATAN -->

                        <!-- AWAL MODAL PENUGASAN -->
                        <div class="modal fade" id="modal-xl2" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <div class="col-xl-6">
                                            <h4 class="modal-title"><strong>Riwayat Penugasan</strong></h4>
                                            <strong>
                                            </strong>
                                        </div><strong>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </strong>
                                    </div><strong>
                                        <div class="modal-body">
                                            <div class="card card-outline">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            Nama :
                                                            &nbsp;&nbsp;<strong>{{ $tbl_marboutID->nama_user }}</strong>
                                                        </div>
                                                    </div><br>
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: auto;">No</th>
                                                                <th style="width: auto;">Tempat</th>
                                                                <th style="width: auto;">Tahun</th>
                                                                <th style="width: auto;">Lama</th>
                                                                <th style="width: auto;">Keterangan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($tbl_penugasanID as $penugasan)
                                                                <tr>
                                                                    <td><small>{{ $loop->iteration }}</small></td>
                                                                    <td><small>{{ $penugasan->tempat_penugasan }}</small>
                                                                    </td>
                                                                    <td><small>{{ $penugasan->tahun_penugasan }}</small>
                                                                    </td>
                                                                    <td><small>{{ $penugasan->lama_penugasan }}</small>
                                                                    </td>
                                                                    <td><small>{{ $penugasan->keterangan_penugasan }}</small>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-primary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- AKHIR  PENUGASAN -->

                        <!-- AWAL MODAL SEMINAR -->
                        <div class="modal fade" id="modal-xl3" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <div class="col-xl-6">
                                            <h4 class="modal-title"><strong>Riwayat Seminar</strong></h4>

                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card card-outline">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        Nama :
                                                        &nbsp;&nbsp;<strong>{{ $tbl_marboutID->nama_user }}</strong>
                                                    </div>
                                                </div><br>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: auto;">No</th>
                                                            <th style="width: auto;">Foto</th>
                                                            <th style="width: auto;">Seminar</th>
                                                            <th style="width: auto;">Lokasi</th>
                                                            <th style="width: auto;">Penyelenggara</th>
                                                            <th style="width: auto;">Tgl Seminar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($tbl_seminarID as $seminar)
                                                            <tr>
                                                                <td><small>{{ $loop->iteration }}</small></td>
                                                                <td class="text-center">
                                                                    @php
                                                                        $path = Storage::url('uploads/marbout/seminar/' . $seminar->file_seminar);
                                                                    @endphp

                                                                    @if (empty($seminar->file_seminar))
                                                                        <img src="{{ asset('adminlte/img/nophoto.png') }}"
                                                                            width="80px">
                                                                    @else
                                                                        <img src="{{ $path }}" width="40px">
                                                                    @endif
                                                                </td>
                                                                <td><small>{{ $seminar->nama_seminar }}</small></td>
                                                                <td><small>{{ $seminar->tempat_seminar }}</small>
                                                                </td>
                                                                <td><small>{{ $seminar->penyelenggara_seminar }}</small>
                                                                </td>
                                                                <td><small>{{ date('d-m-Y', strtotime($seminar->tgl_seminar)) }}</small>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-primary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- AKHIR  TAB SEMINAR -->

                        <!-- AWAL MODAL PENGHARGAAN -->
                        <div class="modal fade" id="modal-xl4" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <div class="col-xl-6">
                                            <h4 class="modal-title"><strong>Riwayat
                                                    Penghargaan</strong></h4><strong>
                                            </strong>
                                        </div><strong>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>

                                            </button>
                                        </strong>
                                    </div><strong>
                                        <div class="modal-body">
                                            <div class="card card-outline">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            Nama :
                                                            &nbsp;&nbsp;<strong>{{ $tbl_marboutID->nama_user }}</strong>
                                                        </div>
                                                    </div><br>
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: auto;">No</th>
                                                                <th style="width: auto;">Foto</th>
                                                                <th style="width: auto;">Nama</th>
                                                                <th style="width: auto;">Tahun</th>
                                                                <th style="width: auto;">Instansi Pemberi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($tbl_penghargaanID as $penghargaan)
                                                                <tr>
                                                                    <td><small>{{ $loop->iteration }}</small></td>
                                                                    <td class="text-center">
                                                                        @php
                                                                            $path = Storage::url('uploads/marbout/penghargaan/' . $penghargaan->file_penghargaan);
                                                                        @endphp

                                                                        @if (empty($penghargaan->file_penghargaan))
                                                                            <img src="{{ asset('adminlte/img/nophoto.png') }}"
                                                                                width="80px">
                                                                        @else
                                                                            <img src="{{ $path }}"
                                                                                width="40px">
                                                                        @endif
                                                                    </td>
                                                                    <td><small>{{ $penghargaan->nama_penghargaan }}</small>
                                                                    </td>
                                                                    <td><small>{{ $penghargaan->tahun_penghargaan }}</small>
                                                                    </td>
                                                                    <td><small>{{ $penghargaan->instansi_penghargaan }}</small>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-primary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- AKHIR  TAB PENGHARGAAN -->

                        <!-- AWAL MODAL PELANGGARAN -->
                        <div class="modal fade" id="modal-xl5" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <div class="col-xl-6">
                                            <h4 class="modal-title"><strong>Riwayat
                                                    Penghargaan</strong>
                                            </h4>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card card-outline">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        Nama :
                                                        &nbsp;&nbsp;<strong>{{ $tbl_marboutID->nama_user }}</strong>
                                                    </div>
                                                </div><br>
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: auto;">No</th>
                                                            <th style="width: auto;">Foto</th>
                                                            <th style="width: auto;">Nama</th>
                                                            <th style="width: auto;">Nomor_Tgl SP</th>
                                                            <th style="width: auto;">Keterangan</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($tbl_pelanggaranID as $pelanggaran)
                                                            <tr>
                                                                <td><small>{{ $loop->iteration }}</small></td>
                                                                <td class="text-center">
                                                                    @php
                                                                        $path = Storage::url('uploads/marbout/pelanggaran/' . $pelanggaran->file_pelanggaran);
                                                                    @endphp

                                                                    @if (empty($pelanggaran->file_pelanggaran))
                                                                        <img src="{{ asset('adminlte/img/nophoto.png') }}"
                                                                            width="80px">
                                                                    @else
                                                                        <img src="{{ $path }}" width="40px">
                                                                    @endif
                                                                </td>
                                                                <td><small>{{ $pelanggaran->nama_pelanggaran }}</small>
                                                                </td>
                                                                <td><small>{{ $pelanggaran->no_pelanggaran }}/{{ date('d-m-Y', strtotime($pelanggaran->tgl_pelanggaran)) }}</small>
                                                                </td>
                                                                <td><small>{{ $pelanggaran->keterangan_pelanggaran }}</small>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-primary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- AKHIR  TAB PELANGGARAN -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
