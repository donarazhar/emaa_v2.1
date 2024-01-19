<div class="container-fluid">
    <div class="box box-primary box-solid">
        <div class="card card-dark mt-2">
            <div class="card-header">
                <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data</i>
            </div>
            <div class="box-body">
                <form action="/marbout_update/{{ $tbl_marbout->id_marbout }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="card card-outline">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="namamarbout" class="col-lg-3 col-form-label text-left">Nama
                                                Lengkap</label>
                                            <div class="col-lg-9">
                                                <input type="text" id="namauser" class="form-control"
                                                    name="namauser" value=" {{ $tbl_marbout->nama_user }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="unitkerja" class="col-lg-3 col-form-label text-left">Unit
                                                Kerja</label>
                                            <div class="col-lg-9">
                                                <select id="id_unitkerja" class="form-control" name="id_unitkerja"
                                                    required>
                                                    <option value="{{ $tbl_marbout->id_unitkerja }}">
                                                        {{ $tbl_marbout->nama_unitkerja }}</option>
                                                    @foreach ($tbl_unitkerja as $unit)
                                                        <option value="{{ $unit->id_unitkerja }}">
                                                            {{ $unit->nama_unitkerja }}</option>
                                                    @endforeach
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nip" class="col-lg-3 col-form-label text-left">NIP</label>
                                            <div class="col-lg-9">
                                                <input name="nip" type="text" class="form-control" id="nip"
                                                    value="{{ $tbl_marbout->nip }}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="form-group row">
                                                    <label for="tempatlahir"
                                                        class="col-lg-7 col-form-label text-left">Tempat,
                                                        Tgl Lahir</label>
                                                    <div class="col-lg-5">
                                                        <input name="tempatlahir" type="text" class="form-control"
                                                            id="tempatlahir" value="{{ $tbl_marbout->tempat_lahir }}"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <input name="tgllahir" type="date"
                                                            class="form-control text-left" id="tgllahir"
                                                            value="{{ $tbl_marbout->tgl_lahir }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenkel" class="col-lg-3 col-form-label text-left">Jenis
                                                Kelamin</label>
                                            <div class="col-lg-9">
                                                <select name="jenkel" class="default-select2 form-control" required>
                                                    <option value="{{ $tbl_marbout->jenkel }}">
                                                        {{ $tbl_marbout->jenkel }}</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="goldar" class="col-lg-3 col-form-label text-left">Golongan
                                                Darah</label>
                                            <div class="col-lg-9">
                                                <select name="goldar" class="default-select2 form-control" required>
                                                    <option value="{{ $tbl_marbout->goldar }}">
                                                        {{ $tbl_marbout->goldar }}</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="O">O</option>
                                                    <option value="AB">AB</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="statusnikah" class="col-lg-3 col-form-label text-left">Status
                                                Pernikahan</label>
                                            <div class="col-lg-9">
                                                <select name="statusnikah" class="default-select2 form-control"
                                                    required>
                                                    <option value="{{ $tbl_marbout->status_nikah }}">
                                                        {{ $tbl_marbout->status_nikah }}</option>
                                                    <option value="Nikah">Nikah</option>
                                                    <option value="Belum Nikah">Belum Nikah</option>
                                                    <option value="Cerai">Cerai</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="statuskepeg" class="col-lg-3 col-form-label text-left">Status
                                                Kepegawaian</label>
                                            <div class="col-lg-9">
                                                <select name="statuskepeg" class="default-select2 form-control"
                                                    required>
                                                    <option value="{{ $tbl_marbout->status_kepeg }}">
                                                        {{ $tbl_marbout->status_kepeg }}</option>
                                                    <option value="KTY">KTY</option>
                                                    <option value="KTD">KTD</option>
                                                    <option value="Honorer">Honorer</option>
                                                    <option value="Pegawai Lepas">Pegawai Lepas
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-lg-3 col-form-label text-left">Alamat
                                                lengkap</label>
                                            <div class="col-lg-9">
                                                <textarea name="alamat" cols="20" rows="5" maxlength="255" class="form-control" required>{{ $tbl_marbout->alamat }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="foto" class="col-lg-3 col-form-label text-left">Pas
                                                Photo</label>
                                            <div class="col-lg-9">
                                                <input type="file" class="form-control" name="foto"
                                                    value="{{ $tbl_marbout->foto_user }}" accept="image/*"
                                                    placeholder="Pas Photo" class="form-control" id="fileInput"
                                                    onchange="previewFile()">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3"></div>
                                            <div class="col-lg-5 text-center">
                                                <!-- Menampilkan pratinjau gambar jika sudah ada -->
                                                @if ($tbl_marbout->foto_user)
                                                    <img id="previewExisting" style="width: 120px; margin-top:10px;"
                                                        src="{{ asset('storage/uploads/marbout/' . $tbl_marbout->foto_user) }}" />
                                                @endif
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <img src="{{ asset('adminlte/img/preview.png') }}" alt="Preview"
                                                    id="previewImage" style="width: 120px; margin-top:10px;">
                                            </div>
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
                                                    previewExisting.src = "{{ asset('storage/uploads/marbout/' . $tbl_marbout->foto_user) }}";
                                                }
                                            }
                                        </script>


                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-left"></label>
                                        <div class="col-md-9">
                                            <button type="submit" name="save" value="save"
                                                class="btn btn-primary"><i class="fas fa-save"></i>
                                                &nbsp;Update</button>&nbsp;
                                            <a type="button" class="btn btn-default active" href="/marbout_index"><i
                                                    class="fas fa-undo"></i>&nbsp;Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
