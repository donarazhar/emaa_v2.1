<div class="card card-header bg-dark">
    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data Jenis Pengislaman</i>
</div>
<div class="box-body px-5 py-3">
    <form action="/frontlayanan_updatejenispengislaman/{{ $tbl_jenispengislamanID->id_jenispengislaman }}" method="post"
        accept-charset="utf-8">
        @csrf
        <div class="form-group">
            <label for="namajenispengislamanmodal">Nama</label>
            <input name="namajenispengislamanmodal" type="text" class="form-control" id="namajenispengislamanmodal"
                placeholder="Masukkan nama" value="{{ $tbl_jenispengislamanID->nama_jenispengislaman }}" required>
        </div>
        <div class="form-group">
            <label for="deksripsijenispengislamanmodal">Deskripsi</label>
            <input name="deksripsijenispengislamanmodal" type="text" class="form-control"
                id="deksripsijenispengislamanmodal" placeholder="Masukkan deskripsi"
                value="{{ $tbl_jenispengislamanID->deskripsi }}" required>
        </div>

        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
