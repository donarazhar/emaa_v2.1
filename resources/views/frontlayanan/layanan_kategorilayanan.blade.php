@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="pt-2 px-3">
                                <h3 class="card-title">KATEGORI LAYANAN</h3>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="kategorilayanan-tab" data-toggle="pill"
                                    href="#kategorilayanan" role="tab" aria-controls="kategorilayanan"
                                    aria-selected="true">Kategori Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="jeniskonsultasi-tab" data-toggle="pill" href="#jeniskonsultasi"
                                    role="tab" aria-controls="jeniskonsultasi" aria-selected="false">Kategori
                                    Konsultasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="jenispengislaman-tab" data-toggle="pill" href="#jenispengislaman"
                                    role="tab" aria-controls="jenispengislaman" aria-selected="false">Kategori
                                    Pengislaman</a>
                            </li>

                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <!--KATEGORI LAYANAN-->
                            <div class="tab-pane fade active show" id="kategorilayanan" role="tabpanel"
                                aria-labelledby="kategorilayanan-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box box-primary box-solid">
                                            <div class="box-tools box-title pull-left">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title"></h3>
                                                    <button type="button" class="btn btn-primary btn-sm btn-flat mb-3"
                                                        data-toggle="modal" data-target="#kategorilayanan-default">
                                                        <i class=""></i>Tambah+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
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
                                                                        <th style="width: auto;">Deskripsi</th>
                                                                        <th style="width: auto;">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($tbl_katlayanan as $katlayanan)
                                                                        <tr class="odd">
                                                                            <td class="sorting_1">{{ $loop->iteration }}
                                                                            </td>
                                                                            <td>{{ $katlayanan->nama_kategorilayanan }}
                                                                            </td>
                                                                            <td>{{ $katlayanan->deskripsi }}</td>
                                                                            <td class="text-center inline-block">
                                                                                <a class="fa fa-edit btn btn-xs btn-warning edit"
                                                                                    href="#"
                                                                                    id="{{ $katlayanan->id_kategorilayanan }}">
                                                                                </a>
                                                                                <form
                                                                                    action="/frontlayanan_hapuskategorilayanan/{{ $katlayanan->id_kategorilayanan }}"
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

                            {{-- Modal tambah Data kategori layanan --}}
                            <div class="modal fade" id="kategorilayanan-default">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h6 class="far fa-envelope modal-title">&nbsp;&nbsp;Menambahkan Data</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/frontlayanan_tambahkategorilayanan" method="post"
                                                accept-charset="utf-8">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="namakategorilayananmodal">Nama</label>
                                                    <input name="namakategorilayananmodal" type="text"
                                                        class="form-control" id="namakategorilayananmodal"
                                                        placeholder="Masukkan nama" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="deksripsikategorilayananmodal">Deskripsi</label>
                                                    <input name="deksripsikategorilayananmodal" type="text"
                                                        class="form-control" id="deksripsikategorilayananmodal"
                                                        placeholder="Masukkan deskripsi" required>
                                                </div>

                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default pull-left"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Edit kategori layanan --}}
                            <div class="modal modal-blur fade" id="modal-editfrmeditkategorilayanan" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body" id="loadeditformkategorilayanan">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- JENIS KONSULTASI --}}
                            <div class="tab-pane fade" id="jeniskonsultasi" role="tabpanel"
                                aria-labelledby="jeniskonsultasi-tab">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="box box-primary box-solid">
                                            <div class="box-tools box-title pull-left">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title"></h3>
                                                    <button type="button" class="btn btn-primary btn-sm btn-flat mb-3"
                                                        data-toggle="modal" data-target="#jeniskonsultasi-default">
                                                        <i class=""></i>Tambah+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
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
                                                                        <th style="width: auto;">Nama</th>
                                                                        <th style="width: auto;">Deskripsi</th>
                                                                        <th style="width: auto;">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($tbl_jeniskonsultasi as $jeniskonsultasi)
                                                                        <tr class="odd">
                                                                            <td class="sorting_1">{{ $loop->iteration }}
                                                                            </td>
                                                                            <td>{{ $jeniskonsultasi->nama_jeniskonsultasi }}
                                                                            </td>
                                                                            <td>{{ $jeniskonsultasi->deskripsi }}
                                                                            </td>
                                                                            <td class="text-center inline-block">
                                                                                <a class="fa fa-edit btn btn-xs btn-warning edit2"
                                                                                    href="#"
                                                                                    id2="{{ $jeniskonsultasi->id_jeniskonsultasi }}">
                                                                                </a>
                                                                                <form
                                                                                    action="/frontlayanan_hapusjeniskonsultasi/{{ $jeniskonsultasi->id_jeniskonsultasi }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    <a
                                                                                        class=" fa fa-trash-alt btn btn-danger btn-xs delete-confirm2">
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

                            {{-- Modal Tambah Jenis Konsultasi --}}
                            <div class="modal fade" id="jeniskonsultasi-default">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h6 class="far fa-envelope modal-title">&nbsp;&nbsp;Menambahkan Data</h6>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/frontlayanan_tambahjeniskonsultasi" method="post"
                                                accept-charset="utf-8">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="namajeniskonsultasimodal">Nama</label>
                                                    <input name="namajeniskonsultasimodal" type="text"
                                                        class="form-control" id="namajeniskonsultasimodal"
                                                        placeholder="Masukkan nama" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="deksripsijeniskonsultasimodal">Deskripsi</label>
                                                    <input name="deksripsijeniskonsultasimodal" type="text"
                                                        class="form-control" id="deksripsijeniskonsultasimodal"
                                                        placeholder="Masukkan deskripsi" required="">
                                                </div>

                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default pull-left"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Edit Jenis Konsultasi --}}
                            <div class="modal modal-blur fade" id="modal-editfrmeditjeniskonsultasi" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body" id="loadeditformjeniskonsultasi">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--JENIS PENGISLAMAN-->
                            <div class="tab-pane fade" id="jenispengislaman" role="tabpanel"
                                aria-labelledby="jenispengislaman-tab">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="box box-primary box-solid">
                                            <div class="box-tools box-title pull-left">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title"></h3>
                                                    <button type="button" class="btn btn-primary btn-sm btn-flat mb-3"
                                                        data-toggle="modal" data-target="#jenispengislaman-default">
                                                        <i class=""></i>Tambah+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <div id="example3_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="example3"
                                                                class="table table-bordered table-striped dataTable no-footer"
                                                                role="grid" aria-describedby="example3_info">
                                                                <thead class="text-center">
                                                                    <tr role="row">
                                                                        <th style="width: auto;">No</th>
                                                                        <th style="width: auto;">Nama</th>
                                                                        <th style="width: auto;">Deskripsi</th>
                                                                        <th style="width: auto;">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($tbl_jenispengislaman as $jenispengislaman)
                                                                        <tr class="odd">
                                                                            <td class="sorting_1">{{ $loop->iteration }}
                                                                            </td>
                                                                            <td>{{ $jenispengislaman->nama_jenispengislaman }}
                                                                            </td>
                                                                            <td>{{ $jenispengislaman->deskripsi }}
                                                                            </td>
                                                                            <td class="text-center inline-block">
                                                                                <a class="fa fa-edit btn btn-xs btn-warning edit3"
                                                                                    href="#"
                                                                                    id3="{{ $jenispengislaman->id_jenispengislaman }}">
                                                                                </a>
                                                                                <form
                                                                                    action="/frontlayanan_hapusjenispengislaman/{{ $jenispengislaman->id_jenispengislaman }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    <a
                                                                                        class=" fa fa-trash-alt btn btn-danger btn-xs delete-confirm3">
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
                            <!-- akhir Jenis Pengislaman -->

                            <!-- MODAL tambah Jenis Pengislaman -->
                            <div class="modal fade" id="jenispengislaman-default">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h6 class="far fa-envelope modal-title">&nbsp;&nbsp;Menambahkan Data</h6>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="frontlayanan_tambahjenispengislaman" method="post"
                                                accept-charset="utf-8">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="namajenispengislamanmodal">Nama</label>
                                                    <input name="namajenispengislamanmodal" type="text"
                                                        class="form-control" id="namajenispengislamanmodal"
                                                        placeholder="Masukkan nama" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="deksripsijenispengislamanmodal">Deskripsi</label>
                                                    <input name="deksripsijenispengislamanmodal" type="text"
                                                        class="form-control" id="deksripsijenispengislamanmodal"
                                                        placeholder="Masukkan deskripsi" required="">
                                                </div>

                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default pull-left"
                                                        data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Edit Jenis Pengislaman --}}
                            <div class="modal modal-blur fade" id="modal-editfrmeditjenispengislaman" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body" id="loadeditformjenispengislaman">
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
