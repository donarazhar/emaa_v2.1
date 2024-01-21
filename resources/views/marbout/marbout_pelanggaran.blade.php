@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="box box-primary box-solid">
            <div class="card card-dark">
                <div class="card-header">
                    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Form Data Pendidikan</i>
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
                                <div class="col-lg-10">
                                    <div class="modal-body">
                                        <form action="/marbout_tambahpelanggaran" enctype="multipart/form-data"
                                            method="post" accept-charset="utf-8">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="namamarbout" class="col-lg-3 col-form-label text-left">Nama
                                                    Marbout</label>
                                                <div class="col-lg-9">
                                                    <select id="idmarbout" class="form-control" name="idmarbout" required>
                                                        <option value="">...</option>
                                                        @foreach ($tbl_marbout as $marbout)
                                                            <option value="{{ $marbout->id_marbout }}">
                                                                {{ $marbout->nama_user }} - {{ $marbout->nip }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="namapelanggaran" class="col-lg-3 col-form-label text-left">Jenis
                                                    Hukuman</label>
                                                <div class="col-lg-9">
                                                    <select name="namapelanggaran" class="default-select2 form-control">
                                                        <option value="">...</option>
                                                        <option value="Teguran Lisan">Teguran Lisan</option>
                                                        <option value="Teguran Tertulis 1">Teguran Tertulis 1</option>
                                                        <option value="Teguran Tertulis 2">Teguran Tertulis 2</option>
                                                        <option value="Tunda Kenaikan Berkala">Tunda Kenaikan Berkala
                                                        </option>
                                                        <option value="Tunda Kenaikan Pangkat">Tunda Kenaikan Pangkat
                                                        </option>
                                                        <option value="Teguran Tertulis 3">Teguran Tertulis 3</option>
                                                        <option value="Pemberhentian">Pemberhentian</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="form-group row">
                                                        <label for="nomorpelanggaran"
                                                            class="col-lg-7 col-form-label text-left">Nomor &amp; Tanggal
                                                            Hukuman</label>
                                                        <div class="col-lg-5">
                                                            <input name="nomorpelanggaran" type="text"
                                                                class="form-control" id="nomorpelanggaran">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                            <input name="tglpelanggaran" type="date"
                                                                class="form-control text-left" id="tglpelanggaran">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="keteranganpelanggaran"
                                                    class="col-lg-3 col-form-label text-left">Keterangan</label>
                                                <div class="col-lg-9">
                                                    <input name="keteranganpelanggaran" type="text" class="form-control"
                                                        id="keteranganpelanggaran">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="foto" class="col-sm-3 col-form-label text-left">File
                                                    SK Pelanggaran</label>
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
                                                <label class="col-lg-3 col-form-label text-left"></label>
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
