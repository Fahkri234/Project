@extends('layout.master')
@section('content')
    <!-- Single Slider -->
    <div class="single-slider slider-height d-flex align-items-center slide-bg">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="hero__caption">
                        <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Review Buku</h1>
                        <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">"Apakah Anda seorang pecinta
                            buku yang selalu haus akan cerita-cerita baru dan inspiratif? Di sini, kami menyajikan ulasan
                            mendalam tentang berbagai genre buku yang pastinya akan menambah daftar bacaan Anda. Mari
                            jelajahi dunia literasi bersama!"</p>
                        <!-- Hero-btn -->
                        <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                            <a href="{{ route('register') }}" class="btn hero-btn">Registrasi sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                    <div class="hero__img" data-animation="bounceIn" data-delay=".3s">
                        <img src="{{ asset('/Template/assets/img/ebook/ebook_content1.jpg') }}" width="380"
                            height="400" class=" heartbeat">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Slider -->
    <div class="single-slider slider-height d-flex align-items-center slide-bg">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div class="hero__caption">
                        <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Selamat Datang di Dunia
                            Literasi!</h1>
                        <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">"Di sini, kami percaya bahwa
                            setiap buku memiliki pembacanya. Temukan ulasan-ulasan yang jujur, mendalam, dan penuh wawasan
                            untuk membantu Anda menemukan buku berikutnya yang akan Anda cintai."</p>
                        <!-- Hero-btn -->
                        <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                            <a href="industries.html" class="btn hero-btn">Registrasi sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                    <div class="hero__img" data-animation="bounceIn" data-delay=".es">
                        <img src="{{ asset('/Template/assets/img/ebook/ebook_content1.jpg') }}" width="380"
                            height="400" class=" heartbeat">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
