<div class="container-fluid">
    <div class="box box-primary box-solid">
        <div class="card card-dark">
            <div class="card-header">
                <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data Kategori Layanan</i>
            </div>
            <div class="box-body px-5 py-3">
                <form action="frontlayanan_updatekategorilayanan/{{ $tbl_kategorilayananID->id_kategorilayanan }}"
                    method="post" accept-charset="utf-8">
                    @csrf
                    <div class="form-group">
                        <label for="namakategorilayananmodal">Nama</label>
                        <input name="namakategorilayananmodal" type="text" class="form-control"
                            id="namakategorilayananmodal" placeholder="Masukkan nama"
                            value="{{ $tbl_kategorilayananID->nama_kategorilayanan }}" required>
                    </div>
                    <div class="form-group">
                        <label for="deksripsikategorilayananmodal">Deskripsi</label>
                        <input name="deksripsikategorilayananmodal" type="text" class="form-control"
                            id="deksripsikategorilayananmodal" placeholder="Masukkan deskripsi"
                            value="{{ $tbl_kategorilayananID->deskripsi }}" required>
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
