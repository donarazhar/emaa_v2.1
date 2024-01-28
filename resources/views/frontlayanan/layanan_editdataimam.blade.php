<div class="container-fluid">
    <div class="box box-primary box-solid">
        <div class="card card-dark">
            <div class="card-header">
                <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data Imam</i>
            </div>
            <div class="box-body px-5 py-3">
                <form action="/frontlayanan_updatedataimam/{{ $tbl_imamID->id_imam }}" method="post"
                    accept-charset="utf-8">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="namamodalimam">Nama Imam</label>
                            <input type="text" class="form-control" id="namamodalimam" name="namamodalimam"
                                value="{{ $tbl_imamID->nama_imam }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="nohpmodalimam">No Handphone</label>
                            <input class="form-control" name="nohpmodalimam" type="text" id="nohpmodalimam"
                                value="{{ $tbl_imamID->nohp_imam }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keteranganmodalimam">Keterangan</label>
                        <input type="text" class="form-control" id="keteranganmodalimam" name="keteranganmodalimam"
                            value="{{ $tbl_imamID->keterangan }}" required>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
