<div class="container-fluid">
    <div class="box box-primary box-solid">
        <div class="card card-dark">
            <div class="card-header">
                <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data Jenis Konsultasi</i>
            </div>
            <div class="box-body px-5 py-3">
                <form action="/frontlayanan_updatejeniskonsultasi/{{ $tbl_jeniskonsultasiID->id_jeniskonsultasi }}"
                    method="post" accept-charset="utf-8">
                    @csrf
                    <div class="form-group">
                        <label for="namajeniskonsultasimodal">Nama</label>
                        <input name="namajeniskonsultasimodal" type="text" class="form-control"
                            id="namajeniskonsultasimodal" placeholder="Masukkan nama"
                            value="{{ $tbl_jeniskonsultasiID->nama_jeniskonsultasi }}" required>
                    </div>
                    <div class="form-group">
                        <label for="deksripsijeniskonsultasimodal">Deskripsi</label>
                        <input name="deksripsijeniskonsultasimodal" type="text" class="form-control"
                            id="deksripsijeniskonsultasimodal" placeholder="Masukkan deskripsi"
                            value="{{ $tbl_jeniskonsultasiID->deskripsi }}" required>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
