@extends('user.user_template')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
            <div class="text-center px-4"><img class="login-intro-img" src="{{ asset('app_ui/img/bg-img/login.png') }}"
                    alt=""></div>
            <!-- Register Form-->
            <div class="register-form mt-4 px-4">
                <h6 class="mb-3 text-center">Daftar untuk memilih jadwal</h6>
                <form action="page-otp.html">
                    <div class="form-group text-start mb-3">
                        <input class="form-control" type="text" placeholder="Email address">
                    </div>
                    <div class="form-group text-start mb-3">
                        <input class="form-control" type="text" placeholder="Username">
                    </div>
                    <div class="form-group text-start mb-3">
                        <input class="form-control input-psswd" id="registerPassword" type="password"
                            placeholder="New password">
                    </div>

                    <button class="btn btn-primary w-100" type="submit">Daftar Akun</button>
                </form>
            </div>
            <!-- Login Meta-->
            <div class="login-meta-data text-center">
                <p class="mt-3 mb-0">Anda sudah memiliki akun ?
                    <br>
                    <a class="stretched-link" href="/loginuser">Kembali kehalaman Login !</a>
                </p>
            </div>
        </div>
    </div>
@endsection
