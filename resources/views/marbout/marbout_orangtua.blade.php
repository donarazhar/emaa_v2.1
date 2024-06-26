@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="box box-primary box-solid">
            <div class="card card-dark">
                <div class="card-header">
                    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Form Data Orang Tua</i>
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
                                        <form action="/marbout_tambahdatakel3" method="post" enctype="multipart/form-data">
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
                                            <div class="form-group row">
                                                <label for="nik" class="col-sm-3 col-form-label text-left">NIK</label>
                                                <div class="col-sm-9">
                                                    <input name="nik" type="text" class="form-control" id="nik"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namadatakel" class="col-sm-3 col-form-label text-left">Nama
                                                    Orang Tua</label>
                                                <div class="col-sm-9">
                                                    <input name="namadatakel" type="text" class="form-control"
                                                        id="namadatakel" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group row">
                                                        <label for="tempat"
                                                            class="col-sm-7 col-form-label text-left">Tempat, Tgl
                                                            Lahir</label>
                                                        <div class="col-sm-5">
                                                            <input name="tempatlahir" type="text" class="form-control"
                                                                id="tempatlahir" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input name="tgllahir" type="date"
                                                                class="form-control text-left" id="tgllahir" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jenkel" class="col-sm-3 col-form-label text-left">Jenis
                                                    Kelamin</label>
                                                <div class="col-sm-9">
                                                    <select name="jenkel" class="default-select2 form-control" required>
                                                        <option value="">...</option>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pendidikan"
                                                    class="col-sm-3 col-form-label text-left">Pendidikan</label>
                                                <div class="col-sm-9">
                                                    <select name="pendidikan" class="default-select2 form-control" required>
                                                        <option value="">...</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SLTP">SLTP</option>
                                                        <option value="SLTA">SLTA</option>
                                                        <option value="D3">D3</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pekerjaan"
                                                    class="col-sm-3 col-form-label text-left">Pekerjaan</label>
                                                <div class="col-sm-9">
                                                    <input name="pekerjaan" type="text" class="form-control"
                                                        id="pekerjaan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="statushub" class="col-sm-3 col-form-label text-left">Status
                                                    Hubungan</label>
                                                <div class="col-sm-9">
                                                    <select name="statushub" class="default-select2 form-control" required>
                                                        <option value="">...</option>
                                                        <option value="Ayah Kandung">1. Ayah Kandung</option>
                                                        <option value="Ibu Kandung">2. Anak Kandung</option>
                                                        <option value="Ayah Sambung">3. Ayah Sambung</option>
                                                        <option value="Ibu Sambung">4. Anak Sambung</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="foto" class="col-sm-3 col-form-label text-left">Pas
                                                    Photo</label>
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
