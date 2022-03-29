<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'LMS') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('assets') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
   
        <!-- Icons -->
        <link href="{{ asset('assets') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('assets') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('assets') }}/css/argon.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets') }}/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">



        @livewireStyles

        <!-- Custom CSS -->
    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth
        
        <div class="main-content">
            @include('layouts.navbars.navbar')
      
            {{ $slot }}
        </div>

        @guest()
            @include('layouts.footers.guest')
        @endguest

        <script src="{{ asset('assets') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('assets') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        @livewireScripts

        @stack('child-scripts')

        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    </body>
</html>