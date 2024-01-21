@extends('dashboard.dash_sidebar')
@section('content')
    <div class="container-fluid">
        <div class="box box-primary box-solid">
            <div class="card card-dark">
                <div class="card-header">
                    <i class="fas fa-exchange-alt nav-icon">&nbsp;&nbsp;&nbsp;&nbsp;Riwayat Mutasi Marbout</i>
                </div>
                <div class="box-body">
                    <div class="card-body">
                        <div class="card card-dark card-outline px-2">

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
                                <div class="col-lg-1"></div>
                                {{-- Input Mutasi --}}
                                <div class="col-lg-10">
                                    <div class="modal-body">
                                        <form action="marbout_tambahmutasi" enctype="multipart/form-data" method="post"
                                            accept-charset="utf-8">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-1"></div>
                                                <div class="col-lg-5">
                                                    <div class="form-group row">
                                                        <label for="namamarbout" class="col-lg-4 col-form-label ">Nama
                                                            Marbout</label>
                                                        <div class="col-lg-8">
                                                            <select id="idmarbout" class="form-control" name="idmarbout"
                                                                required>
                                                                <option value="">...</option>
                                                                @foreach ($tbl_marbout as $marbout)
                                                                    <option value="{{ $marbout->id_marbout }}">
                                                                        {{ $marbout->nama_user }} - {{ $marbout->nip }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="form-group row">
                                                        <label for="jenismutasi" class="col-lg-4 col-form-label ">Jenis
                                                            Mutasi</label>
                                                        <div class="col-lg-8">
                                                            <select name="jenismutasi" class="default-select2 form-control">
                                                                <option value="">...</option>
                                                                <option value="Masuk">Masuk</option>
                                                                <option value="Keluar">Keluar</option>
                                                                <option value="Pindah Antar Instansi">Pindah Antar Instansi
                                                                </option>
                                                                <option value="Pensiun">Pensiun</option>
                                                                <option value="Wafat">Wafat</option>
                                                                <option value="Kenaikan Pangkat">Kenaikan Pangkat</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-1"></div>
                                                <div class="col-lg-5">
                                                    <div class="form-group row">
                                                        <label for="noskmutasi" class="col-lg-4 col-form-label">No SK
                                                            Mutasi</label>
                                                        <div class="col-lg-8">
                                                            <input name="noskmutasi" type="text" class="form-control"
                                                                id="noskmutasi">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="form-group row">
                                                        <label for="tglskmutasi" class="col-lg-4 col-form-label">Tanggal
                                                            SK</label>
                                                        <div class="col-lg-8">
                                                            <input name="tglskmutasi" type="date"
                                                                class="form-control text-left" id="tglskmutasi">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-1"></div>
                                                <div class="col-lg-10">
                                                    <div class="form-group row">
                                                        <label for="keteranganmutasi"
                                                            class="col-lg-2 col-form-label">Keterangan</label>
                                                        <div class="col-lg-10">
                                                            <input name="keteranganmutasi" type="text"
                                                                class="form-control" id="keteranganmutasi">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1"></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-1"></div>
                                                <div class="col-lg-10">
                                                    <div class="form-group row">
                                                        <label for="foto" class="col-lg-2 col-form-label">File
                                                            SK
                                                            Mutasi</label>
                                                        <div class="col-lg-6">
                                                            <input type="file" name="foto" id="foto"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <button type="submit" name="save" value="save"
                                                                class="btn btn-primary"><i class="fas fa-save"></i>
                                                                &nbsp;Save</button>&nbsp;
                                                            <a type="button" class="btn btn-default active"
                                                                href=""><i class="fas fa-undo"></i>&nbsp;Cancel</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>

                            {{-- Datatables Mutasi --}}
                            <div class="card card-dark card-outline">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table id="example1"
                                            class="table table-bordered table-striped dataTable no-footer" role="grid"
                                            aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th style="width: auto;">No</th>
                                                    <th style="width: auto;">Foto</th>
                                                    <th style="width: auto;;">Nama Marbout</th>
                                                    <th style="width: auto;;">Mutasi</th>
                                                    <th style="width: auto;;">No SK &amp; Tgl Mutasi</th>
                                                    <th style="width: auto;;">Keterangan</th>
                                                    <th style="width: auto;x;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tbl_mutasi as $mutasi)
                                                    <tr class="odd">
                                                        <td class="sorting_1">{{ $loop->iteration }}</td>
                                                        <td class="text-center">
                                                            @php
                                                                $path = Storage::url('uploads/marbout/mutasi/' . $mutasi->filesk_mutasi);
                                                            @endphp

                                                            @if (empty($mutasi->filesk_mutasi))
                                                                <img src="{{ asset('adminlte/img/nophoto.png') }}"
                                                                    width="80px">
                                                            @else
                                                                <img src="{{ $path }}" width="40px">
                                                            @endif
                                                        </td>
                                                        <td>{{ $mutasi->nama_user }}</td>
                                                        <td>{{ $mutasi->jenis_mutasi }}</td>
                                                        <td>{{ $mutasi->nosk_mutasi }} /
                                                            {{ date('d-m-Y', strtotime($mutasi->tglsk_mutasi)) }}</td>
                                                        <td>{{ $mutasi->keterangan_mutasi }}</td>
                                                        <td class="text-center">
                                                            <a class="fa fa-edit btn btn-xs btn-warning edit"
                                                                href="#" id="{{ $mutasi->id_mutasi }}">
                                                            </a>
                                                            <form action="/marbout_hapusmutasi/{{ $mutasi->id_mutasi }}"
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

    {{-- Modal Edit Mutasi --}}
    <div class="modal modal-blur fade" id="modal-editfrmmutasi" tabindex="-1" role="dialog" aria-hidden="true">
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
                    url: '/marbout_editmutasi',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(respond) {
                        $('#loadeditform').html(respond);
                    }
                });
                $("#modal-editfrmmutasi").modal("show");
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
