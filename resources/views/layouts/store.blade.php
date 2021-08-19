<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta NAME="TITLE" CONTENT="AVIV'ART" />
    <meta NAME="AUTHOR" CONTENT="VIVA AKUE" />
    <meta NAME="DESCRIPTION" CONTENT="AVIV'ART Boutique" />
    <meta NAME="KEYWORDS" CONTENT="Aliments Bio, Aliments Manufacturés, Electro-Ménager, High-Tech" />
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css"
        integrity="sha512-SJw7jzjMYJhsEnN/BuxTWXkezA2cRanuB8TdCNMXFJjxG9ZGSKOX5P3j03H6kdMxalKHZ7vlBMB4CagFP/de0A=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" />

    <title>{{ config('app.name') }} - Boutique - {{ pageTitle($title) }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/loadMoreResults/css/loadMoreResults.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/plugins/sticky-cookie-accept-banner/css/cookit.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/plugins/scroll-top-custom-icon-animation/css/jquery.back-to-top.css') }}">

    @if(!session()->has('splashscreen'))
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/splashscreen.css') }}">
    @endif

    <link rel="stylesheet" href="https://avivart.net/ecosoft/libs/css/all.css" />

    @stack('styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/store.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/avivart.css') }}">
</head>

<body>

    @if(session()->has('splashscreen'))
    
        @livewire('store.header', ['title' => $title])

        <main role="main">
            @yield('body')

            <x-modules />

            @include('layouts.partials.store._video_modal')

            <div><a data-toggle="tooltip" title="Haut de page" data-placement="left" href="#" class="bck"></a></div>
        </main>

        @livewire('store.footer')

    @else

        <x-splash />

    @endif

    @production
    <script type="text/javascript" src="{{ asset('public/js/tawk.js') }}"></script>
    @endproduction

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="{{ asset('public/plugins/jquery.lazyrate/js/jquery.lazyrate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/plugins/loadMoreResults/js/loadMoreResults.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('public/plugins/jquery.simpleLoadMore/js/jquery.simpleLoadMore.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/plugins/fix-element-top-scroll/js/jquery.fixx.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('public/plugins/sticky-cookie-accept-banner/js/cookit.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('public/plugins/scroll-top-custom-icon-animation/js/jquery.back-to-top.js') }}"></script>

    @stack('scripts')

    <script type="text/javascript" src="{{ asset('public/js/store.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/avivart.js') }}"></script>

    @include('flashy::message')
</body>

</html>