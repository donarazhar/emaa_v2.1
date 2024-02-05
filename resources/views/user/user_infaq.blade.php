<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <link rel="shortcut icon" href="https://siap.al-azhar.id/upload/favicon.ico" type="image/x-icon">
    <!-- Title-->
    <title>Infaq a.n {{ $tbl_jamaahID->nama_user }}</title>
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('app_ui/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_ui/css/apexcharts.css') }}">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="{{ asset('app_ui/style.css') }}">
    <!-- Web App Manifest-->
    <link rel="manifest" href="{{ asset('app_ui/manifest.json') }}">
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}">
    </script>
    <script>
        function submitPaymentForm(donationId) {
            var snapToken = getSnapToken(donationId);

            if (snapToken) {
                snap.pay(snapToken, {
                    onSuccess: function(result) {
                        // Handle ketika pembayaran sukses
                        console.log(result);
                    },
                    onPending: function(result) {
                        // Handle ketika pembayaran masih tertunda
                        console.log(result);
                    },
                    onError: function(result) {
                        // Handle ketika pembayaran error
                        console.log(result);
                    }
                });
            } else {
                console.error('SnapToken is not available.');
            }
        }

        function getSnapToken(donationId) {
            // Dapatkan SnapToken dari hidden input
            var snapTokenInput = document.getElementById('snap-token-' + donationId);
            return snapTokenInput ? snapTokenInput.value : null;
        }
    </script>

</head>

