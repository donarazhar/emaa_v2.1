@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="box box-primary box-solid">
            <div class="card card-dark">
                <div class="card-header">
                    <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Form Data Kategori Surat</i>
                </div>
                <div class="box-body">
                    <div class="card-body">
                        <div class="card card-dark card-outline">
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

                            <div class="row mt-5">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                    <form action="/front_tambahkatsurat" method="post" accept-charset="utf-8">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="namakategorikatsurat">Nama Kategori</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <input name="namakategorikatsurat" type="text" class="form-control"
                                                    id="namakategorikatsurat" required>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <button type="submit"
                                                        class="btn btn-warning fas fa-save nav-icon">&nbsp;Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="modal-body">
                                        <div class="card card-outline">
                                            <div class="card-body table-responsive p-0" style="height: 150%;">
                                                <table class="table table-bordered table-head-fixed text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: auto;">No</th>
                                                            <th style="width: auto;">Kategori Surat</th>
                                                            <th style="width: auto;">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($tbl_katsurat as $katsurat)
                                                            <tr>
                                                                <td><small>{{ $loop->iteration }}</small></td>
                                                                <td><small>{{ $katsurat->nama_kategori }}</small>
                                                                </td>
                                                                <td>
                                                                    <a class="fa fa-edit btn btn-xs btn-warning edit"
                                                                        href="#" id="{{ $katsurat->id_kategori }}">
                                                                    </a>
                                                                    <form
                                                                        action="/front_hapuskatsurat/{{ $katsurat->id_kategori }}"
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
                                <div class="col-lg-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Edit Form Kategori Surat --}}
    <div class="modal modal-blur fade" id="modal-editfrmkatsurat" tabindex="-1" role="dialog" aria-hidden="true">
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
                    url: '/front_editkatsurat',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(respond) {
                        $('#loadeditform').html(respond);
                    }
                });
                $("#modal-editfrmkatsurat").modal("show");
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
@endpush
