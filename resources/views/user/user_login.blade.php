@extends('user.user_template')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
            <div class="text-center px-4"><img class="login-intro-img" src="{{ asset('app_ui/img/bg-img/login.png') }}"
                    alt="">
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
            <!-- Register Form-->
            <div class="register-form mt-4 px-4 mb-3">
                <h6 class="mb-3 text-center">Login untuk memilih jadwal</h6>
                <form action="/prosesloginuser" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Enter Password">
                    </div>
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                </form>
            </div>
            <!-- Login Meta-->
            <div class="login-meta-data text-center">
                <p class="mb-3">Apakah anda sudah punya akun ?<br>
                    <a class="stretched-link" href="/registeruser"><strong>Daftarkan diri anda !</strong>
                    </a>

                </p>
            </div>
        </div>
    </div>
@endsection
