<div class="card card-header bg-dark">
    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Mengedit Data Sertifikat</i>
</div>
<div class="box-body px-5 py-3">
    <form action="/frontlayanan_updatedatapengislaman/{{ $tbl_pengislamanID->id_sp }}" method="post"
        accept-charset="utf-8">
        @csrf
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nospmodal">No Sertifikat</label>
                        <input name="nospmodal" type="text" class="form-control" id="nospmodal"
                            value="{{ $tbl_pengislamanID->no_sp }}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="jamspmodal">Jam</label>
                        <input name="jamspmodal" type="text" class="form-control" id="jamspmodal"
                            value="{{ $tbl_pengislamanID->jam_sp }}"required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="harispmodal">Hari</label>
                        <select id="harispmodal" class="form-control" name="harispmodal" required>
                            <option value="{{ $tbl_pengislamanID->hari_sp }}">{{ $tbl_pengislamanID->hari_sp }}</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Ahad">Ahad</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tglspmodal">Tgl</label>
                        <input name="tglspmodal" type="text" class="form-control" id="tglspmodal"
                            value="{{ $tbl_pengislamanID->tgl_sp }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="namaspmodal">Nama Lengkap</label>
                        <input name="namaspmodal" type="text" class="form-control" id="namaspmodal"
                            value="{{ $tbl_pengislamanID->nama_sp }}" required>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="jenkelspmodal">Jenis Kelamin</label>
                        <select id="jenkelspmodal" class="form-control" name="jenkelspmodal">
                            <option value="{{ $tbl_pengislamanID->jenkel_sp }}">{{ $tbl_pengislamanID->jenkel_sp }}
                            </option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="ttlspmodal">Tempat &amp; Tgl Lahir</label>
                        <input name="ttlspmodal" type="text" class="form-control" id="ttlspmodal"
                            value="{{ $tbl_pengislamanID->ttl_sp }}" required>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="agamasemulaspmodal">Agama Semula</label>
                        <select id="agamasemulaspmodal" class="form-control" name="agamasemulaspmodal" required>
                            <option value="{{ $tbl_pengislamanID->agamasemula_sp }}">
                                {{ $tbl_pengislamanID->agamasemula_sp }}</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Khonghucu">Khonghucu</option>
                            <option value="Atheis">Atheis</option>
                            <option value="-">Tidak ada</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="alamatspmodal">Alamat Jalan</label>
                <input name="alamatspmodal" type="text" class="form-control" id="alamatspmodal"
                    value="{{ $tbl_pengislamanID->alamat_sp }}" required>
            </div>
            <div class="form-group">
                <label for="alamat2spmodal">Kelurahan / Kecamatan / Provinsi
                </label>
                <input name="alamat2spmodal" type="text" class="form-control" id="alamat2spmodal"
                    value="{{ $tbl_pengislamanID->alamat2_sp }}" required>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pekerjaanspmodal">Pekerjaan</label>
                        <input name="pekerjaanspmodal" type="text" class="form-control" id="pekerjaanspmodal"
                            value="{{ $tbl_pengislamanID->pekerjaan_sp }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="saksispmodal">Saksi Saksi</label>
                        <input name="saksispmodal" type="text" class="form-control" id="saksispmodal"
                            value="{{ $tbl_pengislamanID->saksi_sp }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="namabaruspmodal">Nama Baru Muallaf
                            <small>*boleh tidak diisi</small> </label>
                        <input name="namabaruspmodal" type="text" class="form-control" id="namabaruspmodal"
                            value="{{ $tbl_pengislamanID->namabaru_sp }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="saksi2spmodal" type="text" class="form-control" id="saksi2spmodal"
                            value="{{ $tbl_pengislamanID->saksi2_sp }}" required>
                    </div>
                    <div class="form-group">
                        <input name="saksi3spmodal" type="text" class="form-control" id="saksi3spmodal"
                            value="{{ $tbl_pengislamanID->saksi3_sp }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="alasanspmodal">Alasan Memeluk Islam</label>
                        <input name="alasanspmodal" type="text" class="form-control" id="alasanspmodal"
                            value="{{ $tbl_pengislamanID->alasan_sp }}" required>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="imamspmodal">Imam/Takmir</label>
                        <select id="imamspmodal" class="form-control" name="imamspmodal">
                            <option value="{{ $tbl_pengislamanID->id_imam }}">{{ $tbl_pengislamanID->nama_imam }}
                            </option>
                            @foreach ($tbl_imam as $imam)
                                <option value="{{ $imam->id_imam }}">{{ $imam->nama_imam }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="nohpspmodal">No Handphone</label>
                        <input name="nohpspmodal" type="text" class="form-control" id="nohpspmodal"
                            value="{{ $tbl_pengislamanID->nohp_sp }}" required>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="emailspmodal">Email</label>
                        <input name="emailspmodal" type="text" class="form-control" id="emailspmodal"
                            value="{{ $tbl_pengislamanID->email_sp }}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tglmasehispmodal">Tgl Masehi</label>
                        <input name="tglmasehispmodal" type="text" class="form-control" id="tglmasehispmodal"
                            value="{{ $tbl_pengislamanID->tglmasehi_sp }}"required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tahunmasehispmodal">Tahun Masehi</label>
                        <select id="tahunmasehispmodal" class="form-control" name="tahunmasehispmodal" required>
                            <option value="{{ $tbl_pengislamanID->tahunmasehi_sp }}">
                                {{ $tbl_pengislamanID->tahunmasehi_sp }}</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tglhijriyahspmodal">Tgl Hijriyah</label>
                        <input name="tglhijriyahspmodal" type="text" class="form-control" id="tglhijriyahspmodal"
                            value="{{ $tbl_pengislamanID->tglhijriyah_sp }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tahunhijriyahspmodal">Tahun Hijriyah</label>
                        <select id="tahunhijriyahspmodal" class="form-control" name="tahunhijriyahspmodal" required>
                            <option value="{{ $tbl_pengislamanID->tahunhijriyah_sp }}">
                                {{ $tbl_pengislamanID->tahunhijriyah_sp }}</option>
                            <option value="1442">1442</option>
                            <option value="1443">1443</option>
                            <option value="1444">1444</option>
                            <option value="1445">1445</option>
                            <option value="1446">1446</option>
                            <option value="1447">1447</option>
                            <option value="1448">1448</option>
                            <option value="1449">1449</option>
                            <option value="1450">1450</option>
                            <option value="1451">1451</option>
                            <option value="1452">1452</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="jenispengislamanmodal">Jenis Pengislaman (WNA/WNI)</label>
                        <select id="jenispengislamanmodal" class="form-control" name="jenispengislamanmodal"
                            required>
                            <option value="{{ $tbl_pengislamanID->id_jenispengislaman }}">
                                {{ $tbl_pengislamanID->nama_jenispengislaman }}</option>
                            @foreach ($tbl_jenispengislaman as $jenispengislaman)
                                <option value="{{ $jenispengislaman->id_jenispengislaman }}">
                                    {{ $jenispengislaman->nama_jenispengislaman }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
