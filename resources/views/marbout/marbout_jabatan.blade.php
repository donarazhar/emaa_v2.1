@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="box box-primary box-solid">
            <div class="card card-dark">
                <div class="card-header">
                    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Form Data Jabatan</i>
                </div>
                <div class="box-body">
                    <div class="card-body">
                        <div class="card card-dark card-outline">
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
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-sm-11">
                                    <div class="modal-body">
                                        <form action="/marbout_tambahjabatan" method="post" accept-charset="utf-8"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="namamarbout" class="col-sm-3 col-form-label text-left">Nama
                                                    Marbout</label>
                                                <div class="col-sm-9">
                                                    <select id="idmarbout" class="form-control" name="idmarbout" required>
                                                        <option value="">...</option>
                                                        @foreach ($tbl_marbout as $marbout)
                                                            <option value="{{ $marbout->id_marbout }}">
                                                                {{ $marbout->nama_user }} - {{ $marbout->nip }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <label for="jabatan"
                                                            class="col-sm-6 col-form-label text-left">Jabatan</label>
                                                        <div class="col-sm-6">
                                                            <select id="namajabatan" class="form-control" name="namajabatan"
                                                                required>
                                                                <option value="">...</option>
                                                                @foreach ($tbl_katjabatan as $jabatan)
                                                                    <option value="{{ $jabatan->id_katjabatan }}">
                                                                        {{ $jabatan->namajabatan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group row">
                                                        <label for="jabatan"
                                                            class="col-sm-4 col-form-label text-left"></label>
                                                        <div class="col-sm-6">
                                                            <button type="button" class="btn btn-warning btn-sm btn-flat"
                                                                data-toggle="modal" data-target="#modal-jabatan">
                                                                <i class=" fa fa-plus"></i>&nbsp;&nbsp;Add Jabatan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <label for="eselon"
                                                            class="col-sm-6 col-form-label text-left">Eselon</label>
                                                        <div class="col-sm-6">
                                                            <select id="namaeselon" class="form-control" name="namaeselon"
                                                                required>
                                                                <option value="">...</option>
                                                                @foreach ($tbl_kateselon as $eselon)
                                                                    <option value="{{ $eselon->id_kateselon }}">
                                                                        {{ $eselon->namaeselon }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group row">
                                                        <label for="eselon"
                                                            class="col-sm-4 col-form-label text-left"></label>
                                                        <div class="col-sm-6">
                                                            <button type="button" class="btn btn-warning btn-sm btn-flat"
                                                                data-toggle="modal" data-target="#modal-eselon">
                                                                <i class=" fa fa-plus"></i>&nbsp;&nbsp;Add
                                                                Eselon&nbsp;&nbsp;&nbsp;</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group row">
                                                        <label for="nomorsk"
                                                            class="col-sm-7 col-form-label text-left">Nomor &amp; Tanggal
                                                            SK</label>
                                                        <div class="col-sm-5">
                                                            <input name="nomorsk" type="text" class="form-control"
                                                                id="nomorsk">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="form-group row">
                                                        <div class="col-sm-7">
                                                            <input name="tglsk" type="date"
                                                                class="form-control text-left" id="tglsk">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="foto" class="col-sm-3 col-form-label text-left">File
                                                    SK</label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control" name="foto"
                                                        accept="image/*" placeholder="Pas Photo" class="form-control"
                                                        id="fileInput" onchange="previewFile()">
                                                </div>
                                            </div>
                                            <div class="form-group mb-5">
                                                <div class="col-lg-12 text-center">
                                                    <img src="{{ asset('adminlte/img/preview.png') }}" alt="Preview"
                                                        id="previewImage" style="max-width: 100%; max-height: 200px;">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-left"></label>
                                                <div class="col-md-9">
                                                    <button type="submit" name="save" value="save"
                                                        class="btn btn-primary"><i class="fas fa-save"></i>
                                                        &nbsp;Save</button>&nbsp;
                                                    <a type="button" class="btn btn-default active" href=""><i
                                                            class="fas fa-undo"></i>&nbsp;Cancel</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal Jabatan --}}
            <div class="modal fade" id="modal-jabatan">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content ">
                        <div class="modal-header bg-dark">
                            <h6 class=" fa fa-archive modal-title">&nbsp;&nbsp;Form Data Jabatan</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="marbout_tambahkatjabatan" method="post" accept-charset="utf-8">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="jabatan">Nama Jabatan</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <input name="namakategorijabatanmodal" type="text" class="form-control"
                                            id="namakategorijabatanmodal">
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-warning fas fa-save nav-icon">&nbsp;Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="modal-body">
                                <div class="card card-outline">
                                    <div class="card-body table-responsive p-0" style="height: 150%;">
                                        <table class="table table-bordered table-head-fixed text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th style="width: auto;">No</th>
                                                    <th style="width: auto;">Nama</th>
                                                    <th style="width: auto;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tbl_katjabatan as $jabatan)
                                                    <tr>
                                                        <td><small>{{ $loop->iteration }}</small></td>
                                                        <td><small>{{ $jabatan->namajabatan }}</small></td>
                                                        <td>
                                                            <a class="fa fa-edit btn btn-xs btn-warning"
                                                                href="#"></a>
                                                            <button class="fa fa-trash-alt btn btn-xs btn-danger"
                                                                data-toggle="modal" data-target="#"></button>
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

            {{-- Modal Eselon --}}
            <div class="modal fade" id="modal-eselon">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content ">
                        <div class="modal-header bg-dark">
                            <h6 class=" fa fa-archive modal-title">&nbsp;&nbsp;Form Data Jabatan</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="/marbout_tambahkateselon" method="post" accept-charset="utf-8">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="jabatan">Nama Eselon</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <input name="namakategorieselonmodal" type="text" class="form-control"
                                            id="namakategorieselonmodal">
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-warning fas fa-save nav-icon">&nbsp;Simpan</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <div class="card card-outline">
                                        <div class="card-body table-responsive p-0" style="height: 150%;">
                                            <table class="table table-bordered table-head-fixed text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width: auto;">No</th>
                                                        <th style="width: auto;">Nama</th>
                                                        <th style="width: auto;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tbl_kateselon as $eselon)
                                                        <tr>
                                                            <td><small>{{ $loop->iteration }}</small></td>
                                                            <td><small>{{ $eselon->namaeselon }}</small></td>
                                                            <td>
                                                                <a class="fa fa-edit btn btn-xs btn-warning"
                                                                    href="#"></a>
                                                                <button class="fa fa-trash-alt btn btn-xs btn-danger"
                                                                    data-toggle="modal" data-target="#"></button>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @push('myscript')
            <script>
                function previewFile() {
                    var preview = document.getElementById('previewImage');
                    var fileInput = document.getElementById('fileInput');
                    var file = fileInput.files[0];

                    var reader = new FileReader();

                    reader.onloadend = function() {
                        preview.src = reader.result;
                    };

                    if (file) {
                        reader.readAsDataURL(file);
                    } else {
                        preview.src = "";
                    }
                }
            </script>
        @endpush
