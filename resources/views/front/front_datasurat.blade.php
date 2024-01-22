@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="card card-dark px-2 py-2">
            <div class="card-header">
                <i class="fas fa-envelope nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Data Transaksi Surat</i>
            </div>
            <div class="box-tools pull-right mx-3 my-3">
                <button type="button" class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#modaltambah">
                    <i class=" fa fa-plus"></i>&nbsp;&nbsp;Masukkan Surat Baru</button>
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
            <div class="card card-primary card-outline px-3 py-3">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-responsive table-bordered table-striped dataTable no-footer"
                                role="grid" aria-describedby="example1_info" id="example2">
                                <thead class="text-center">
                                    <tr role="row">
                                        <th style="width: auto;">No Agenda</th>
                                        <th style="width: auto;">No Surat</th>
                                        <th style="width: auto;">Tgl Masuk</th>
                                        <th style="width: auto;">Surat dari</th>
                                        <th style="width: auto;">Perihal</th>
                                        <th style="width: auto;">Status</th>
                                        <th style="width: auto;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($tbl_datasurat as $datasurat)
                                        <tr class="odd">
                                            <td class="sorting_1">
                                                {{ $datasurat->id_transaksisurat }}
                                            </td>
                                            <td>{{ $datasurat->no_transaksisurat }}</td>
                                            <td>{{ date('d-m-Y', strtotime($datasurat->tgl_masuksurat)) }}</td>
                                            <td>{{ $datasurat->suratdari }}</td>
                                            <td>{{ $datasurat->perihal }}
                                            </td>
                                            <td>{{ $datasurat->status == 1 ? 'Disposisi' : ($datasurat->status == 2 ? 'Proses' : ($datasurat->status == 3 ? 'Selesai' : '')) }}
                                            </td>
                                            <td class="text-center">
                                                <a class="fa fa-edit btn btn-xs btn-warning edit" href="#"
                                                    id="{{ $datasurat->id_transaksisurat }}">
                                                </a>
                                                <form action="/front_hapusdatasurat/{{ $datasurat->id_transaksisurat }}"
                                                    method="POST">
                                                    @csrf
                                                    <a class=" fa fa-trash-alt btn btn-danger btn-xs delete-confirm">
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

    {{-- Modal Tambah Data Surat --}}
    <div class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h6 class="far fa-envelope modal-title">&nbsp;&nbsp;Menambahkan Data Surat</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/front_tambahdatasurat" method="post" accept-charset="utf-8">
                        @csrf
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="nomorurut">No Agenda</label>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{ $nomorbaru }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="no_modaltransaksisurat">No Surat</label>
                                        <input type="text" class="form-control" id="no_modaltransaksisurat"
                                            name="no_modaltransaksisurat" placeholder="Masukkan nomor surat..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="tglmodaltransaksisurat">Tgl Surat</label>
                                        <input class="form-control" name="tglmodaltransaksisurat" type="date"
                                            id="tglmodaltransaksisurat" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="perihalmodal">Perihal</label>
                            <input type="text" class="form-control" id="perihalmodal" name="perihalmodal"
                                placeholder="Masukkan perihal..." required>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="idkategorimodal">Kategori</label>
                                        <select class="form-control" name="idkategorimodal" required>
                                            <option value="">--Pilih kategori--</option>
                                            @foreach ($tbl_kategori as $kategori)
                                                <option value="{{ $kategori->id_kategori }}">
                                                    {{ $kategori->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="idasalsuratmodal">Asal Surat</label>
                                        <select class="form-control" name="idasalsuratmodal" required>
                                            <option value="">--Pilih asal surat--</option>
                                            @foreach ($tbl_asalsurat as $asalsurat)
                                                <option value="{{ $asalsurat->id_asalsurat }}">
                                                    {{ $asalsurat->nama_asalsurat }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="suratdarimodal">Surat dari</label>
                                    <input type="text" class="form-control" id="id_suratdarimodal"
                                        name="suratdarimodal" placeholder="Masukkan surat dari..." required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="statussurat">Status</label>
                                    <select class="form-control" name="statussurat" required>
                                        <option value="">--Pilih status--</option>
                                        <option value="1">Disposisi</option>
                                        <option value="2">Proses</option>
                                        <option value="3">Selesai</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Edit Data Surat --}}
    <div class="modal modal-blur fade" id="modal-editfrmeditdatasurat" tabindex="-1" role="dialog"
        aria-hidden="true">
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
                    url: '/front_editdatasurat',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(respond) {
                        $('#loadeditform').html(respond);
                    }
                });
                $("#modal-editfrmeditdatasurat").modal("show");
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
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
