<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="ZfxY-rbHjCOQfeNrQTT-4OA03jPPQQAPqz-kqMToyhQ" />

    @include('meta::manager', [
        'title' => fullPageTitle($title, 'Cosmétique'),
    ])

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{ asset('plugins/introLoader/dist/css/introLoader.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/loadMoreResults/css/loadMoreResults.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css"
        integrity="sha512-SJw7jzjMYJhsEnN/BuxTWXkezA2cRanuB8TdCNMXFJjxG9ZGSKOX5P3j03H6kdMxalKHZ7vlBMB4CagFP/de0A=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" />

    <!-- cookiealert styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/back2top.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('plugins/circle-indicator-spinner/dist/jquery-spinner.min.css') }}">

        <link rel="stylesheet" href="https://avivart.net/ecosoft/libs/css/all.css" />

    @stack('styles')

    @if(!session()->has('splashscreen'))
    <link rel="stylesheet" type="text/css" href="{{ asset('css/splashscreen.css') }}">
    @endif
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cosmetic.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/avivart.css') }}">

    @livewireStyles
</head>

<body id="body">

    @if(session()->has('splashscreen'))

        <div id="introLoading" class="introLoading"></div>
    
        @livewire('cosmetic.header', ['title' => $title])

        <main>
            @yield('body')

            <x-modules />

            @include('layouts.partials.cosmetic._video_modal')

            <button id="back2top">Top page</button>

            <!-- START Bootstrap-Cookie-Alert -->
            <div class="alert text-center cookiealert" role="alert">
                <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="{{ route('page.terms') }}" target="_blank">Learn more</a>

                <button type="button" class="btn btn-primary btn-sm acceptcookies">
                    I agree
                </button>
            </div>
            <!-- END Bootstrap-Cookie-Alert -->
        </main>

        @livewire('cosmetic.footer')

    @else

        <x-splash />

    @endif

    @production
    <script type="text/javascript" src="{{ asset('js/tawk.js') }}"></script>
    @endproduction

    <script type="text/javascript" src="{{ asset('js/laroute.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript" src="{{ asset('plugins/jquery.lazyrate/js/jquery.lazyrate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/loadMoreResults/js/loadMoreResults.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('plugins/jquery.simpleLoadMore/js/jquery.simpleLoadMore.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('plugins/jQuery-Plugin-To-Fix-Any-Elements-On-The-Top-Fixit/js/jquery.fixit.js') }}"></script>

    <!-- Include cookiealert script -->
    <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

    <script type="text/javascript" src="{{ asset('plugins/back2top/back2top.min.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript" src="{{ asset('plugins/circle-indicator-spinner/dist/jquery-spinner.min.js') }}"></script>

    <script src="{{ asset('plugins/introLoader/dist/helpers/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('plugins/introLoader/dist/helpers/spin.min.js') }}"></script>
    <script src="{{ asset('plugins/introLoader/dist/jquery.introLoader.js') }}"></script>
    <script type="text/javascript" src="https://avivart.net/ecosoft/libs/js/jquery-active-page.js"></script>

    @stack('scripts')
    
    <script type="text/javascript" src="{{ asset('js/utils.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cosmetic.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/avivart.js') }}"></script>

    @livewireScripts

    @include('flashy::message')

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>

</html>