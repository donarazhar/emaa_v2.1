@extends('dashboard.dash_sidebar')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <i class=" fas fa-caret-right nav-icon">&nbsp;&nbsp;Data Marbout</i>
                        </div>
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="card card-dark card-outline">
                                    <div class="card-body text-left">
                                        <a href="/dash_marbout/ddmarbout" type="button"
                                            class="btn btn-primary btn-sm btn-flat">
                                            <i class=" fa fa-plus"></i>Tambah</a>
                                    </div>
                                    <div class="card-body text-left">
                                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="example1"
                                                        class="table table-bordered table-striped dataTable no-footer"
                                                        role="grid" aria-describedby="example1_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th style="width: auto;">No</th>
                                                                <th style="width: auto;">Foto</th>
                                                                <th style="width: auto;">NIP</th>
                                                                <th style="width: auto;">Nama</th>
                                                                <th style="width: auto;">Unit Kerja</th>
                                                                <th style="width: auto;">TTL</th>
                                                                <th style="width: auto;">Alamat</th>
                                                                <th style="width: auto;">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($tbl_marbout as $marbout)
                                                                <tr class="odd">
                                                                    <td class="sorting_1">
                                                                        {{ $loop->iteration + $tbl_marbout->firstItem() - 1 }}
                                                                    </td>
                                                                    <td class="text-center"><img
                                                                            src="{{ asset('adminlte/img/logo.png') }}"
                                                                            width="80px"></td>
                                                                    <td>{{ $marbout->nip }}</td>
                                                                    <td class="text-left">
                                                                        <a href="#" class="detailMarbout"
                                                                            id="{{ $marbout->id_user }}">
                                                                            <strong>{{ $marbout->nama_user }}</strong>
                                                                        </a>
                                                                    </td>
                                                                    <td>{{ $marbout->nama_unitkerja }}</td>
                                                                    <td>{{ $marbout->tempat_lahir }},
                                                                        {{ date('d-m-Y'), strtotime($marbout->tgl_lahir) }}
                                                                    </td>
                                                                    <td>{{ $marbout->alamat }}
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a class="fa fa-edit btn btn-xs btn-warning"></a>
                                                                        <button
                                                                            class="fa fa-trash-alt btn btn-xs btn-danger"
                                                                            data-toggle="modal" data-target=""></button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    {{ $tbl_marbout->links('pagination::bootstrap-5') }}
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
        </div>
    </section>

    {{-- Modal Detail Marbout --}}
    <div class="modal modal-blur fade" id="modal-detailmarbout" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Marbout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
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
            $(".detailMarbout").click(function() {
                var id = $(this).attr('id');
                $.ajax({
                    type: 'POST',
                    url: '/dash_detailmarbout',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(respond) {
                        $('#loadeditform').html(respond);
                    }
                });
                $("#modal-detailmarbout").modal("show");
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
