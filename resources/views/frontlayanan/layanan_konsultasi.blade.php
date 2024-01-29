@extends('dashboard.dash_sidebarbukutamu')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-12 col-sm-12 col-md-12">
            <nav class="navbar navbar-expand navbar-primary navbar-dark" style="padding-right: 0px">
                <ul class="navbar-nav" style="padding-right: 0px">
                    <li class="nav-item">
                        <a href="/frontlayanan_bukutamu" class="nav-link" style="padding-right: 0px"><i
                                class="fas fa-address-book mr-2"></i>Buku Tamu</a>
                    </li>
                    <li class="nav-item">
                        <a href="/frontlayanan_konsultasi" class="nav-link"><i
                                class="fas fa-calendar-alt mr-2"></i>Konsultasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="/frontlayanan_pengislaman" class="nav-link"><i
                                class="fas fa-concierge-bell mr-2"></i>Pengislaman</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row px-3 py-3">
        <div class="col-1 col-lg-1 col-sm-1 col-md-1"></div>
        <div class="col-10 col-lg-10 col-sm-10 col-md-10">
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
            <div class="card-header bg-dark"><strong>Jadwal Konsultasi</strong></div>
            <div class="card card-outline-tabs">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1"
                                                class="table table-bordered table-striped dataTable no-footer text-center"
                                                role="grid" aria-describedby="example1_info">
                                                <thead class="text-center">
                                                    <tr role="row">
                                                        <th style="width: auto;">No</th>
                                                        <th style="width: auto;">Tanggal</th>
                                                        <th style="width: auto;">Jam</th>
                                                        <th style="width: auto;">Nama Konsultan</th>
                                                        <th style="width: auto;">Jenis Konsultasi</th>
                                                        <th style="width: auto;">Status</th>
                                                        <th style="width: auto;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tbl_jadwalkonsultasi as $jadwalkonsultasi)
                                                        <tr class="odd">
                                                            <td width="10px" class="sorting_1">{{ $loop->iteration }}</td>
                                                            <td>{{ $jadwalkonsultasi->hari_fk }}/{{ $jadwalkonsultasi->tgl_fk }}
                                                            </td>
                                                            <td>{{ $jadwalkonsultasi->jam_fk }}</td>
                                                            <td>{{ $jadwalkonsultasi->nama_imam }}</td>
                                                            <td>{{ $jadwalkonsultasi->nama_jeniskonsultasi }}</td>
                                                            <td>
                                                                <span
                                                                    class="badge 
                                                                    @if ($jadwalkonsultasi->status === 1) bg-danger
                                                                    @else
                                                                        @if ($jadwalkonsultasi->status === null)
                                                                            bg-success @endif
                                                                    @endif">
                                                                    @if ($jadwalkonsultasi->status === 1)
                                                                        Terbooking
                                                                    @elseif ($jadwalkonsultasi->status === null)
                                                                        Masih Kosong
                                                                    @endif
                                                                </span>
                                                            </td>
                                                            <td class="text-center inline-block">
                                                                <a class="fa fa-edit btn btn-xs btn-primary edit"
                                                                    href="/loginuser" id="{{ $jadwalkonsultasi->id_fk }}">
                                                                    Daftar
                                                                </a>
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
        <div class="col-1 col-lg-1 col-sm-1 col-md-1"></div>
    @endsection
    @push('myscript')
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
