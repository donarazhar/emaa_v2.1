<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://siap.al-azhar.id/upload/favicon.ico" type="image/x-icon">
    <title>E-Maa v2.1 | Daftar User</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css?v=3.2.0') }}">

</head>

<body class="login-page" style="min-height: 120%;">

    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img class="img-profile rounded-circle mr-2" src="{{ asset('adminlte/img/logo.png') }}"
                    style="width:100px">
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
                <p class="login-box-msg">Masukkan Biodata Anda !</p>
                <form action="/prosesdaftar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="namalengkap" class="form-control" name="namalengkap" placeholder="Nama Lengkap"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="nohp" class="form-control" name="nohp" placeholder="No Handphone" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="foto" class="col-lg-12 col-form-label text-left">Pas
                            Photo</label>
                        <input type="file" class="form-control" name="foto" accept="image/*"
                            placeholder="Pas Photo" class="form-control" id="fileInput" onchange="previewFile()">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-image"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="col-lg-12 text-center">
                            <img src="{{ asset('adminlte/img/preview.png') }}" alt="Preview" id="previewImage"
                                style="max-width: 100%; max-height: 200px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-2">
                            <button type="submit" class="btn btn-primary btn-block"><i
                                    class="fas fa-arrow-alt-circle-right mr-2"></i>Daftar</button>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <a href="/login" type="submit" class="btn btn-primary btn-block"><i
                                    class="fas fa-angle-double-left mr-2"></i>Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
    <script>
        function previewFile() {
            var preview = document.getElementById('previewImage');
            var fileInput = document.getElementById('fileInput');
            var file = fileInput.files[0];

            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
    </script>
</body>

</html>
