<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'LMS') }}</title>

        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">

        <!-- Additional CSS Files -->
        <link type="text/css" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('frontend/assets/css/slicknav.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('frontend/assets/css/flaticon.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('frontend/assets/css/animate.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('frontend/assets/css/animated-headline.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('frontend/assets/css/themify-icons.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('frontend/assets/css/slick.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('frontend/assets/css/nice-select.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="{{ $class ?? '' }}">
        <!-- ? Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/loder.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    <!-- Preloader Start -->
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
        
        <div class="main-content">
            @include('layouts.navbars.frontnavbar')
            @yield('content')
        </div>

        <!-- Footer -->
        @guest()
            @include('layouts.footers.guestfooter')
        @endguest
        <!-- End Footer -->


        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        

        <script src="{{ asset('/frontend/assets/js/tabs.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        
        <!-- Jquery Mobile Menu -->
        <script src="{{ asset('/frontend/assets/js/jquery.slicknav.min.js') }}"></script>
   
        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('/frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/slick.min.js') }}"></script>

        <!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('/frontend/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/jquery.magnific-popup.js') }}"></script>
     
        <!-- Date Picker -->
        <script src="{{ asset('/frontend/assets/js/gijgo.min.js') }}"></script>

        <!-- Nice-select, sticky -->
        <script src="{{ asset('/frontend/assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/jquery.sticky.js') }}"></script>

        <!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('/frontend/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('/frontend/assets/js/main.js') }}"></script>

        @stack('js')
        
    </body>
</html>