<div class="card card-header bg-dark">
    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data Surat</i>
</div>
<div class="box-body px-5">
    <form action="/front_updatedatasurat/{{ $tbl_datasuratID->id_transaksisurat }}" method="post" accept-charset="utf-8">
        @csrf
        <div class="row mt-5">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="no_modaltransaksisurat">No Surat</label>
                        <input type="text" class="form-control" id="no_modaltransaksisurat"
                            name="no_modaltransaksisurat" value="{{ $tbl_datasuratID->no_transaksisurat }}" required>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="tglmodaltransaksisurat">Tgl Surat</label>
                        <input class="form-control" name="tglmodaltransaksisurat" type="date"
                            id="tglmodaltransaksisurat" value="{{ $tbl_datasuratID->tgl_masuksurat }}" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="perihalmodal">Perihal</label>
            <input type="text" class="form-control" id="perihalmodal" name="perihalmodal"
                value="{{ $tbl_datasuratID->perihal }}" required>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="idkategorimodal">Kategori</label>
                        <select class="form-control" name="idkategorimodal" required>
                            <option value="{{ $tbl_datasuratID->id_kategori }}">
                                {{ $tbl_datasuratID->nama_kategori }}</option>
                            @foreach ($tbl_kategori as $kategori)
                                <option value="{{ $kategori->id_kategori }}">
                                    {{ $kategori->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="idasalsuratmodal">Asal Surat</label>
                        <select class="form-control" name="idasalsuratmodal" required>
                            <option value="{{ $tbl_datasuratID->id_asalsurat }}">
                                {{ $tbl_datasuratID->nama_asalsurat }}</option>
                            @foreach ($tbl_asalsurat as $asalsurat)
                                <option value="{{ $asalsurat->id_asalsurat }}">
                                    {{ $asalsurat->nama_asalsurat }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="suratdarimodal">Surat dari</label>
                    <input type="text" class="form-control" id="id_suratdarimodal" name="suratdarimodal"
                        value="{{ $tbl_datasuratID->suratdari }}" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="statussurat">Status</label>
                    <select class="form-control" name="statussurat" required>
                        <option value="{{ $tbl_datasuratID->status }}">
                            {{ $tbl_datasuratID->status == 1 ? 'Disposisi' : ($tbl_datasuratID->status == 2 ? 'Proses' : ($tbl_datasuratID->status == 3 ? 'Selesai' : '')) }}
                        </option>
                        <option value="1">Disposisi</option>
                        <option value="2">Proses</option>
                        <option value="3">Selesai</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
