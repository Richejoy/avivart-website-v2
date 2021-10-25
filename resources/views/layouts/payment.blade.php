<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="ZfxY-rbHjCOQfeNrQTT-4OA03jPPQQAPqz-kqMToyhQ" />

    @include('meta::manager', [
        'title' => fullPageTitle($title, 'Payement'),
    ])

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://avivart.net/ecosoft/libs/css/all.css" />

    @stack('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/payment.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/avivart.css') }}">
</head>

<body>

    @livewire('payment.header')

    <main>
        @yield('body')
    </main>

    @livewire('payment.footer')

    <script type="text/javascript" src="{{ asset('js/laroute.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')

    <script type="text/javascript" src="{{ asset('js/payment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/avivart.js') }}"></script>
</body>

</html>