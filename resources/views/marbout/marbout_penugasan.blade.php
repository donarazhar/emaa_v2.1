@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="box box-primary box-solid">
            <div class="card card-dark">
                <div class="card-header">
                    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Form Data Penugasan</i>
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
                                        <form action="marbout_tambahpenugasan" method="post" accept-charset="utf-8">
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
                                                <label for="tempatpenugasan"
                                                    class="col-lg-3 col-form-label text-left">Tempat Penugasan</label>
                                                <div class="col-lg-9">
                                                    <input name="tempatpenugasan" type="text" class="form-control"
                                                        id="tempatpenugasan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tahunpenugasan"
                                                    class="col-lg-3 col-form-label text-left">Tahun</label>
                                                <div class="col-lg-9">
                                                    <input name="tahunpenugasan" type="text" class="form-control"
                                                        id="tahunpenugasan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lamapenugasan" class="col-lg-3 col-form-label text-left">Lama
                                                    Penugasan</label>
                                                <div class="col-lg-9">
                                                    <input name="lamapenugasan" type="text" class="form-control"
                                                        id="lamapenugasan" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="keterangan"
                                                    class="col-lg-3 col-form-label text-left">Keterangan</label>
                                                <div class="col-lg-9">
                                                    <input name="keteranganpenugasan" type="text" class="form-control"
                                                        id="keteranganpenugasan" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-left"></label>
                                                <div class="col-lg-9">
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
