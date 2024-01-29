@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary card-tabs">
                    {{-- PANEL MENU --}}
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="pt-2 px-3">
                                <h3 class="card-title">DATA LAYANAN</h3>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill"
                                    href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home"
                                    aria-selected="true">Buku Tamu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile"
                                    aria-selected="false">Pengislaman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill"
                                    href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages"
                                    aria-selected="false">Konsultasi</a>
                            </li>

                        </ul>
                    </div>
                    {{-- Pesan error --}}
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('warning'))
                        <div class="alert alert-warning">
                            {{ Session::get('warning') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-two-tabContent">

                            <!-- BUKU TAMU -->
                            <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel"
                                aria-labelledby="custom-tabs-two-home-tab">

                                {{-- Datatable Tamu --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-primary card-outline">
                                            <div class="card card-header">
                                                <div class="card-body">
                                                    <div id="example1_wrapper"
                                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table id="example1"
                                                                    class="table table-bordered table-striped dataTable no-footer"
                                                                    role="grid" aria-describedby="example1_info">
                                                                    <thead class="text-center">
                                                                        <tr role="row">
                                                                            <th style="width: auto;">No</th>
                                                                            <th style="width: auto;">Nama</th>
                                                                            <th style="width: auto;">Tgl</th>
                                                                            <th style="width: auto;">Handphone</th>
                                                                            <th style="width: auto;">Email</th>
                                                                            <th style="width: auto;">Keperluan</th>
                                                                            <th style="width: auto;">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($tbl_tamu as $tamu)
                                                                            <tr class="odd">
                                                                                <td class="sorting_1">{{ $loop->iteration }}
                                                                                </td>
                                                                                <td>{{ $tamu->nama_tamu }}</td>
                                                                                <td>{{ date('d-m-Y', strtotime($tamu->tgl_tamu)) }}
                                                                                </td>
                                                                                <td>{{ $tamu->nohp_tamu }}</td>
                                                                                <td>{{ $tamu->email_tamu }}</td>
                                                                                <td>{{ $tamu->keperluan_tamu }}</td>
                                                                                <td class="text-center inline-block">
                                                                                    <a class="fa fa-edit btn btn-xs btn-warning edit"
                                                                                        href="#"
                                                                                        id="{{ $tamu->id_tamu }}">
                                                                                    </a>
                                                                                    <form
                                                                                        action="/frontlayanan_hapusdatatamu/{{ $tamu->id_tamu }}"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        <a
                                                                                            class=" fa fa-trash-alt btn btn-danger btn-xs delete-confirm">
                                                                                        </a>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Edit Data Tamu --}}
                            <div class="modal modal-blur fade" id="modal-editdatatamu" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body" id="loadeditform">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PENGISLAMAN -->
                            <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel"
                                aria-labelledby="custom-tabs-two-profile-tab">
                                {{-- Datatable Pengislaman --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-primary card-outline">
                                            <div class="card card-header">
                                                <div class="card-body">
                                                    <div id="example2_wrapper"
                                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table id="example2"
                                                                    class="table table-bordered table-striped dataTable no-footer"
                                                                    role="grid" aria-describedby="example3_info">
                                                                    <thead class="text-center">
                                                                        <tr role="row">
                                                                            <th style="width: auto;">No</th>
                                                                            <th style="width: auto;">No SP</th>
                                                                            <th style="width: auto;">Nama Muallaf</th>
                                                                            <th style="width: auto;">Jenkel</th>
                                                                            <th style="width: auto;">Agama Semula</th>
                                                                            <th style="width: auto;">Imam</th>
                                                                            <th style="width: auto;">Aksi</th>
                                                                            <th style="width: auto;"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($tbl_pengislaman as $pengislaman)
                                                                            <tr class="odd">
                                                                                <td class="sorting_1">
                                                                                    {{ $loop->iteration }}</td>
                                                                                <td>{{ $pengislaman->no_sp }}</td>
                                                                                <td>{{ $pengislaman->nama_sp }}</td>
                                                                                <td>{{ $pengislaman->jenkel_sp }}</td>
                                                                                <td>{{ $pengislaman->agamasemula_sp }}</td>
                                                                                <td>{{ $pengislaman->nama_imam }}</td>
                                                                                <td class="text-center inline-block">
                                                                                    <a class="fa fa-edit btn btn-xs btn-warning edit2"
                                                                                        href="#"
                                                                                        id2="{{ $pengislaman->id_sp }}">
                                                                                    </a>
                                                                                    <form
                                                                                        action="/frontlayanan_hapusdatapengislaman/{{ $pengislaman->id_sp }}"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        <a
                                                                                            class=" fa fa-trash-alt btn btn-danger btn-xs delete-confirm2">
                                                                                        </a>
                                                                                    </form>
                                                                                </td>
                                                                                <td>
                                                                                    <form
                                                                                        action="/frontlayanan_cetaksp/{{ $pengislaman->id_sp }}"
                                                                                        method="POST" target="_blank">
                                                                                        @csrf
                                                                                        <button type="submit"
                                                                                            class="btn btn-xs btn-success"><i
                                                                                                class="fa fa-print"></i>
                                                                                        </button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- AKHIR PENGISLAMAN -->

                            {{-- Modal Edit Data Pengislaman --}}
                            <div class="modal modal-blur fade" id="modal-editdatapengislaman" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body" id="loadeditformpengislaman">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- KONSULTASI -->
                            <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel"
                                aria-labelledby="custom-tabs-two-messages-tab">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="box box-primary box-solid">
                                            <div class="box-tools box-title pull-left">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title"></h3>
                                                    <button type="button" class="btn btn-primary btn-md btn-flat mb-3"
                                                        data-toggle="modal" data-target="#tambahkonsultasi">
                                                        <i class=""></i>Buat Jadwal Konsultasi</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Datatable Konsultasi --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <!-- /.card-header -->
                                            <div class="card card-primary card-outline">
                                                <div class="card card-header">
                                                    <div id="example3_wrapper"
                                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table id="example3"
                                                                    class="table table-bordered table-striped dataTable no-footer"
                                                                    role="grid" aria-describedby="example5_info">
                                                                    <thead class="text-center">
                                                                        <tr role="row">
                                                                            <th style="width: auto;">No</th>
                                                                            <th style="width: auto;">Nama</th>
                                                                            <th style="width: auto;">Jenis Konsultasi</th>
                                                                            <th style="width: auto;">Konsultan</th>
                                                                            <th style="width: auto;">Tanggal</th>
                                                                            <th style="width: auto;">Jam</th>
                                                                            <th style="width: auto;">Aksi</th>
                                                                            <th style="width: auto;"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($tbl_konsultasi as $konsultasi)
                                                                            <tr class="odd">
                                                                                <td class="sorting_1">
                                                                                    {{ $loop->iteration }}</td>
                                                                                <td>{{ $konsultasi->nama_fk }}</td>
                                                                                <td>{{ $konsultasi->nama_jeniskonsultasi }}
                                                                                </td>
                                                                                <td>{{ $konsultasi->nama_imam }}</td>
                                                                                <td>{{ $konsultasi->hari_fk }}/{{ $konsultasi->tgl_fk }}
                                                                                </td>
                                                                                <td>{{ $konsultasi->jam_fk }}</td>

                                                                                <td class="text-center inline-block">
                                                                                    <button
                                                                                        class="fa fa-edit btn btn-xs btn-warning"
                                                                                        data-toggle="modal"
                                                                                        data-target="#editfk34"></button>
                                                                                    <button
                                                                                        class="fa fa-trash-alt btn btn-xs btn-danger"
                                                                                        data-toggle="modal"
                                                                                        data-target="#hapusfk34"></button>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="frontlayanan_cetakkonsultasi"
                                                                                        target="_blank"
                                                                                        class="btn btn-xs btn-success"><i
                                                                                            class="fa fa-print"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Buat Jadwal KONSULTASI  -->
                            <div class="modal fade" id="tambahkonsultasi">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-dark">
                                            <h6 class=" fa fa-archive modal-title">&nbsp;&nbsp;Buat Jadwal Konsultasi</h6>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/frontlayanan_tambahjadwalkonsultasi" method="post"
                                                accept-charset="utf-8">
                                                @csrf
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <label for="tglfkmodal">Tgl</label>
                                                                <input name="tglfkmodal" type="text"
                                                                    class="form-control" id="tglfkmodal"
                                                                    placeholder="Masukkan tgl..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label for="jamfkmodal">Jam</label>
                                                                <input name="jamfkmodal" type="text"
                                                                    class="form-control" id="jamfkmodal"
                                                                    placeholder="WIB..." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="harifkmodal">Hari</label>
                                                                <select id="harifkmodal" class="form-control"
                                                                    name="harifkmodal">
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
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="jeniskonsultasifkmodal">Jenis
                                                                    Konsultasi</label>
                                                                <select id="jeniskonsultasifkmodal" class="form-control"
                                                                    name="jeniskonsultasifkmodal">
                                                                    <option value="">--Pilih--</option>
                                                                    @foreach ($tbl_jeniskonsultasi as $konsultasi)
                                                                        <option
                                                                            value="{{ $konsultasi->id_jeniskonsultasi }}">
                                                                            {{ $konsultasi->nama_jeniskonsultasi }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="imamfkmodal">Imam/Takmir</label>
                                                                <select id="imamfkmodal" class="form-control"
                                                                    name="imamfkmodal">
                                                                    <option value="">--Pilih--</option>
                                                                    @foreach ($tbl_imam as $imam)
                                                                        <option value="{{ $imam->id_imam }}">
                                                                            {{ $imam->nama_imam }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default pull-left"
                                                            data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
                    url: '/frontlayanan_editdatatamu',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(respond) {
                        $('#loadeditform').html(respond);
                    }
                });
                $("#modal-editdatatamu").modal("show");
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
                    url: '/frontlayanan_editdatapengislaman',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(respond) {
                        $('#loadeditformpengislaman').html(respond);
                    }
                });
                $("#modal-editdatapengislaman").modal("show");
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
