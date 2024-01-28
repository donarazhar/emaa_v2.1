@extends('dashboard.dash_sidebar')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="pt-2 px-3">
                                <h3 class="card-title">DATA LAYANAN</h3>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Buku Tamu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Pengislaman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Konsultasi</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">
                        
                        <div class="tab-content" id="custom-tabs-two-tabContent">
                            <!-- BUKU TAMU -->
                            <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box box-primary box-solid">
                                            <div class="box-tools box-title pull-left">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title"></h3>
                                                    <button type="button" class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#tambahbukutamu">
                                                        <i class=""></i>Tambah+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- awal /.box-header-tamu -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-primary card-outline">
                                            <div class="card card-header">
                                                <div class="card-body">
                                                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="example1_info">
                                                        <thead class="text-center">
                                                            <tr role="row"><th width="10px" class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 19.5312px;">No</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending" style="width: 99.1406px;">Nama</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Tgl: activate to sort column ascending" style="width: 47.125px;">Tgl</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Handphone: activate to sort column ascending" style="width: 85.3906px;">Handphone</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 201.328px;">Email</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Keperluan: activate to sort column ascending" style="width: 133.484px;">Keperluan</th><th width="60px" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Aksi: activate to sort column ascending" style="width: 60px;">Aksi</th></tr>
                                                        </thead>
                                                        <tbody>  
                                                                                                                     
                                                                                                                            
                                                                                                                           
                                                                                                                          
                                                                <tr class="odd">
                                                                    <td class="sorting_1">1</td>
                                                                    <td>asdasd</td>
                                                                    <td>2023-02-16</td>
                                                                    <td>asdasd</td>
                                                                    <td>asdasd</td>
                                                                    <td>asdasd</td>
                                                                    <td class="text-center inline-block">
                                                                        <button class="fa fa-edit btn btn-xs btn-warning" data-toggle="modal" data-target="#edittamu74"></button>
                                                                        <button class="fa fa-trash-alt btn btn-xs btn-danger" data-toggle="modal" data-target="#hapustamu74"></button>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 53 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <!-- MODAL tamu -->                           
                            <div class="modal fade" id="tambahbukutamu" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h6 class="far fa-envelope modal-title">&nbsp;&nbsp;Menambahkan Data</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="https://masjidagungalazhar.com/emaa/index.php/layanan/ctrdatalayanan/adddatatamu" method="post" accept-charset="utf-8">
                                            <div class="form-group">
                                                <label for="namatamumodal">Nama Tamu</label>
                                                <input name="namatamumodal" type="text" class="form-control" id="namatamumodal" placeholder="Masukkan nama anda..." required="">
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="emailtamumodal">Email</label>
                                                        <input name="emailtamumodal" type="text" class="form-control" id="emailtamumodal" placeholder="Masukkan email anda..." required="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="nohptamumodal">No Handphone</label>
                                                        <input name="nohptamumodal" type="text" class="form-control" id="nohptamumodal" placeholder="Masukkan nohp anda..." required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamattamumodal">Alamat</label>
                                                <textarea name="alamattamumodal" rows="4" type="text" class="form-control" id="alamattamumodal" placeholder="Masukkan alamat anda..." required=""></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="keperluantamumodal">Keperluan</label>
                                                <textarea name="keperluantamumodal" rows="4" type="text" class="form-control" id="keperluantamumodal" placeholder="Masukkan keperluan anda..." required=""></textarea>
                                            </div>

                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </form>                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- ADD /.modal -->
                            </div>

                            <!-- EDIT /.tamu -->
                                                            <div class="modal fade" id="edittamu74">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h6 class="far fa-edit modal-title">&nbsp;&nbsp;Mengubah Data</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="https://masjidagungalazhar.com/emaa/index.php/layanan/ctrdatalayanan/editdatatamu/74" method="post" accept-charset="utf-8">
                                                <div class="form-group">
                                                    <label for="namatamumodal">Nama Tamu</label>
                                                    <input name="namatamumodal" type="text" class="form-control" id="namatamumodal" value="asdasd" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamattamumodal">Alamat</label>
                                                    <input name="alamattamumodal" type="text" class="form-control" id="alamattamumodal" value="asdasd" required="">
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="nohptamumodal">No Handphone</label>
                                                            <input name="nohptamumodal" type="text" class="form-control" id="nohptamumodal" value="asdasd" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="emailtamumodal">Email</label>
                                                            <input name="emailtamumodal" type="text" class="form-control" id="emailtamumodal" value="asdasd" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keperluantamumodal">Keperluan</label>
                                                    <textarea name="keperluantamumodal" rows="5" class="form-control" id="keperluantamumodal">asdasd</textarea>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                </div>
                                                </form>                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- EDIT/.modal -->
                                </div>
                                    
                                   
                            <!-- HAPUS /.tamu -->
                                <div class="modal fade" id="hapustamu74">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h6 class="far fa-trash-alt modal-title">&nbsp;&nbsp;Menghapus Data</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                Anda yakin ingin menghapus <strong>asdasd</strong>...?
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                                                    <a href="https://masjidagungalazhar.com/emaa/layanan/ctrdatalayanan/hapusdatatamu/74" type="submit" class="btn btn-primary">Iya</a>
                                                </div>
                                            </div>
                                            <!-- /.tamu-content -->
                                        </div>
                                        <!-- /.tamu-dialog -->
                                    </div>
                                    <!-- EDIT/.tamu -->
                                </div>
                                                           
                                
                            <!-- PENGISLAMAN -->
                            <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="box box-primary box-solid">
                                            <div class="box-tools box-title pull-left">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title"></h3>
                                                    <button type="button" class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#tambahpengislaman">
                                                        <i class=""></i>Tambah+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- awal /.box-header-sp -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-primary card-outline">
                                            <div class="card card-header">
                                                <div class="card-body">
                                                    <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example3_length"><label>Show <select name="example3_length" aria-controls="example3" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example3_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example3"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example3" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="example3_info">
                                                        <thead class="text-center">
                                                            <tr role="row"><th width="5px" class="sorting sorting_asc" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 5px;">No</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="No SP: activate to sort column ascending" style="width: 0px;">No SP</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Nama Muallaf: activate to sort column ascending" style="width: 0px;">Nama Muallaf</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Jenkel: activate to sort column ascending" style="width: 0px;">Jenkel</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Agama Semula: activate to sort column ascending" style="width: 0px;">Agama Semula</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Imam: activate to sort column ascending" style="width: 0px;">Imam</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Aksi: activate to sort column ascending" style="width: 0px;">Aksi</th><th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;"></th></tr>
                                                        </thead>
                                                        <tbody>
                                                                                                              
                                                                                                                            
                                                                                                                            
                                                                                                                    <tr class="odd">
                                                                    <td class="sorting_1">1</td>
                                                                    <td>070/T-MAA/XII/1444.2022</td>
                                                                    <td>Radityo Aryo Pratomo</td>
                                                                    <td>Laki-Laki</td>
                                                                    <td>Katholik</td>
                                                                    <td>H. Mukhtar Ibnu, M.Pd.I</td>
                                                                    <td class="text-center inline-block">
                                                                        <button class="fa fa-edit btn btn-xs btn-warning" data-toggle="modal" data-target="#editsp113"></button>
                                                                        <button class="fa fa-trash-alt btn btn-xs btn-danger" data-toggle="modal" data-target="#hapussp113"></button>
                                                                    </td>
                                                                    <td>
                                                                        <a href="https://masjidagungalazhar.com/emaa/layanan/ctrmpdf/index/113" target="_blank" class="btn btn-xs btn-success"><i class="fa fa-print"></i></a>
                                                                    </td>

                                                                </tr>
                                                                </tbody>
                                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example3_info" role="status" aria-live="polite">Showing 1 to 10 of 68 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example3_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example3_previous"><a href="#" aria-controls="example3" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example3" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example3" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example3" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example3" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example3" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example3" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example3" data-dt-idx="7" tabindex="0" class="page-link">7</a></li><li class="paginate_button page-item next" id="example3_next"><a href="#" aria-controls="example3" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- AKHIR PENGISLAMAN -->


                            <!-- ======================= -->
                            <!-- MODAL sp -->
                            <!-- ADD /.sp  -->
                            <div class="modal fade" id="tambahpengislaman">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h6 class="far fa-envelope modal-title">&nbsp;&nbsp;Menambahkan Data</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="https://masjidagungalazhar.com/emaa/index.php/layanan/ctrdatalayanan/adddatasp" method="post" accept-charset="utf-8">
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="nospmodal">No Sertifikat</label>
                                                            <input name="nospmodal" type="text" class="form-control" id="nospmodal" placeholder="No sertifikat..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="jamspmodal">Jam</label>
                                                            <input name="jamspmodal" type="text" class="form-control" id="jamspmodal" placeholder="WIB..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="harispmodal">Hari</label>
                                                            <select id="harispmodal" class="form-control" name="harispmodal">
                                                                <option selected="">--Pilih--</option>
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
                                                            <input name="tglspmodal" type="text" class="form-control" id="tglspmodal" placeholder="Masukkan tgl..." required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label for="namaspmodal">Nama Lengkap</label>
                                                            <input name="namaspmodal" type="text" class="form-control" id="namaspmodal" placeholder="Masukkan nama lengkap..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="jenkelspmodal">Jenis Kelamin</label>
                                                            <select id="jenkelspmodal" class="form-control" name="jenkelspmodal">
                                                                <option selected="">--Pilih--</option>
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
                                                            <input name="ttlspmodal" type="text" class="form-control" id="ttlspmodal" placeholder="Masukkan tempat lahir, tgl lahir..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="agamasemulaspmodal">Agama Semula</label>
                                                            <select id="agamasemulaspmodal" class="form-control" name="agamasemulaspmodal">
                                                                <option selected="">--Pilih--</option>
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
                                                    <input name="alamatspmodal" type="text" class="form-control" id="alamatspmodal" placeholder="Masukkan alamat jalan lengkap..." required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat2spmodal">Kelurahan / Kecamatan / Provinsi </label>
                                                    <input name="alamat2spmodal" type="text" class="form-control" id="alamat2spmodal" placeholder="Masukkan kelurahan /kecamatan / provinsi..." required="">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pekerjaanspmodal">Pekerjaan</label>
                                                            <input name="pekerjaanspmodal" type="text" class="form-control" id="pekerjaanspmodal" placeholder="Masukkan pekerjaan anda..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="saksispmodal">Saksi Saksi</label>
                                                            <input name="saksispmodal" type="text" class="form-control" id="saksispmodal" placeholder="Nama lengkap saksi pertama..." required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="namabaruspmodal">Nama Baru Muallaf <small>*boleh tidak diisi</small> </label>
                                                            <input name="namabaruspmodal" type="text" class="form-control" id="namabaruspmodal" placeholder="Masukkan nama baru jika ingin ada...">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input name="saksi2spmodal" type="text" class="form-control" id="saksi2spmodal" placeholder="Nama lengkap saksi kedua..." required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="saksi3spmodal" type="text" class="form-control" id="saksi3spmodal" placeholder="Nama lengkap saksi ketiga jika ada..." required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label for="alasanspmodal">Alasan Memeluk Islam</label>
                                                            <input name="alasanspmodal" type="text" class="form-control" id="alasanspmodal" placeholder="Masukkan alasan memeluk islam..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="imamspmodal">Imam/Takmir</label>
                                                            <select id="imamspmodal" class="form-control" name="imamspmodal">
                                                                <option value="">--Pilih--</option>
                                                                                                                                    <option value="32">H. Bukhari Muslim, SQ., MH</option>
                                                                                                                                    <option value="31">Dr. H. Yusup Hidayat, S.Ag., M.H</option>
                                                                                                                                    <option value="30">H. Risdin Zein Said</option>
                                                                                                                                    <option value="29">H. Mukhtar Ibnu, M.Pd.I</option>
                                                                                                                                    <option value="28">H. Achmad Khotib, SQ., MA</option>
                                                                                                                                    <option value="19">Dr. H. Shobahussurur, MA</option>
                                                                                                                                    <option value="18">H. Agus Nur Qowim,  SQ., M.Pd.I</option>
                                                                                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="nohpspmodal">No Handphone</label>
                                                            <input name="nohpspmodal" type="text" class="form-control" id="nohpspmodal" placeholder="Masukkan nohp anda..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label for="emailspmodal">Email</label>
                                                            <input name="emailspmodal" type="text" class="form-control" id="emailspmodal" placeholder="Masukkan email anda..." required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="tglmasehispmodal">Tgl Masehi</label>
                                                            <input name="tglmasehispmodal" type="text" class="form-control" id="tglmasehispmodal" placeholder="Tgl masehi..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="tahunmasehispmodal">Tahun Masehi</label>
                                                            <select id="tahunmasehispmodal" class="form-control" name="tahunmasehispmodal">
                                                                <option selected="">--Pilih--</option>
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
                                                            <input name="tglhijriyahspmodal" type="text" class="form-control" id="tglhijriyahspmodal" placeholder="Tgl hijriyah..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="tahunhijriyahspmodal">Tahun Hijriyah</label>
                                                            <select id="tahunhijriyahspmodal" class="form-control" name="tahunhijriyahspmodal">
                                                                <option selected="">--Pilih--</option>
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

                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                                                            </div></form>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- ADD /.modal -->
                                </div>
                                <!-- ADD /.modal SP -->
                            </div>

                                <div class="modal fade" id="hapussp113">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h6 class="far fa-trash-alt modal-title">&nbsp;&nbsp;Menghapus Data</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                Anda yakin ingin menghapus <strong>Radityo Aryo Pratomo</strong>...?
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                                                    <a href="https://masjidagungalazhar.com/emaa/layanan/ctrdatalayanan/hapusdatasp/113" type="submit" class="btn btn-primary">Iya</a>
                                                </div>
                                            </div>
                                            <!-- /.sp-content -->
                                        </div>
                                        <!-- /.sp-dialog -->
                                    </div>
                                    <!-- EDIT/.sp -->
                                </div>
                                                            
                                
                                <div class="modal fade" id="hapussp46">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h6 class="far fa-trash-alt modal-title">&nbsp;&nbsp;Menghapus Data</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                Anda yakin ingin menghapus <strong>Sarmanto Purba</strong>...?
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                                                    <a href="https://masjidagungalazhar.com/emaa/layanan/ctrdatalayanan/hapusdatasp/46" type="submit" class="btn btn-primary">Iya</a>
                                                </div>
                                            </div>
                                            <!-- /.sp-content -->
                                        </div>
                                        <!-- /.sp-dialog -->
                                    </div>
                                    <!-- EDIT/.sp -->
                                </div>
                                                        <!-- AKHIR MODAL sp -->

                            <!-- ======================= -->

                            <!-- KONSULTASI -->
                            <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="box box-primary box-solid">
                                            <div class="box-tools box-title pull-left">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title"></h3>
                                                    <button type="button" class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#tambahkonsultasi">
                                                        <i class=""></i>Tambah+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- awal /.box-header-fk -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <!-- /.card-header -->
                                            <div class="card card-primary card-outline">
                                                <div class="card card-header">
                                                    <div id="example5_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example5_length"><label>Show <select name="example5_length" aria-controls="example5" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example5_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example5"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example5" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="example5_info">
                                                        <thead class="text-center">
                                                            <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 0px;">No</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending" style="width: 0px;">Nama</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Jenis Konsultasi: activate to sort column ascending" style="width: 0px;">Jenis Konsultasi</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Konsultan: activate to sort column ascending" style="width: 0px;">Konsultan</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Tanggal: activate to sort column ascending" style="width: 0px;">Tanggal</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Jam: activate to sort column ascending" style="width: 0px;">Jam</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Aksi: activate to sort column ascending" style="width: 0px;">Aksi</th><th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;"></th></tr>
                                                        </thead>
                                                        <tbody>
                                      <tr class="odd">
                                                                    <td class="sorting_1">1</td>
                                                                    <td>Rosmiati Ali</td>
                                                                    <td>Hukum Waris</td>
                                                                    <td>H. Risdin Zein Said</td>
                                                                    <td>08 Juni 2022</td>
                                                                    <td>13.00</td>

                                                                    <td class="text-center inline-block">
                                                                        <button class="fa fa-edit btn btn-xs btn-warning" data-toggle="modal" data-target="#editfk34"></button>
                                                                        <button class="fa fa-trash-alt btn btn-xs btn-danger" data-toggle="modal" data-target="#hapusfk34"></button>
                                                                    </td>
                                                                    <td>
                                                                        <a href="https://masjidagungalazhar.com/emaa/layanan/ctrmpdf/konsultasi/34" target="_blank" class="btn btn-xs btn-success"><i class="fa fa-print"></i></a>
                                                                    </td>

                                                                </tr>
                                                                </tbody>
                                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example5_info" role="status" aria-live="polite">Showing 1 to 10 of 14 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example5_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example5_previous"><a href="#" aria-controls="example5" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example5" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example5" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="example5_next"><a href="#" aria-controls="example5" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- AKHIR KONSULTASI -->

                            <!-- ADD /.KONSULTASI  -->
                            <div class="modal fade" id="tambahkonsultasi">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h6 class=" fa fa-archive modal-title">&nbsp;&nbsp;Menambah Data</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="https://masjidagungalazhar.com/emaa/index.php/layanan/ctrdatalayanan/adddatafk" method="post" accept-charset="utf-8">
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <label for="tglfkmodal">Tgl</label>
                                                            <input name="tglfkmodal" type="text" class="form-control" id="tglfkmodal" placeholder="Masukkan tgl..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="jamfkmodal">Jam</label>
                                                            <input name="jamfkmodal" type="text" class="form-control" id="jamfkmodal" placeholder="WIB..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="harifkmodal">Hari</label>
                                                            <select id="harifkmodal" class="form-control" name="harifkmodal">
                                                                <option selected="">--Pilih--</option>
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
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-7">
                                                        <div class="form-group">
                                                            <label for="namafkmodal">Nama Lengkap</label>
                                                            <input name="namafkmodal" type="text" class="form-control" id="namafkmodal" placeholder="Masukkan nama lengkap..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <label for="jenkelfkmodal">Jenis Kelamin</label>
                                                            <select id="jenkelfkmodal" class="form-control" name="jenkelfkmodal">
                                                                <option selected="">--Pilih--</option>
                                                                <option value="Laki-Laki">Laki-Laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="ttlfkmodal">Tempat &amp; Tgl Lahir</label>
                                                            <input name="ttlfkmodal" type="text" class="form-control" id="ttlfkmodal" placeholder="Masukkan tempat lahir, tgl lahir..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="pekerjaanfkmodal">Pekerjaan</label>
                                                                <input name="pekerjaanfkmodal" type="text" class="form-control" id="pekerjaanfkmodal" placeholder="Masukkan pekerjaan anda..." required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="nohpfkmodal">No Handphone</label>
                                                            <input name="nohpfkmodal" type="text" class="form-control" id="nohpfkmodal" placeholder="Masukkan nohp anda..." required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="emailfkmodal">Email</label>
                                                            <input name="emailfkmodal" type="text" class="form-control" id="emailfkmodal" placeholder="Masukkan email anda..." required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="alamatfkmodal">Alamat Jalan</label>
                                                    <input name="alamatfkmodal" type="text" class="form-control" id="alamatfkmodal" placeholder="Masukkan alamat jalan lengkap..." required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat2fkmodal">Kelurahan / Kecamatan / Provinsi </label>
                                                    <input name="alamat2fkmodal" type="text" class="form-control" id="alamat2fkmodal" placeholder="Masukkan kelurahan /kecamatan / provinsi..." required="">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="jeniskonsultasifkmodal">Jenis Konsultasi</label>
                                                            <select id="jeniskonsultasifkmodal" class="form-control" name="jeniskonsultasifkmodal">
                                                                <option value="">--Pilih--</option>
                                                                                                                                    <option value="22">Hukum Islam</option>
                                                                                                                                    <option value="19">Rumah Tangga</option>
                                                                                                                                    <option value="18">Hukum Waris</option>
                                                                                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="imamfkmodal">Imam/Takmir</label>
                                                            <select id="imamfkmodal" class="form-control" name="imamfkmodal">
                                                                <option value="">--Pilih--</option>
                                                                                                                                    <option value="32">H. Bukhari Muslim, SQ., MH</option>
                                                                                                                                    <option value="31">Dr. H. Yusup Hidayat, S.Ag., M.H</option>
                                                                                                                                    <option value="30">H. Risdin Zein Said</option>
                                                                                                                                    <option value="29">H. Mukhtar Ibnu, M.Pd.I</option>
                                                                                                                                    <option value="28">H. Achmad Khotib, SQ., MA</option>
                                                                                                                                    <option value="19">Dr. H. Shobahussurur, MA</option>
                                                                                                                                    <option value="18">H. Agus Nur Qowim,  SQ., M.Pd.I</option>
                                                                                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsifkmodal">Deskripsi Permasalahan</label>
                                                    <textarea name="deskripsifkmodal" type="text" class="form-control" id="deskripsifkmodal" rows="5" placeholder="Masukkan deskripsi permasalahan..."></textarea>
                                                </div>

                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                                                            </div></form>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- ADD /.modal -->
                                </div>
                                <!-- ADD /.modal fk -->
                            </div>

                            <!-- EDIT /.fk -->

                                
                                                            <div class="modal fade" id="editfk21">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h6 class=" fa fa-edit modal-title">&nbsp;&nbsp;Mengedit Data</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="https://masjidagungalazhar.com/emaa/index.php/layanan/ctrdatalayanan/editdatafk/21" method="post" accept-charset="utf-8">
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <label for="tglfkmodal">Tgl</label>
                                                                <input name="tglfkmodal" type="text" class="form-control" id="tglfkmodal" value="-" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label for="jamfkmodal">Jam</label>
                                                                <input name="jamfkmodal" type="text" class="form-control" id="jamfkmodal" value="11.45" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="harifkmodal">Hari</label>
                                                                <select id="harifkmodal" class="form-control" name="harifkmodal">
                                                                    <option value="Sabtu">Sabtu</option>
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
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-7">
                                                            <div class="form-group">
                                                                <label for="namafkmodal">Nama Lengkap</label>
                                                                <input name="namafkmodal" type="text" class="form-control" id="namafkmodal" value="Iqbal Nasution" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <label for="jenkelfkmodal">Jenis Kelamin</label>
                                                                <select id="jenkelfkmodal" class="form-control" name="jenkelfkmodal">
                                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="ttlfkmodal">Tempat &amp; Tgl Lahir</label>
                                                                <input name="ttlfkmodal" type="text" class="form-control" id="ttlfkmodal" value="Jakarta, 15 September 1967" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label for="pekerjaanfkmodal">Pekerjaan</label>
                                                                    <input name="pekerjaanfkmodal" type="text" class="form-control" id="pekerjaanfkmodal" value="Pengacara" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="nohpfkmodal">No Handphone</label>
                                                                <input name="nohpfkmodal" type="text" class="form-control" id="nohpfkmodal" value="088213714781" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="emailfkmodal">Email</label>
                                                                <input name="emailfkmodal" type="text" class="form-control" id="emailfkmodal" value="-" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="alamatfkmodal">Alamat Jalan</label>
                                                        <input name="alamatfkmodal" type="text" class="form-control" id="alamatfkmodal" value="JL. Manunggal Jakarta Timur" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat2fkmodal">Kelurahan / Kecamatan / Provinsi </label>
                                                        <input name="alamat2fkmodal" type="text" class="form-control" id="alamat2fkmodal" value="Jakarta Timur" required="">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="jeniskonsultasifkmodal">Jenis Konsultasi</label>
                                                                <select id="jeniskonsultasifkmodal" class="form-control" name="jeniskonsultasifkmodal">
                                                                    <option value="19">Rumah Tangga</option>
                                                                                                                                            <option value="22">Hukum Islam</option>
                                                                                                                                            <option value="19">Rumah Tangga</option>
                                                                                                                                            <option value="18">Hukum Waris</option>
                                                                                                                                    </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="imamfkmodal">Imam/Takmir</label>
                                                                <select id="imamfkmodal" class="form-control" name="imamfkmodal">
                                                                    <option value="30">H. Risdin Zein Said</option>
                                                                                                                                            <option value="32">H. Bukhari Muslim, SQ., MH</option>
                                                                                                                                            <option value="31">Dr. H. Yusup Hidayat, S.Ag., M.H</option>
                                                                                                                                            <option value="30">H. Risdin Zein Said</option>
                                                                                                                                            <option value="29">H. Mukhtar Ibnu, M.Pd.I</option>
                                                                                                                                            <option value="28">H. Achmad Khotib, SQ., MA</option>
                                                                                                                                            <option value="19">Dr. H. Shobahussurur, MA</option>
                                                                                                                                            <option value="18">H. Agus Nur Qowim,  SQ., M.Pd.I</option>
                                                                                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="deskripsifkmodal">Deskripsi Permasalahan</label>
                                                        <textarea name="deskripsifkmodal" type="text" class="form-control" id="deskripsifkmodal" rows="5" placeholder="Masukkan deskripsi permasalahan...">-</textarea>
                                                    </div>

                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </div>
                                                                                                    </div></form>
                                                <!-- /.modal-content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            <!-- HAPUS /.fk -->
                                                            <div class="modal fade" id="hapusfk34">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h6 class=" fa fa-trash-alt modal-title">&nbsp;&nbsp;Menghapus Data</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                Anda yakin ingin menghapus <strong>Rosmiati Ali</strong>...?
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                                                    <a href="https://masjidagungalazhar.com/emaa/layanan/ctrdatalayanan/hapusdatafk/34" type="submit" class="btn btn-primary">Iya</a>
                                                </div>
                                            </div>
                                            <!-- /.fk-content -->
                                        </div>
                                        <!-- /.fk-dialog -->
                                    </div>
                                    <!-- EDIT/.fk -->
                                </div>
                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection

