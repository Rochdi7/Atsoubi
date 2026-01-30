<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Atsoubi')</title>

    {{-- Responsive --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    {{-- Favicons --}}
    <link rel="shortcut icon" href="{{ asset('assets/frontoffice/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/frontoffice/images/favicon.png') }}" type="image/x-icon">

    {{-- Stylesheets (Superio) --}}
    <link href="{{ asset('assets/frontoffice/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontoffice/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontoffice/css/responsive.css') }}" rel="stylesheet">

    @stack('styles')

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <script src="{{ asset('assets/frontoffice/js/respond.js') }}"></script>
    <![endif]-->
</head>

<body data-anm=".anm">

    <div class="page-wrapper">

        {{-- Preloader --}}
        <div class="preloader"></div>

        {{-- Header --}}
        @includeIf('frontoffice.partials.header')

        {{-- Page Content --}}
        @yield('content')

        {{-- Footer --}}
        @includeIf('frontoffice.partials.footer')

    </div><!-- End Page Wrapper -->

    {{-- Scripts (Superio) --}}
    <script src="{{ asset('assets/frontoffice/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/chosen.min.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/jquery.modal.min.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/mmenu.polyfills.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/mmenu.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/appear.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/anm.min.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/rellax.min.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/owl.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/wow.js') }}"></script>
    <script src="{{ asset('assets/frontoffice/js/script.js') }}"></script>

    @stack('scripts')
</body>

</html>
