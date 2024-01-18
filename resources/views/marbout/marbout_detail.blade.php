@extends('dashboard.dash_sidebar')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <div class="row sm-2">
                                <div class="col-sm-6">
                                    <h4><strong>Profile Marbout</strong></h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="card">
                                    <div class="card-header p-2">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active fas fa-user-circle nav-icon"
                                                    href="#biodata" data-toggle="tab">&nbsp; Biodata</a></li>
                                            <li class="nav-item"><a class="nav-link fas fa-user-plus nav-icon"
                                                    href="#suami" data-toggle="tab">&nbsp; Suami/Istri</a></li>
                                            <li class="nav-item"><a class="nav-link fas fa-user-plus nav-icon"
                                                    href="#anak" data-toggle="tab">&nbsp; Anak</a></li>
                                            <li class="nav-item"><a class="nav-link fas fa-user-plus nav-icon"
                                                    href="#orangtua" data-toggle="tab">&nbsp; Orang Tua</a></li>
                                            <li class="nav-item"><a class="nav-link fas fa-graduation-cap nav-icon"
                                                    href="#pendidikan" data-toggle="tab">&nbsp; Pendidikan</a></li>
                                            <li class="nav-item"><a class="nav-link fas fa-language nav-icon" href="#bahasa"
                                                    data-toggle="tab">&nbsp; Bahasa</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body ">
                                        <div class="tab-content">
                                            <!-- BIODATA -->
                                            <div class="active tab-pane" id="biodata">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="card card-dark card-outline">
                                                                <div class="card-body box-profile-circle text-center">
                                                                    <div class="text-center">

                                                                        @php
                                                                            $path = Storage::url('uploads/marbout/' . $tbl_marboutID->foto_user);
                                                                        @endphp
                                                                        <img src="{{ $path }}" width="85%">
                                                                    </div>
                                                                    <br>
                                                                    <span class="badge bg-primary">
                                                                        {{ $tbl_marboutID->nip }}
                                                                    </span>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-12 col-form-label">
                                                                            <i><strong>{{ $tbl_marboutID->nama_user }}</strong></i><br>
                                                                            <i><small>{{ $tbl_marboutID->nama_unitkerja }}</small></i>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card card-dark card-outline">
                                                                <div class="card-body text-left">
                                                                    <hr>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Jenis
                                                                            Kelamin</h6>
                                                                        <label class="col-sm-8 col-form-label far fa-user">
                                                                            {{ $tbl_marboutID->jenkel }} </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Tempat,
                                                                            Tgl Lahir</h6>
                                                                        <label
                                                                            class="col-sm-8 col-form-label far fa-calendar-alt">
                                                                            {{ $tbl_marboutID->tempat_lahir }},
                                                                            &nbsp;{{ $tbl_marboutID->tgl_lahir }} </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Golongan
                                                                            Darah</h6>
                                                                        <label class="col-sm-8 col-form-label">
                                                                            {{ $tbl_marboutID->goldar }} </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Status
                                                                            Pernikahan</h6>
                                                                        <label class="col-sm-8 col-form-label">
                                                                            {{ $tbl_marboutID->status_nikah }} </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">No Telp
                                                                        </h6>
                                                                        <label
                                                                            class="col-sm-8 col-form-label fas fa-mobile-alt">
                                                                            {{ $tbl_marboutID->nohp }}</label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Email
                                                                        </h6>
                                                                        <label class="col-sm-8 col-form-label">
                                                                            {{ $tbl_marboutID->email }} </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Alamat
                                                                        </h6>
                                                                        <label class="col-sm-8 col-form-label">
                                                                            {{ $tbl_marboutID->alamat }} </label>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <h6 class="col-sm-4 col-form-label">Status
                                                                            Pegawai</h6>
                                                                        <label class="col-sm-8 col-form-label">
                                                                            {{ $tbl_marboutID->status_kepeg }} </label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- /.BIODATA -->

                                            <!-- SUAMI ISTRI-->
                                            <div class="tab-pane" id="suami">
                                                <div class="card card-outline">
                                                    <div class="card-body">
                                                        <div id="example1_wrapper"
                                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="dataTables_length" id="example1_length">
                                                                        <label>Show <select name="example1_length"
                                                                                aria-controls="example1"
                                                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                                                <option value="10">10</option>
                                                                                <option value="25">25</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select> entries</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div id="example1_filter" class="dataTables_filter">
                                                                        <label>Search:<input type="search"
                                                                                class="form-control form-control-sm"
                                                                                placeholder=""
                                                                                aria-controls="example1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="example1"
                                                                        class="table table-bordered table-striped dataTable no-footer"
                                                                        role="grid" aria-describedby="example1_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting sorting_asc"
                                                                                    tabindex="0"
                                                                                    aria-controls="example1"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-sort="ascending"
                                                                                    aria-label="No: activate to sort column descending"
                                                                                    style="width: 0px;">No</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example1"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="NIK: activate to sort column ascending"
                                                                                    style="width: 0px;">NIK</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example1"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Nama: activate to sort column ascending"
                                                                                    style="width: 0px;">Nama</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example1"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="TTL: activate to sort column ascending"
                                                                                    style="width: 0px;">TTL</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example1"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Pendidikan: activate to sort column ascending"
                                                                                    style="width: 0px;">Pendidikan
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example1"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Pekerjaan: activate to sort column ascending"
                                                                                    style="width: 0px;">Pekerjaan
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example1"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Hubungan: activate to sort column ascending"
                                                                                    style="width: 0px;">Hubungan
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>


                                                                            <tr class="odd">
                                                                                <td class="sorting_1">
                                                                                    <small>1</small>
                                                                                </td>
                                                                                <td><small>2147483647</small></td>
                                                                                <td><small>Puspita Suswanti</small>
                                                                                </td>
                                                                                <td><small>Jakarta/2021-06-01</small>
                                                                                </td>
                                                                                <td><small>S1</small></td>
                                                                                <td><small>Karyawan Swasta</small>
                                                                                </td>
                                                                                <td><small>Istri</small></td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-5">
                                                                    <div class="dataTables_info" id="example1_info"
                                                                        role="status" aria-live="polite">Showing 1 to
                                                                        1 of 1
                                                                        entries</div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-7">
                                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                                        id="example1_paginate">
                                                                        <ul class="pagination">
                                                                            <li class="paginate_button page-item previous disabled"
                                                                                id="example1_previous"><a href="#"
                                                                                    aria-controls="example1"
                                                                                    data-dt-idx="0" tabindex="0"
                                                                                    class="page-link">Previous</a>
                                                                            </li>
                                                                            <li class="paginate_button page-item active">
                                                                                <a href="#" aria-controls="example1"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">1</a>
                                                                            </li>
                                                                            <li class="paginate_button page-item next disabled"
                                                                                id="example1_next"><a href="#"
                                                                                    aria-controls="example1"
                                                                                    data-dt-idx="2" tabindex="0"
                                                                                    class="page-link">Next</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- AKHIR SUAMI ISTRI-->

                                            <!-- ANAK -->
                                            <div class="tab-pane" id="anak">
                                                <div class="card card-outline">
                                                    <div class="card-body">
                                                        <div id="example3_wrapper"
                                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="dataTables_length" id="example3_length">
                                                                        <label>Show <select name="example3_length"
                                                                                aria-controls="example3"
                                                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                                                <option value="10">10</option>
                                                                                <option value="25">25</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select> entries</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div id="example3_filter" class="dataTables_filter">
                                                                        <label>Search:<input type="search"
                                                                                class="form-control form-control-sm"
                                                                                placeholder=""
                                                                                aria-controls="example3"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="example3"
                                                                        class="table table-bordered table-striped dataTable no-footer"
                                                                        role="grid" aria-describedby="example3_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting sorting_asc"
                                                                                    tabindex="0"
                                                                                    aria-controls="example3"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-sort="ascending"
                                                                                    aria-label="No: activate to sort column descending"
                                                                                    style="width: 0px;">No</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example3"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="NIK: activate to sort column ascending"
                                                                                    style="width: 0px;">NIK</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example3"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Nama: activate to sort column ascending"
                                                                                    style="width: 0px;">Nama</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example3"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="TTL: activate to sort column ascending"
                                                                                    style="width: 0px;">TTL</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example3"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Pendidikan: activate to sort column ascending"
                                                                                    style="width: 0px;">Pendidikan
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example3"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Pekerjaan: activate to sort column ascending"
                                                                                    style="width: 0px;">Pekerjaan
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example3"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Hubungan: activate to sort column ascending"
                                                                                    style="width: 0px;">Hubungan
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>



                                                                            <tr class="odd">
                                                                                <td class="sorting_1">
                                                                                    <small>1</small>
                                                                                </td>
                                                                                <td><small>92983989238923</small>
                                                                                </td>
                                                                                <td><small>Callysta Rizqia
                                                                                        Kamila</small></td>
                                                                                <td><small>Jakarta/2021-06-22</small>
                                                                                </td>
                                                                                <td><small>SD</small></td>
                                                                                <td><small>Belum Bekerja</small>
                                                                                </td>
                                                                                <td><small>Anak Kandung</small></td>

                                                                            </tr>
                                                                            <tr class="even">
                                                                                <td class="sorting_1">
                                                                                    <small>2</small>
                                                                                </td>
                                                                                <td><small>92983989238922</small>
                                                                                </td>
                                                                                <td><small>Rizqi Azhar Kamil</small>
                                                                                </td>
                                                                                <td><small>Jakarta/2021-06-04</small>
                                                                                </td>
                                                                                <td><small>SD</small></td>
                                                                                <td><small>Belum Bekerja</small>
                                                                                </td>
                                                                                <td><small>Anak Kandung</small></td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-5">
                                                                    <div class="dataTables_info" id="example3_info"
                                                                        role="status" aria-live="polite">Showing 1 to
                                                                        2 of 2
                                                                        entries</div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-7">
                                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                                        id="example3_paginate">
                                                                        <ul class="pagination">
                                                                            <li class="paginate_button page-item previous disabled"
                                                                                id="example3_previous"><a href="#"
                                                                                    aria-controls="example3"
                                                                                    data-dt-idx="0" tabindex="0"
                                                                                    class="page-link">Previous</a>
                                                                            </li>
                                                                            <li class="paginate_button page-item active">
                                                                                <a href="#" aria-controls="example3"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">1</a>
                                                                            </li>
                                                                            <li class="paginate_button page-item next disabled"
                                                                                id="example3_next"><a href="#"
                                                                                    aria-controls="example3"
                                                                                    data-dt-idx="2" tabindex="0"
                                                                                    class="page-link">Next</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- AKHIR ANAK -->

                                            <!-- ORANG TUA-->
                                            <div class="tab-pane" id="orangtua">
                                                <div class="card card-outline">
                                                    <div class="card-body">
                                                        <div id="example5_wrapper"
                                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="dataTables_length" id="example5_length">
                                                                        <label>Show <select name="example5_length"
                                                                                aria-controls="example5"
                                                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                                                <option value="10">10</option>
                                                                                <option value="25">25</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select> entries</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div id="example5_filter" class="dataTables_filter">
                                                                        <label>Search:<input type="search"
                                                                                class="form-control form-control-sm"
                                                                                placeholder=""
                                                                                aria-controls="example5"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="example5"
                                                                        class="table table-bordered table-striped dataTable no-footer"
                                                                        role="grid" aria-describedby="example5_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting sorting_asc"
                                                                                    tabindex="0"
                                                                                    aria-controls="example5"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-sort="ascending"
                                                                                    aria-label="No: activate to sort column descending"
                                                                                    style="width: 0px;">No</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example5"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="NIK: activate to sort column ascending"
                                                                                    style="width: 0px;">NIK</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example5"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Nama: activate to sort column ascending"
                                                                                    style="width: 0px;">Nama</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example5"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="TTL: activate to sort column ascending"
                                                                                    style="width: 0px;">TTL</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example5"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Pendidikan: activate to sort column ascending"
                                                                                    style="width: 0px;">Pendidikan
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example5"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Pekerjaan: activate to sort column ascending"
                                                                                    style="width: 0px;">Pekerjaan
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example5"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Hubungan: activate to sort column ascending"
                                                                                    style="width: 0px;">Hubungan
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>



                                                                            <tr class="odd">
                                                                                <td class="sorting_1">
                                                                                    <small>1</small>
                                                                                </td>
                                                                                <td><small>92983989238923</small>
                                                                                </td>
                                                                                <td><small>Martiyem</small></td>
                                                                                <td><small>Jakarta/2021-06-04</small>
                                                                                </td>
                                                                                <td><small>SLTP</small></td>
                                                                                <td><small>Ibu Rumah Tangga</small>
                                                                                </td>
                                                                                <td><small>Ibu Kandung</small></td>

                                                                            </tr>
                                                                            <tr class="even">
                                                                                <td class="sorting_1">
                                                                                    <small>2</small>
                                                                                </td>
                                                                                <td><small>92983989238923</small>
                                                                                </td>
                                                                                <td><small>Supardi </small></td>
                                                                                <td><small>Jakarta/2021-06-02</small>
                                                                                </td>
                                                                                <td><small>SLTA</small></td>
                                                                                <td><small>Karyawan Swasta</small>
                                                                                </td>
                                                                                <td><small>Ayah Kandung</small></td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-5">
                                                                    <div class="dataTables_info" id="example5_info"
                                                                        role="status" aria-live="polite">Showing 1 to
                                                                        2 of 2
                                                                        entries</div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-7">
                                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                                        id="example5_paginate">
                                                                        <ul class="pagination">
                                                                            <li class="paginate_button page-item previous disabled"
                                                                                id="example5_previous"><a href="#"
                                                                                    aria-controls="example5"
                                                                                    data-dt-idx="0" tabindex="0"
                                                                                    class="page-link">Previous</a>
                                                                            </li>
                                                                            <li class="paginate_button page-item active">
                                                                                <a href="#" aria-controls="example5"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">1</a>
                                                                            </li>
                                                                            <li class="paginate_button page-item next disabled"
                                                                                id="example5_next"><a href="#"
                                                                                    aria-controls="example5"
                                                                                    data-dt-idx="2" tabindex="0"
                                                                                    class="page-link">Next</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- AKHIR ORANG TUA -->

                                            <!-- PENDIDIKAN-->
                                            <div class="tab-pane" id="pendidikan">

                                                <div class="card card-outline">
                                                    <div class="card-body">
                                                        <div id="example7_wrapper"
                                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="dataTables_length" id="example7_length">
                                                                        <label>Show <select name="example7_length"
                                                                                aria-controls="example7"
                                                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                                                <option value="10">10</option>
                                                                                <option value="25">25</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select> entries</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div id="example7_filter" class="dataTables_filter">
                                                                        <label>Search:<input type="search"
                                                                                class="form-control form-control-sm"
                                                                                placeholder=""
                                                                                aria-controls="example7"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <table id="example7"
                                                                        class="table table-bordered table-striped dataTable no-footer"
                                                                        role="grid" aria-describedby="example7_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting sorting_asc"
                                                                                    tabindex="0"
                                                                                    aria-controls="example7"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-sort="ascending"
                                                                                    aria-label="Tingkat: activate to sort column descending"
                                                                                    style="width: 0px;">Tingkat
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example7"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Nama Sekolah: activate to sort column ascending"
                                                                                    style="width: 0px;">Nama
                                                                                    Sekolah</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example7"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Lokasi: activate to sort column ascending"
                                                                                    style="width: 0px;">Lokasi</th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example7"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Jurusan: activate to sort column ascending"
                                                                                    style="width: 0px;">Jurusan
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example7"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="No Ijazah: activate to sort column ascending"
                                                                                    style="width: 0px;">No Ijazah
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    aria-controls="example7"
                                                                                    rowspan="1" colspan="1"
                                                                                    aria-label="Kepsek: activate to sort column ascending"
                                                                                    style="width: 0px;">Kepsek</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>



                                                                            <tr class="odd">
                                                                                <td class="sorting_1">
                                                                                    <small>Sekolah Dasar</small>
                                                                                </td>
                                                                                <td><small>SD Negeri 07
                                                                                        Siang</small></td>
                                                                                <td><small>Jakarta Selatan</small>
                                                                                </td>
                                                                                <td><small>SD</small></td>
                                                                                <td><small>100</small></td>
                                                                                <td><small>Kepala Sekolah</small>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="even">
                                                                                <td class="sorting_1">
                                                                                    <small>Sekolah Menengah
                                                                                        Pertama</small>
                                                                                </td>
                                                                                <td><small>SMP 110 </small></td>
                                                                                <td><small>Jakarta Selatan</small>
                                                                                </td>
                                                                                <td><small>SMP</small></td>
                                                                                <td><small>100</small></td>
                                                                                <td><small>Kepala Sekolah</small>
                                                                                </td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-5">
                                                                    <div class="dataTables_info" id="example7_info"
                                                                        role="status" aria-live="polite">Showing 1 to
                                                                        2 of 2
                                                                        entries</div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-7">
                                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                                        id="example7_paginate">
                                                                        <ul class="pagination">
                                                                            <li class="paginate_button page-item previous disabled"
                                                                                id="example7_previous"><a href="#"
                                                                                    aria-controls="example7"
                                                                                    data-dt-idx="0" tabindex="0"
                                                                                    class="page-link">Previous</a>
                                                                            </li>
                                                                            <li class="paginate_button page-item active">
                                                                                <a href="#" aria-controls="example7"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">1</a>
                                                                            </li>
                                                                            <li class="paginate_button page-item next disabled"
                                                                                id="example7_next"><a href="#"
                                                                                    aria-controls="example7"
                                                                                    data-dt-idx="2" tabindex="0"
                                                                                    class="page-link">Next</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- AKHIR PENDIDIKAN -->

                                            <!-- BAHASA-->
                                            <div class="tab-pane" id="bahasa">

                                                <div class="card card-outline">
                                                    <div class="card-body">
                                                        <table id="example5" class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Jenis Bahasa</th>
                                                                    <th>Nama Bahasa</th>
                                                                    <th>Kemampuan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td><small>1</small></td>
                                                                    <td><small>Asing</small></td>
                                                                    <td><small>Bahasa Inggris</small></td>
                                                                    <td><small>Aktif</small></td>

                                                                </tr>
                                                                <tr>
                                                                    <td><small>2</small></td>
                                                                    <td><small>Daerah</small></td>
                                                                    <td><small>Bahasa Jawa</small></td>
                                                                    <td><small>Pasif</small></td>

                                                                </tr>
                                                                <tr>
                                                                    <td><small>3</small></td>
                                                                    <td><small>Nasional</small></td>
                                                                    <td><small>Bahasa Indonesia</small></td>
                                                                    <td><small>Aktif</small></td>

                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- AKHIR BAHASA -->

                                            <!-- AKHIR TAB PANEl -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="car-header">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h2 class="card-title far fa-file-code nav-icon text-center">
                                                &nbsp;&nbsp;<strong>Kepegawaian</strong></h2>
                                        </div>
                                        <hr>
                                        <button type="button" class="btn btn-dark btn-xl fab fa-searchengin"
                                            data-toggle="modal"
                                            data-target="#modal-xl">&nbsp;&nbsp;&nbsp;Jabatan&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <hr>
                                        <button type="button" class="btn btn-dark btn-xl fab fa-searchengin"
                                            data-toggle="modal"
                                            data-target="#modal-xl2">&nbsp;&nbsp;&nbsp;Penugasan&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <hr>
                                        <button type="button" class="btn btn-dark btn-xl fab fa-searchengin"
                                            data-toggle="modal"
                                            data-target="#modal-xl3">&nbsp;&nbsp;&nbsp;Seminar&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <hr>
                                        <button type="button" class="btn btn-dark btn-xl fab fa-searchengin"
                                            data-toggle="modal"
                                            data-target="#modal-xl4">&nbsp;&nbsp;&nbsp;Penghargaan&nbsp;&nbsp;&nbsp;
                                        </button>
                                        <hr>
                                        <button type="button" class="btn btn-dark btn-xl fab fa-searchengin"
                                            data-toggle="modal"
                                            data-target="#modal-xl5">&nbsp;&nbsp;&nbsp;Pelanggaran&nbsp;&nbsp;&nbsp;
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- AWAL MODAL JABATAN -->
                        <div class="modal fade" id="modal-xl" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <div class="col-xl-6">
                                            <h4 class="modal-title"><strong>Riwayat Jabatan</strong></h4><strong>
                                            </strong>
                                        </div><strong>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>

                                            </button>
                                        </strong>
                                    </div><strong>
                                        <div class="modal-body">
                                            <div class="card card-outline">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            Nama : &nbsp;&nbsp;<i><strong>Donarsi
                                                                    Yosianto</strong></i>
                                                        </div>
                                                    </div><br>
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Jabatan</th>
                                                                <th>Eselon</th>
                                                                <th>No SK</th>
                                                                <th>Tgl SK</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr>
                                                                <td><small>1</small></td>
                                                                <td><small>Marbout</small></td>
                                                                <td><small>III/D</small></td>
                                                                <td><small>10</small></td>
                                                                <td><small>2021-06-16</small></td>

                                                            </tr>
                                                            <tr>
                                                                <td><small>2</small></td>
                                                                <td><small>Kepala Kantor</small></td>
                                                                <td><small>II/D</small></td>
                                                                <td><small>10</small></td>
                                                                <td><small>2021-06-28</small></td>

                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                        </div>
                                    </strong>
                                </div><strong>
                                    <!-- /.modal-content -->
                                </strong>
                            </div><strong>
                                <!-- /.modal-dialog -->
                            </strong>
                        </div><strong>

                            <div class="modal fade" id="modal-xl2">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <div class="col-xl-6">
                                                <h4 class="modal-title"><strong>Riwayat Penugasan</strong></h4>
                                                <strong>
                                                </strong>
                                            </div><strong>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>

                                                </button>
                                            </strong>
                                        </div><strong>
                                            <div class="modal-body">
                                                <div class="card card-outline">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                Nama : &nbsp;&nbsp;<i><strong>Donarsi
                                                                        Yosianto</strong></i>
                                                            </div>
                                                        </div><br>
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Tempat</th>
                                                                    <th>Tahun</th>
                                                                    <th>Lama</th>
                                                                    <th>Keterangan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td><small>1</small></td>
                                                                    <td><small>Sekretariat YPI Al Azhar</small></td>
                                                                    <td><small>2017</small></td>
                                                                    <td><small>2 Bulan</small></td>
                                                                    <td><small>Menggantikan Tugas Pak Ali yang
                                                                            sedang cuti</small></td>

                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            </div>
                                        </strong>
                                    </div><strong>
                                        <!-- /.modal-content -->
                                    </strong>
                                </div><strong>
                                    <!-- /.modal-dialog -->
                                </strong>
                            </div><strong>
                                <!-- /.modal -->
                                <!-- AKHIR  TAB PENUGASAN -->

                                <!-- AWAL MODAL SEMINAR -->
                                <div class="modal fade" id="modal-xl3">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <div class="col-xl-6">
                                                    <h4 class="modal-title"><strong>Riwayat Seminar</strong></h4>
                                                    <strong>
                                                    </strong>
                                                </div><strong>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>

                                                    </button>
                                                </strong>
                                            </div><strong>
                                                <div class="modal-body">
                                                    <div class="card card-outline">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    Nama : &nbsp;&nbsp;<i><strong>Donarsi
                                                                            Yosianto</strong></i>
                                                                </div>
                                                            </div><br>
                                                            <table id="example1"
                                                                class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Seminar</th>
                                                                        <th>Lokasi</th>
                                                                        <th>Penyelenggara</th>
                                                                        <th>Tgl Seminar</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <td><small>1</small></td>
                                                                        <td><small>IT sebagai Solusi Dunia
                                                                                Kerja</small></td>
                                                                        <td><small>Hotel Pacifik Jakarta</small>
                                                                        </td>
                                                                        <td><small>PT. Agung Podomoro </small></td>
                                                                        <td><small>2021-06-28</small></td>

                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                </div>
                                            </strong>
                                        </div><strong>
                                            <!-- /.modal-content -->
                                        </strong>
                                    </div><strong>
                                        <!-- /.modal-dialog -->
                                    </strong>
                                </div><strong>
                                    <!-- /.modal -->
                                    <!-- AKHIR  TAB SEMINAR -->


                                    <!-- AWAL MODAL PENGHARGAAN -->
                                    <div class="modal fade" id="modal-xl4">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <div class="col-xl-6">
                                                        <h4 class="modal-title"><strong>Riwayat
                                                                Penghargaan</strong></h4><strong>
                                                        </strong>
                                                    </div><strong>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>

                                                        </button>
                                                    </strong>
                                                </div><strong>
                                                    <div class="modal-body">
                                                        <div class="card card-outline">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        Nama : &nbsp;&nbsp;<i><strong>Donarsi
                                                                                Yosianto</strong></i>
                                                                    </div>
                                                                </div><br>
                                                                <table id="example1"
                                                                    class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Nama</th>
                                                                            <th>Tahun</th>
                                                                            <th>Instansi Pemberi</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <tr>
                                                                            <td><small>1</small></td>
                                                                            <td><small>Eka Setia Panca Karsa</small>
                                                                            </td>
                                                                            <td><small>2021</small></td>
                                                                            <td><small>Kemen PUPR Jakarta</small>
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td><small>2</small></td>
                                                                            <td><small>Sapta Marga Kusuma</small>
                                                                            </td>
                                                                            <td><small>2010</small></td>
                                                                            <td><small>Kepolisian RI </small></td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                    </div>
                                                </strong>
                                            </div><strong>
                                                <!-- /.modal-content -->
                                            </strong>
                                        </div><strong>
                                            <!-- /.modal-dialog -->
                                        </strong>
                                    </div><strong>
                                        <!-- /.modal -->
                                        <!-- AKHIR  TAB PENGHARGAAN -->


                                        <!-- AWAL MODAL PELANGGARAN -->
                                        <div class="modal fade" id="modal-xl5">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                        <div class="col-xl-6">
                                                            <h4 class="modal-title"><strong>Riwayat
                                                                    Penghargaan</strong></h4><strong>
                                                            </strong>
                                                        </div><strong>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">×</span>

                                                            </button>
                                                        </strong>
                                                    </div><strong>
                                                        <div class="modal-body">
                                                            <div class="card card-outline">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-xl-12">
                                                                            Nama : &nbsp;&nbsp;<i><strong>Donarsi
                                                                                    Yosianto</strong></i>
                                                                        </div>
                                                                    </div><br>
                                                                    <table id="example1"
                                                                        class="table table-bordered table-striped">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>No</th>
                                                                                <th>Nama</th>
                                                                                <th>Nomor_Tgl SP</th>
                                                                                <th>Keterangan</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <tr>
                                                                                <td><small>1</small></td>
                                                                                <td><small>Teguran Lisan</small>
                                                                                </td>
                                                                                <td><small>11_2021-06-27</small>
                                                                                </td>
                                                                                <td><small>asdasdas</small></td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td><small>2</small></td>
                                                                                <td><small>Teguran Tertulis
                                                                                        1</small></td>
                                                                                <td><small>11_2021-06-15</small>
                                                                                </td>
                                                                                <td><small>Melanggar absensi selama
                                                                                        sebulan</small></td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td><small>3</small></td>
                                                                                <td><small>Teguran Tertulis
                                                                                        2</small></td>
                                                                                <td><small>SK001_2021-07-02</small>
                                                                                </td>
                                                                                <td><small>SP ke 2</small></td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close</button>
                                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </strong>
                                                </div><strong>
                                                    <!-- /.modal-content -->
                                                </strong>
                                            </div><strong>
                                                <!-- /.modal-dialog -->
                                            </strong>
                                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><strong><strong>
            <!-- /.content -->
        </strong></strong>
    </div>
@endsection
