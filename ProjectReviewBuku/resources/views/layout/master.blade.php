<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eBook</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/Template/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/Template/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/Template/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/Template/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('/Template/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/Template/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/Template/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/Template/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/Template/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/Template/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/Template/assets/css/style.css') }}">
    @stack('styles')
</head>

<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('/Template/assets/img/ebook/ebook.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <!-- Header Start -->
    @include('partial.header')
    <!-- Header End -->
    {{-- main --}}
    <main>
        <!--? slider Area Start -->
        <div class="slider-area ">
            <div class="slider-active">
                @yield('content')
            </div>
        </div>
        <!-- slider Area End-->
        <!-- ? New Product Start -->
        <!--  New Product End -->
    </main>
    {{-- end main --}}
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="footer-copy-right">
                            <p>eBook</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-5">
                        <div class="footer-copy-right f-right">
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->

    <script src="{{ asset('/Template/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('/Template/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('/Template/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('/Template/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/slick.min.js') }}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('/Template/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('/Template/assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('/Template/assets/js/contact.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('/Template/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/Template/assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