@push('myscript')
<script>
    $(function() {
        // Proses edit dengan AJAX
        $(".edit").click(function() {
            var id = $(this).attr('id');
            $.ajax({
                type: 'POST',
                url: '/frontlayanan_editkategorilayanan',
                cache: false,
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                success: function(respond) {
                    $('#loadeditformkategorilayanan').html(respond);
                }
            });
            $("#modal-editfrmeditkategorilayanan").modal("show");
        });
        // Proses delete dengan AJAX
        $(".delete-confirm").click(function(e) {
            var form = $(this).closest('form');
            e.preventDefault();
            Swal.fire({
                title: "Yakin Hapus Data?",
                text: "Data anda akan terhapus permanen!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire({
                        title: "Terhapus!",
                        text: "Data anda berhasil terhapus",
                        icon: "success"
                    });
                }
            });
        });

    });
</script>

<script>
    $(function() {
        // Proses edit dengan AJAX
        $(".edit2").click(function() {
            var id = $(this).attr('id2');
            $.ajax({
                type: 'POST',
                url: '/frontlayanan_editjeniskonsultasi',
                cache: false,
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                success: function(respond) {
                    $('#loadeditformjeniskonsultasi').html(respond);
                }
            });
            $("#modal-editfrmeditjeniskonsultasi").modal("show");
        });
        // Proses delete dengan AJAX
        $(".delete-confirm2").click(function(e) {
            var form = $(this).closest('form');
            e.preventDefault();
            Swal.fire({
                title: "Yakin Hapus Data?",
                text: "Data anda akan terhapus permanen!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire({
                        title: "Terhapus!",
                        text: "Data anda berhasil terhapus",
                        icon: "success"
                    });
                }
            });
        });

    });
</script>

<script>
    $(function() {
        // Proses edit dengan AJAX
        $(".edit3").click(function() {
            var id = $(this).attr('id3');
            $.ajax({
                type: 'POST',
                url: '/frontlayanan_editjenispengislaman',
                cache: false,
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                success: function(respond) {
                    $('#loadeditformjenispengislaman').html(respond);
                }
            });
            $("#modal-editfrmeditjenispengislaman").modal("show");
        });
        // Proses delete dengan AJAX
        $(".delete-confirm3").click(function(e) {
            var form = $(this).closest('form');
            e.preventDefault();
            Swal.fire({
                title: "Yakin Hapus Data?",
                text: "Data anda akan terhapus permanen!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire({
                        title: "Terhapus!",
                        text: "Data anda berhasil terhapus",
                        icon: "success"
                    });
                }
            });
        });

    });
</script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    $(function() {
        $("#example2").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
    $(function() {
        $("#example3").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
    });
</script>
@endpush