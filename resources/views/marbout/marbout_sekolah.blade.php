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
                                        <form action="/marbout_tambahsekolah" method="post">
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
                                                <label for="tingkat"
                                                    class="col-sm-3 col-form-label text-left">Tingkat</label>
                                                <div class="col-sm-9">
                                                    <input name="tingkat" type="text" class="form-control" id="tingkat"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namasekolah" class="col-sm-3 col-form-label text-left">Nama
                                                    Sekolah/Universitas</label>
                                                <div class="col-sm-9">
                                                    <input name="namasekolah" type="text" class="form-control"
                                                        id="namasekolah" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lokasi"
                                                    class="col-sm-3 col-form-label text-left">Lokasi</label>
                                                <div class="col-sm-9">
                                                    <input name="lokasi" type="text" class="form-control" id="lokasi"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jurusan"
                                                    class="col-sm-3 col-form-label text-left">Jurusan</label>
                                                <div class="col-sm-9">
                                                    <input name="jurusan" type="text" class="form-control" id="jurusan"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group row">
                                                        <label for="nomorijazah"
                                                            class="col-sm-7 col-form-label text-left">Nomor
                                                            &amp; Tgl Ijazah</label>
                                                        <div class="col-sm-5">
                                                            <input name="nomorijazah" type="text" class="form-control"
                                                                id="nomorijazah" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input name="tglijazah" type="date"
                                                                class="form-control text-left" id="tglijazah" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namakepsek" class="col-sm-3 col-form-label text-left">Nama
                                                    Kepsek/Rektor</label>
                                                <div class="col-sm-9">
                                                    <input name="namakepsek" type="text" class="form-control"
                                                        id="namakepsek" required>
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
