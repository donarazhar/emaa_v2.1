@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <!-- Main content -->
                <div class="card card-dark">
                    <div class="card-header">
                        <i class="fas fa-caret-right nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Data Imam dan Takmir Masjid</i>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="box box-primary box-solid">
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                                        data-target="#tambahdataimam">
                                        <i class=" fa fa-plus"></i>&nbsp;&nbsp;Tambah Data</button>
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
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable no-footer"
                                            role="grid" aria-describedby="example1_info">
                                            <thead class="text-center">
                                                <tr role="row">
                                                    <th style="width: auto;">#</th>
                                                    <th style="width: auto;">Nama Imam</th>
                                                    <th style="width: auto;">No Handphone</th>
                                                    <th style="width: auto;">Keterangan</th>
                                                    <th style="width: auto;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tbl_imam as $imam)
                                                    <tr class="odd">
                                                        <td width="10px" class="sorting_1">{{ $loop->iteration }}</td>
                                                        <td>{{ $imam->nama_imam }}</td>
                                                        <td>{{ $imam->nohp_imam }}</td>
                                                        <td>{{ $imam->keterangan }}</td>
                                                        <td class="text-center inline-block">
                                                            <a class="fa fa-edit btn btn-xs btn-warning edit" href="#"
                                                                id="{{ $imam->id_imam }}">
                                                            </a>
                                                            <form action="/frontlayanan_hapusdataimam/{{ $imam->id_imam }}"
                                                                method="POST">
                                                                @csrf
                                                                <a
                                                                    class=" fa fa-trash-alt btn btn-danger btn-xs delete-confirm">
                                                                </a>
                                                            </form>
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

    {{-- Modal Tambah Data Imam --}}
    <div class="modal fade" id="tambahdataimam" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h6 class=" fa fa-archive modal-title">&nbsp;&nbsp;Menambah Data</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/frontlayanan_tambahdataimam" method="post" accept-charset="utf-8">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="namamodalimam">Nama Imam</label>
                                <input type="text" class="form-control" id="namamodalimam" name="namamodalimam"
                                    placeholder="Masukkan nama imam..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="nohpmodalimam">No Handphone</label>
                                <input class="form-control" name="nohpmodalimam" type="text" id="nohpmodalimam"
                                    placeholder="Masukkan no handphone..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keteranganmodalimam">Keterangan</label>
                            <input type="text" class="form-control" id="keteranganmodalimam" name="keteranganmodalimam"
                                placeholder="Masukkan keterangan..." required>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Edit Data Surat --}}
    <div class="modal modal-blur fade" id="modal-editdataimam" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body" id="loadeditform">
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
                    url: '/frontlayanan_editdataimam',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(respond) {
                        $('#loadeditform').html(respond);
                    }
                });
                $("#modal-editdataimam").modal("show");
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
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush
