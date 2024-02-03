@extends('user.user_templatelight')
@section('content')
    <section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
        <div class="color-block d-none d-lg-block"></div>
        <div class="row home-details-container align-items-center">
            <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
            <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                <div>
                    <img src="{{ asset('light/img/img-mobile-light.jpg') }}"
                        class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                    <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">Assalamu'alaikum !</h6>
                    <h1 class="text-uppercase poppins-font">Masjid Agung Al Azhar</h1>
                    <p class="open-sans-font">Menyampaikan salam takzim, semoga ALLAH S.W.T selalu memberikan
                        kesehatan, dan keberkahan kepada kita semua. Selanjutnya silahkan Register data untuk lebih dekat
                        kepada kami.</p>
                    <a href="/registerjamaah" class="btn btn-about">Register sekarang</a>
                </div>
            </div>
        </div>
    </section>
@endsection
