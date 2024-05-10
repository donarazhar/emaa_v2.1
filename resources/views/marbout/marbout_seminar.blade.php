@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="box box-primary box-solid">
            <div class="card card-dark">
                <div class="card-header">
                    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Form Data Seminar</i>
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
                                <div class="col-sm-10">
                                    <div class="modal-body">
                                        <form action="marbout_tambahseminar" enctype="multipart/form-data" method="post"
                                            accept-charset="utf-8">
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
                                                <label for="namaseminar" class="col-sm-3 col-form-label text-left">Nama
                                                    Seminar</label>
                                                <div class="col-sm-9">
                                                    <input name="namaseminar" type="text" class="form-control"
                                                        id="namaseminar">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tempatseminar" class="col-sm-3 col-form-label text-left">Tempat
                                                    Seminar</label>
                                                <div class="col-sm-9">
                                                    <input name="tempatseminar" type="text" class="form-control"
                                                        id="tempatseminar">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="penyelenggara"
                                                    class="col-sm-3 col-form-label text-left">Penyelenggara</label>
                                                <div class="col-sm-9">
                                                    <input name="penyelenggara" type="text" class="form-control"
                                                        id="penyelenggara">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tglseminar" class="col-sm-3 col-form-label text-left">Tanggal
                                                    Seminar</label>
                                                <div class="col-sm-9">
                                                    <input name="tglseminar" type="date" class="form-control text-left"
                                                        id="tglseminar">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="foto" class="col-sm-3 col-form-label text-left">File
                                                    Sertifikat</label>
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
