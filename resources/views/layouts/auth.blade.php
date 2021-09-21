<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta NAME="TITLE" CONTENT="AVIV'ART" />
    <meta NAME="AUTHOR" CONTENT="VIVA AKUE" />
    <meta NAME="DESCRIPTION" CONTENT="AVIV'ART Annonces" />
    <meta NAME="KEYWORDS" CONTENT="Automobile, Immobilier, Cosmétique, Agrobusiness" />
    <meta NAME="OWNER" CONTENT="VIVA AKUE" />
    <meta NAME="ROBOTS" CONTENT="index,all">
    <meta NAME="Reply-to" CONTENT="viva-akue@outlook.fr" />
    <meta NAME="REVISIT-AFTER" CONTENT="15" />

    <meta name="google-site-verification" content="ZfxY-rbHjCOQfeNrQTT-4OA03jPPQQAPqz-kqMToyhQ" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>{{ config('app.name') }} - Authentification - {{ pageTitle($title) }}</title>

    <link href="{{ asset('public/plugins/introLoader/dist/css/introLoader.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://avivart.net/ecosoft/libs/css/all.css" />

    @stack('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/auth.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/avivart.css') }}">

    @livewireStyles
</head>

<body>

    <div id="introLoading" class="introLoading"></div>

    @livewire('auth.header')

    <main role="main">
        @yield('body')

        <x-modules />
    </main>

    @livewire('auth.footer')

    @production
    <script type="text/javascript" src="{{ asset('public/js/tawk.js') }}"></script>
    @endproduction

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('public/plugins/introLoader/dist/helpers/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('public/plugins/introLoader/dist/helpers/spin.min.js') }}"></script>
    <script src="{{ asset('public/plugins/introLoader/dist/jquery.introLoader.js') }}"></script>

    <script type="text/javascript" src="https://avivart.net/ecosoft/libs/js/jquery-active-page.js"></script>

    @stack('scripts')

    <script type="text/javascript" src="{{ asset('public/js/laroute.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/js/utils.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/auth.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/avivart.js') }}"></script>

    @livewireScripts

    @include('flashy::message')

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>

</html>