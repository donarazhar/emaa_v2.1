<div class="card card-header bg-dark">
    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data Tamu</i>
</div>
<div class="box-body px-5 py-3">
    <form action="/frontlayanan_updatedatatamu/{{ $tbl_tamuID->id_tamu }}" method="post" accept-charset="utf-8">
        @csrf
        <div class="form-group">
            <label for="namatamumodal">Nama Tamu</label>
            <input name="namatamumodal" type="text" class="form-control" id="namatamumodal"
                value="{{ $tbl_tamuID->nama_tamu }}" required>
        </div>
        <div class="form-group">
            <label for="alamattamumodal">Alamat</label>
            <input name="alamattamumodal" type="text" class="form-control" id="alamattamumodal"
                value="{{ $tbl_tamuID->alamat_tamu }}" required>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nohptamumodal">No Handphone</label>
                    <input name="nohptamumodal" type="text" class="form-control" id="nohptamumodal"
                        value="{{ $tbl_tamuID->nohp_tamu }}" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="emailtamumodal">Email</label>
                    <input name="emailtamumodal" type="text" class="form-control" id="emailtamumodal"
                        value="{{ $tbl_tamuID->email_tamu }}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="keperluantamumodal">Keperluan</label>
            <input type="text" name="keperluantamumodal" class="form-control" id="keperluantamumodal"
                value="{{ $tbl_tamuID->keperluan_tamu }}" required>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-md btn-primary">Update</button>
        </div>
    </form>
</div>
