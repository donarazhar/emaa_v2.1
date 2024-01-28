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
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="card card-dark card-outline">
                                    <div class="card-body text-left">
                                        <button type="button" class="btn btn-primary btn-sm btn-flat" data-toggle="modal"
                                            data-target="#modal-frmmarbout">
                                            <i class=" fa fa-plus"></i>&nbsp;&nbsp;Masukkan Data Baru</button>
                                    </div>
                                    {{-- Datatable Marbout --}}
                                    <div class="card-body text-left">
                                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table
                                                        class="table table-responsive table-bordered table-striped dataTable no-footer"
                                                        role="grid" aria-describedby="example1_info" id="example1">
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
                                                                        {{ $loop->iteration }}
                                                                    </td>
                                                                    <td class="text-center">
                                                                        @php
                                                                            $path = Storage::url('uploads/marbout/' . $marbout->foto_user);
                                                                        @endphp

                                                                        @if (empty($marbout->foto_user))
                                                                            <img src="{{ asset('adminlte/img/preview.png') }}"
                                                                                width="80px">
                                                                        @else
                                                                            <img src="{{ $path }}" width="80px">
                                                                        @endif

                                                                    </td>
                                                                    <td>{{ $marbout->nip }}</td>
                                                                    <td class="text-left">
                                                                        <a href="/marbout_detail/{{ $marbout->id_user }}">
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
                                                                        <a class="fa fa-edit btn btn-xs btn-warning edit"
                                                                            href="#" id="{{ $marbout->id_marbout }}">
                                                                        </a>
                                                                        <form
                                                                            action="/marbout_hapus/{{ $marbout->id_marbout }}"
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
            </div>
        </div>
    </section>

    {{-- Modal Input Marbout --}}
    <div class="modal modal-blur fade" id="modal-frmmarbout" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="box box-primary box-solid">
                        <div class="card card-dark mt-2">
                            <div class="card-header">
                                <i class="fas fa-scroll nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Menambah Data</i>
                            </div>
                            <div class="box-body">
                                <form action="/marbout_tambah" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="card card-outline">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label for="namamarbout"
                                                                class="col-lg-3 col-form-label text-left">Nama
                                                                Lengkap</label>
                                                            <div class="col-lg-9">
                                                                <select id="id_user" class="form-control" name="id_user"
                                                                    required>
                                                                    <option value="">...</option>
                                                                    @foreach ($tbl_user as $user)
                                                                        <option value="{{ $user->id_user }}">
                                                                            {{ $user->nama_user }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="namamarbout"
                                                                class="col-lg-3 col-form-label text-left">Unit
                                                                Kerja</label>
                                                            <div class="col-lg-9">
                                                                <select id="id_unitkerja" class="form-control"
                                                                    name="id_unitkerja" required>
                                                                    <option value="">...</option>
                                                                    @foreach ($tbl_unitkerja as $unit)
                                                                        <option value="{{ $unit->id_unitkerja }}">
                                                                            {{ $unit->nama_unitkerja }}</option>
                                                                    @endforeach
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="nip"
                                                                class="col-lg-3 col-form-label text-left">NIP</label>
                                                            <div class="col-lg-9">
                                                                <input name="nip" type="text" class="form-control"
                                                                    id="nip" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <div class="form-group row">
                                                                    <label for="tempatlahir"
                                                                        class="col-lg-7 col-form-label text-left">Tempat,
                                                                        Tgl Lahir</label>
                                                                    <div class="col-lg-5">
                                                                        <input name="tempatlahir" type="text"
                                                                            class="form-control" id="tempatlahir"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group row">
                                                                    <div class="col-lg-12">
                                                                        <input name="tgllahir" type="date"
                                                                            class="form-control text-left" id="tgllahir"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="jenkel"
                                                                class="col-lg-3 col-form-label text-left">Jenis
                                                                Kelamin</label>
                                                            <div class="col-lg-9">
                                                                <select name="jenkel"
                                                                    class="default-select2 form-control" required>
                                                                    <option value="">...</option>
                                                                    <option value="Laki-laki">Laki-laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="goldar"
                                                                class="col-lg-3 col-form-label text-left">Golongan
                                                                Darah</label>
                                                            <div class="col-lg-9">
                                                                <select name="goldar"
                                                                    class="default-select2 form-control" required>
                                                                    <option value="">...</option>
                                                                    <option value="A">A</option>
                                                                    <option value="B">B</option>
                                                                    <option value="O">O</option>
                                                                    <option value="AB">AB</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="statusnikah"
                                                                class="col-lg-3 col-form-label text-left">Status
                                                                Pernikahan</label>
                                                            <div class="col-lg-9">
                                                                <select name="statusnikah"
                                                                    class="default-select2 form-control" required>
                                                                    <option value="">...</option>
                                                                    <option value="Nikah">Nikah</option>
                                                                    <option value="Belum Nikah">Belum Nikah</option>
                                                                    <option value="Cerai">Cerai</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="statuskepeg"
                                                                class="col-lg-3 col-form-label text-left">Status
                                                                Kepegawaian</label>
                                                            <div class="col-lg-9">
                                                                <select name="statuskepeg"
                                                                    class="default-select2 form-control" required>
                                                                    <option value="">...</option>
                                                                    <option value="KTY">KTY</option>
                                                                    <option value="KTD">KTD</option>
                                                                    <option value="Honorer">Honorer</option>
                                                                    <option value="Pegawai Lepas">Pegawai Lepas
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="alamat"
                                                                class="col-lg-3 col-form-label text-left">Alamat
                                                                lengkap</label>
                                                            <div class="col-lg-9">
                                                                <textarea name="alamat" cols="20" rows="5" maxlength="255" class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label text-left"></label>
                                                        <div class="col-md-9">
                                                            <button type="submit" name="save" value="save"
                                                                class="btn btn-primary"><i class="fas fa-save"></i>
                                                                &nbsp;Simpan</button>&nbsp;
                                                            <a type="button" class="btn btn-default active"
                                                                href="/marbout_index"><i
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
            </div>
        </div>
    </div>


    {{-- Modal Edit Form Marbout --}}
    <div class="modal modal-blur fade" id="modal-editfrmmarbout" tabindex="-1" role="dialog" aria-hidden="true">
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
                    url: '/marbout_edit',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(respond) {
                        $('#loadeditform').html(respond);
                    }
                });
                $("#modal-editfrmmarbout").modal("show");
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
