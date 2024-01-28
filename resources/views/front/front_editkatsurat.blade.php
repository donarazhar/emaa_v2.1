<div class="card card-header bg-dark">
    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data Kategori Surat</i>
</div>
<div class="box-body">
    <form action="/front_updatekatsurat/{{ $tbl_kategoriID->id_kategori }}" method="post" accept-charset="utf-8">
        @csrf
        <div class="row mt-5">
            <div class="col-lg-1"></div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label for="namakategorikatsurat">Nama Kategori</label>
                </div>
            </div>
            <div class="col-lg-7">
                <input name="namakategorikatsurat" type="text" class="form-control" id="namakategorikatsurat"
                    value="{{ $tbl_kategoriID->nama_kategori }}" required>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <button type="submit" class="btn btn-warning fas fa-save nav-icon">&nbsp;Update</button>
                </div>
            </div>
        </div>
    </form>
</div>
