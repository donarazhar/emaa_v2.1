@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="box box-primary box-solid">
            <div class="card card-dark">
                <div class="card-header">
                    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Form Data Penguasaan Bahasa</i>
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
                                        <form action="/marbout_tambahbahasa" method="post" accept-charset="utf-8">
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
                                                <label for="jenisbahasa" class="col-sm-3 col-form-label text-left">Jenis
                                                    Bahasa</label>
                                                <div class="col-sm-9">
                                                    <select name="jenisbahasa" class="default-select2 form-control">
                                                        <option value="">...</option>
                                                        <option value="Asing">Asing</option>
                                                        <option value="Daerah">Daerah</option>
                                                        <option value="Nasional">Nasional</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bahasa"
                                                    class="col-sm-3 col-form-label text-left">Bahasa</label>
                                                <div class="col-sm-9">
                                                    <input name="bahasa" type="text" class="form-control"
                                                        id="bahasa">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kemampuan"
                                                    class="col-sm-3 col-form-label text-left">Kemampuan</label>
                                                <div class="col-sm-9">
                                                    <select name="kemampuan" class="default-select2 form-control">
                                                        <option value="">...</option>
                                                        <option value="Aktif">Aktif</option>
                                                        <option value="Pasif">Pasif</option>
                                                    </select>
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
