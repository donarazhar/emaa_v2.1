<div class="container-fluid">
    <div class="box box-primary box-solid">
        <div class="card card-dark mt-2">
            <div class="card-header">
                <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data Asal Surat</i>
            </div>
            <div class="box-body px-5">
                <form action="/front_updateasalsurat/{{ $tbl_asalsuratID->id_asalsurat }}" method="post"
                    accept-charset="utf-8">
                    @csrf
                    <div class="row mt-5">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="kodeasalsurat">Kode Asal Surat</label>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <input name="kodeasalsurat" type="text" class="form-control" id="kodeasalsurat"
                                value="{{ $tbl_asalsuratID->kode_asalsurat }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="namaasalsurat">Nama Asal Surat</label>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <input name="namaasalsurat" type="text" class="form-control" id="namaasalsurat"
                                value="{{ $tbl_asalsuratID->nama_asalsurat }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <input name="deskripsi" type="text" class="form-control" id="deskripsi"
                                value="{{ $tbl_asalsuratID->deskripsi }}" required>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <button type="submit"
                                    class="btn btn-warning fas fa-save nav-icon">&nbsp;Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
