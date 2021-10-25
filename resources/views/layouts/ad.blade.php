<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="ZfxY-rbHjCOQfeNrQTT-4OA03jPPQQAPqz-kqMToyhQ" />

    @include('meta::manager', [
        'title' => fullPageTitle($title, 'Annonces'),
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

    <link rel="stylesheet" type="text/css"
        href="{{ asset('plugins/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/css/xzoom.css') }}"
        media="all" />

    <link type="text/css" rel="stylesheet" media="all"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.css" />
    <link type="text/css" rel="stylesheet" media="all"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/up_btn/up_btn.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/GDPR-Cookie-Compliance-Plugin/css/gdpr-cookie.css') }}">

    <link rel="stylesheet" href="https://avivart.net/ecosoft/libs/css/all.css" />

    @stack('styles')

    @if(!session()->has('splashscreen'))
    <link rel="stylesheet" type="text/css" href="{{ asset('css/splashscreen.css') }}">
    @endif
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ad.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/avivart.css') }}">

    @livewireStyles
</head>

<body>

    @if(session()->has('splashscreen'))

        <div id="introLoading" class="introLoading"></div>
    
        @livewire('ad.header', ['title' => $title])

        <main role="main">
            @yield('body')

            <x-modules />

            @include('layouts.partials.ad._security_modal')
        </main>

        @livewire('ad.footer')

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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.js">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript"
        src="{{ asset('plugins/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/js/xzoom.min.js') }}"></script>

    <script type="text/javascript"
        src="{{ asset('plugins/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/js/jquery.hammer.min.js') }}">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.min.js"
        integrity="sha256-0+5OfvOxkLHqpLPPwy9pDjug8N3cwaqcmleaxnR5VS8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/locales/jquery.timeago.fr.min.js"
        integrity="sha256-83OUXlbwKXMQPFrnJtQFpqYMK1LKWbBL+eUEGYhleDM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hazzik-jquery.livequery/1.3.6/jquery.livequery.min.js"
        integrity="sha256-88KNhDMpl3sAHFBGXrXw/K7H95NglbRhahMYlJyUtOo=" crossorigin="anonymous"></script>

    <script type="text/javascript"
        src="{{ asset('plugins/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/js/xzoom-custom.js') }}">
    </script>

    <script type="text/javascript" src="{{ asset('plugins/up_btn/up_btn.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/Fix-Any-Element-To-Top-Of-The-Page-Using-jQuery-scrollFix/js/jQuery.scrollFix.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/GDPR-Cookie-Compliance-Plugin/js/gdpr-cookie.js') }}"></script>

    <script type="text/javascript" src="https://avivart.net/ecosoft/libs/js/jquery-static-load-more.js"></script>
    <script type="text/javascript" src="https://avivart.net/ecosoft/libs/js/cookies.js"></script>
    <script type="text/javascript" src="https://avivart.net/ecosoft/libs/js/jquery-active-page.js"></script>

    <script src="{{ asset('plugins/introLoader/dist/helpers/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('plugins/introLoader/dist/helpers/spin.min.js') }}"></script>
    <script src="{{ asset('plugins/introLoader/dist/jquery.introLoader.js') }}"></script>

    @stack('scripts')

    <script type="text/javascript" src="{{ asset('js/utils.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ad.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/avivart.js') }}"></script>

    @livewireScripts

    @include('flashy::message')

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>

</html>