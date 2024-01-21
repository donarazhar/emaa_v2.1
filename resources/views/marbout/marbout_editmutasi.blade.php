<div class="container-fluid">
    <div class="box box-primary box-solid">
        <div class="card card-dark mt-2">
            <div class="card-header mb-5">
                <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data</i>
            </div>
            <div class="box-body">
                <form action="marbout_updatemutasi/{{ $tbl_mutasiID->id_mutasi }}" enctype="multipart/form-data"
                    method="post" accept-charset="utf-8">
                    @csrf
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <div class="form-group row">
                                <label for="namamarbout" class="col-lg-4 col-form-label ">Nama
                                    Marbout</label>
                                <div class="col-lg-8">
                                    <input id="idmarbout" class="form-control" name="idmarbout"
                                        value="{{ $tbl_mutasiID->nama_user }}" readonly>
                                    </input>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group row">
                                <label for="jenismutasi" class="col-lg-4 col-form-label ">Jenis
                                    Mutasi</label>
                                <div class="col-lg-8">
                                    <select name="jenismutasi" class="default-select2 form-control">
                                        <option value="{{ $tbl_mutasiID->jenis_mutasi }}">
                                            {{ $tbl_mutasiID->jenis_mutasi }}</option>
                                        <option value="Masuk">Masuk</option>
                                        <option value="Keluar">Keluar</option>
                                        <option value="Pindah Antar Instansi">Pindah Antar Instansi
                                        </option>
                                        <option value="Pensiun">Pensiun</option>
                                        <option value="Wafat">Wafat</option>
                                        <option value="Kenaikan Pangkat">Kenaikan Pangkat</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <div class="form-group row">
                                <label for="noskmutasi" class="col-lg-4 col-form-label">No SK
                                    Mutasi</label>
                                <div class="col-lg-8">
                                    <input name="noskmutasi" type="text" class="form-control" id="noskmutasi"
                                        value="{{ $tbl_mutasiID->nosk_mutasi }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group row">
                                <label for="tglskmutasi" class="col-lg-4 col-form-label">Tanggal
                                    SK</label>
                                <div class="col-lg-8">
                                    <input name="tglskmutasi" type="date" class="form-control text-left"
                                        id="tglskmutasi"
                                        value="{{ date('d-m-Y', strtotime($tbl_mutasiID->tglsk_mutasi)) }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="form-group row">
                                <label for="keteranganmutasi" class="col-lg-2 col-form-label">Keterangan</label>
                                <div class="col-lg-10">
                                    <input name="keteranganmutasi" type="text" class="form-control"
                                        id="keteranganmutasi" value="{{ $tbl_mutasiID->keterangan_mutasi }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="form-group row">
                                <label for="foto" class="col-lg-2 col-form-label">File
                                    SK
                                    Mutasi</label>
                                <div class="col-lg-6">
                                    <input type="file" class="form-control" name="foto"
                                        value="{{ $tbl_mutasiID->filesk_mutasi }}" accept="image/*"
                                        placeholder="Pas Photo" class="form-control" id="fileInput"
                                        onchange="previewFile()">
                                </div>
                                <div class="col-lg-6">
                                    <!-- Menampilkan pratinjau gambar jika sudah ada -->
                                    @if ($tbl_mutasiID->filesk_mutasi)
                                        <img id="previewExisting" style="width: 120px; margin-top:10px;"
                                            src="{{ asset('storage/uploads/marbout/mutasi/' . $tbl_mutasiID->filesk_mutasi) }}" />
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{ asset('adminlte/img/preview.png') }}" alt="Preview" id="previewImage"
                                        style="width: 120px; margin-top:10px;">
                                </div>

                                <script>
                                    function previewFile() {
                                        var previewImage = document.getElementById('previewImage');
                                        var fileInput = document.getElementById('fileInput');
                                        var file = fileInput.files[0];

                                        var reader = new FileReader();

                                        reader.onloadend = function() {
                                            previewImage.src = reader.result;
                                        };

                                        if (file) {
                                            reader.readAsDataURL(file);
                                        } else {
                                            previewImage.src = "";
                                        }

                                        // Menampilkan pratinjau gambar yang sudah ada (jika ada)
                                        var previewExisting = document.getElementById('previewExisting');
                                        if (previewExisting) {
                                            previewExisting.src = "{{ asset('storage/uploads/marbout/mutasi/' . $tbl_mutasiID->filesk_mutasi) }}";
                                        }
                                    }
                                </script>
                                <div class="col-lg-4 mt-5">
                                    <button type="submit" name="save" value="save" class="btn btn-primary"><i
                                            class="fas fa-save"></i>
                                        &nbsp;Save</button>&nbsp;
                                    <a type="button" class="btn btn-default active" href=""><i
                                            class="fas fa-undo"></i>&nbsp;Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