<body>

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Header Content-->
            <div
                class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button-->
                <div class="back-button"><a href="/panel/frontlayanan_jadwalkonsultasi" style="color:#0d6efd;"><svg
                            width="32" height="32" viewBox="0 0 16 16" class="bi bi-arrow-left-short"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                        </svg></a></div>
                <!-- Page Title-->
                <div class="page-heading">
                    <h6 class="mb-0">Infaq a.n {{ $tbl_jamaahID->nama_user }}</h6>
                </div>
                <!-- Navbar Toggler-->
                <div class="navbar--toggler" id="affanNavbarToggler">
                    <div class="logo-wrapper">
                        <a href="#">
                            <img src="{{ asset('app_ui/img/bg-img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content-wrapper py-3">
        <div class="container">
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
            <!-- Cart Wrapper-->
            <div class="cart-wrapper-area">
                <form action="/panel/frontlayanan_tambahinfaq" method="POST">
                    @csrf
                    <div class="cart-table card mb-3">
                        <div class="table-responsive card-body">
                            <table class="table mb-0 text-center table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Nominal Infaq</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1.</th>
                                        <td>
                                            <h6 class="mb-1">Infaq Konsultasi</h6>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <a class="btn btn-info">Rp</a>
                                                    <input class="form-control input-group-text text-start"
                                                        type="text" name="infaqkonsultasi" id="infaqInputKonsultasi"
                                                        value="0">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2.</th>
                                        <td>
                                            <h6 class="mb-1">Infaq Pengislaman</h6>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <a class="btn btn-info">Rp</a>
                                                    <input class="form-control input-group-text text-start"
                                                        type="text" name="infaqpengislaman"
                                                        id="infaqInputPengislaman" value="0">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3.</th>
                                        <td>
                                            <h6 class="mb-1">Infaq Operasional</h6>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <a class="btn btn-info">Rp</a>
                                                    <input class="form-control input-group-text text-start"
                                                        type="text" name="infaqoperasional"
                                                        id="infaqInputOperasional" value="0">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4.</th>
                                        <td>
                                            <h6 class="mb-1">Infaq Peduli Yatim & Dhuafa</h6>
                                            <small>Program Ramadan 1445 H</small>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <a class="btn btn-info">Rp</a>
                                                    <input class="form-control input-group-text text-start"
                                                        type="text" name="infaqyatim" id="infaqInputYatim"
                                                        value="0">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5.</th>
                                        <td>
                                            <h6 class="mb-1">Infaq Buka Puasa Harian</h6>
                                            <small>Program Ramadan 1445 H</small>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <a class="btn btn-info">Rp</a>
                                                    <input class="form-control input-group-text text-start"
                                                        type="text" name="infaqbukapuasa" id="infaqInputBukapuasa"
                                                        value="0">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>
                                            <h6 class="mb-1"><strong>TOTAL DONASI</strong></h6>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <a class="btn btn-info">Rp</a>
                                                    <input class="form-control" type="text" name="jumlah"
                                                        id="jumlah" value="0" readonly>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" name="snap_token" id="snap-token"
                            value="{{ $updatedData->snap_token ?? '' }}">
                        <div class="card-body border-top">
                            <p class="mb-2"><strong>Pesan atau Doa yang ingin disampaikan !</strong></p>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control input-group-text text-start form-control-clicked"
                                        type="text" placeholder="Masukkan pesan atau doa anda !" name="pesan">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info w-100 mt-4" value="Simpan Donasi">
                        </div>
                    </div>
                </form>
            </div>

            <div class="cart-wrapper-area">
                <div class="cart-table card mb-3">
                    <div class="table-responsive card-body">
                        <table class="table mb-0 text-center table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis Infaq</th>
                                    <th>Waktu</th>
                                    <th>Pesan</th>
                                    <th>Jumlah Donasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!$tbl_bayarDonasi->isEmpty())
                                    @foreach ($tbl_bayarDonasi as $bayar)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>
                                                <h6>
                                                    @if ($bayar->infaqkonsultasi != 0)
                                                        {{ 'IKSL' }}
                                                    @endif

                                                    @if ($bayar->infaqpengislaman != 0)
                                                        {{ 'IPGI' }}
                                                    @endif

                                                    @if ($bayar->infaqoperasional != 0)
                                                        {{ 'IOPS' }}
                                                    @endif

                                                    @if ($bayar->infaqyatim != 0)
                                                        {{ 'IYTM' }}
                                                    @endif

                                                    @if ($bayar->infaqbukapuasa != 0)
                                                        {{ 'IBKP' }}
                                                    @endif
                                                </h6>
                                            </td>
                                            <td>{{ date('d-m-Y', strtotime($bayar->created_at)) }}</td>
                                            <td style="overflow-x: auto; max-width: 100px;">{{ $bayar->pesan }}</td>
                                            <td>
                                                <h6 class="mb-1">Rp. {{ number_format($bayar->jumlah) }} ,-</h6>
                                            </td>
                                            <td>
                                                <form id="payment-form-{{ $bayar->id_infaq }}" class="payment-form">
                                                    @csrf
                                                    <input type="hidden" name="donation_id"
                                                        value="{{ $bayar->id_infaq }}">
                                                    <input type="hidden" id="snap-token-{{ $bayar->id_infaq }}"
                                                        value="{{ $bayar->snap_token }}">
                                                    <button type="button"
                                                        class="btn btn-info btn-sm w-100 mt-4 pay-button"
                                                        onclick="submitPaymentForm('{{ $bayar->id_infaq }}')">
                                                        Bayar
                                                    </button>
                                                </form>
                                            </td>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">Tidak ada data donasi saat ini</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .footer-nav ul li.active a span {
            color: #0d6efd;
        }

        .footer-nav ul li.active a {
            color: #0d6efd;
        }
    </style>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
        <div class="container px-0">
            <!-- Footer Content-->
            <div class="footer-nav position-relative">
                <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                    <li>
                        <a href="/panel/frontlayanan_jadwalkonsultasi">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                <path
                                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>
                            <span>Jadwal</span></a>
                    </li>
                    <li>
                        <a href="/panel/dashboarduser">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                <path
                                    d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z" />
                            </svg>
                            <span>History</span></a>
                    </li>
                    <li class="active"><a href="/panel/frontlayanan_infaq">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-collection-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1" />
                            </svg>
                            <span>Infaq</span></a></li>
                    <li><a href="/panel/frontlayanan_program">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
                                <path
                                    d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11" />
                            </svg>
                            <span>Program</span></a></li>
                    <li><a href="/panel/proseslogoutuser">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1" />
                            </svg>
                            <span>Logout</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="{{ asset('app_ui/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/default/internet-status.js') }}"></script>
    <script src="{{ asset('app_ui/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/wow.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/default/dark-mode-switch.js') }}"></script>
    <script src="{{ asset('app_ui/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app_ui/js/default/active.js') }}"></script>
    <script src="{{ asset('app_ui/js/default/clipboard.js') }}"></script>
    <!-- PWA-->
    <script src="{{ asset('app_ui/js/pwa.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Konfigurasi jQuery Mask Plugin
            $('#infaqInputKonsultasi').mask('000,000,000', {
                reverse: true
            });
            $('#infaqInputPengislaman').mask('000,000,000', {
                reverse: true
            });
            $('#infaqInputOperasional').mask('000,000,000', {
                reverse: true
            });
            $('#infaqInputYatim').mask('000,000,000', {
                reverse: true
            });
            $('#infaqInputBukapuasa').mask('000,000,000', {
                reverse: true
            });
        });
    </script>
    <script>
        // Function untuk menghilangkan tanda titik dari nilai input
        function unmaskValue(value) {
            return value.replace(/\./g, '').replace(/,/g, '');
        }

        // Function untuk format angka menjadi number_format
        function formatNumber(number) {
            return new Intl.NumberFormat('id-ID').format(number);
        }

        // Function untuk menghitung jumlah dan memasukkan nilai ke input jumlah
        function hitungJumlah() {
            // Ambil nilai dari input infaqkonsultasi, infaqpengislaman, dan infaqoperasional
            var infaqKonsultasi = unmaskValue($('#infaqInputKonsultasi').val()) || 0;
            var infaqPengislaman = unmaskValue($('#infaqInputPengislaman').val()) || 0;
            var infaqOperasional = unmaskValue($('#infaqInputOperasional').val()) || 0;
            var infaqYatim = unmaskValue($('#infaqInputYatim').val()) || 0;
            var infaqBukapuasa = unmaskValue($('#infaqInputBukapuasa').val()) || 0;

            // Hitung total donasi
            var totalDonasi = parseInt(infaqKonsultasi) + parseInt(infaqPengislaman) + parseInt(infaqOperasional) +
                parseInt(infaqYatim) + parseInt(infaqBukapuasa);

            // Format hasil ke format number_format dan masukkan ke input jumlah
            $('#jumlah').val(formatNumber(totalDonasi));
        }

        // Panggil fungsi hitungJumlah() saat nilai input berubah
        $(document).ready(function() {
            $('#infaqInputKonsultasi').mask('000,000,000', {
                reverse: true
            });
            $('#infaqInputPengislaman').mask('000,000,000', {
                reverse: true
            });
            $('#infaqInputOperasional').mask('000,000,000', {
                reverse: true
            });
            $('#infaqInputYatim').mask('000,000,000', {
                reverse: true
            });
            $('#infaqInputBukapuasa').mask('000,000,000', {
                reverse: true
            });

            $('#infaqInputKonsultasi').on('input', hitungJumlah);
            $('#infaqInputPengislaman').on('input', hitungJumlah);
            $('#infaqInputOperasional').on('input', hitungJumlah);
            $('#infaqInputYatim').on('input', hitungJumlah);
            $('#infaqInputBukapuasa').on('input', hitungJumlah);
        });
    </script>
</body>

</html>
