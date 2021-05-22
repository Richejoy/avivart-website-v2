<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta NAME="TITLE" CONTENT="AVIV'ART" />
    <meta NAME="AUTHOR" CONTENT="VIVA AKUE" />
    <meta NAME="DESCRIPTION" CONTENT="L'art de mieux vivre" />
    <meta NAME="KEYWORDS" CONTENT="Aliments, Products, School Express, VIVA SOS, Insurances" />
    <meta NAME="OWNER" CONTENT="VIVA AKUE" />
    <meta NAME="ROBOTS" CONTENT="index,all">
    <meta NAME="Reply-to" CONTENT="viva-akue@outlook.fr" />
    <meta NAME="REVISIT-AFTER" CONTENT="15" />

    <meta name="google-site-verification" content="ZfxY-rbHjCOQfeNrQTT-4OA03jPPQQAPqz-kqMToyhQ" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css" />

    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>{{ config('app.name') }} - {{ $title ?? 'Laravel' }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/Material-Style-Auto-Show-Hide-Scroll-To-Top-Button-Material-ScrollTop/dist/material-scrolltop.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/cookie-consent-banner-localstroage/css/cookie-banner.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/splashscreen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/avivart.css') }}">

    <script data-ad-client="ca-pub-6235533576544520" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body>

    @if(session()->has('splashscreen'))
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow-sm" id="navbarTop">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="{{ route('page.index') }}"><img
                    src="{{ asset('public/img/logo.png') }}" alt="{{ config('app.name') }}" class="logo-xs"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="{{ route('page.index') }}">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('store.index') }}">Boutique</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('informatics.index') }}">Informatique</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cosmetic.index') }}">Cosmétique</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('agribusiness.index') }}">Agrobusiness</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('immovable.index') }}">Immobilier</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ad.index') }}">Annonces</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service.index') }}">Services</a>
                    </li>

                    @if(Auth::check())
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link" href="{{ route('user.index') }}">Tableau de bord</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('page.login') }}">Connexion</a>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <header>

    </header>

    <main>
        @yield('body')
    </main>

    <footer class="main-footer">
        <section class="content py-lg-4">
            <div class="container-fluid pt-5 pb-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <p>
                            <img src="{{ asset('public/img/logo_white.jpeg') }}" alt="{{ config('app.name') }}"
                                class="logo">
                        </p>

                        <p class="text-light">Adresse : CAP Kégué</p>
                        <p class="text-light">Téléphone : +228 92 10 78 78</p>
                        <p class="text-light">Email : contact@avivart.net</p>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h4 class="text-white font-weight-bold text-uppercase">Société</h4>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="{{ route('page.index') }}">Accueil</a></li>
                            <li><a class="text-secondary" href="{{ route('store.index') }}">Boutique</a></li>
                            <li><a class="text-secondary" href="{{ route('informatics.index') }}">Informatique</a></li>
                            <li><a class="text-secondary" href="{{ route('cosmetic.index') }}">Cosmétique</a></li>
                            <li><a class="text-secondary" href="{{ route('agribusiness.index') }}">Agrobusiness</a></li>
                            <li><a class="text-secondary" href="{{ route('immovable.index') }}">Immobilier</a></li>
                            <li><a class="text-secondary" href="{{ route('ad.index') }}">Annonces</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <h4 class="text-white font-weight-bold text-uppercase">Autres Liens</h4>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="{{ route('page.conditions') }}">Conditions Générales</a>
                            </li>
                            <li><a class="text-secondary" href="{{ route('page.terms') }}">Termes Généraux</a></li>
                            <li><a class="text-secondary" href="{{ route('contact.index') }}">Contact</a></li>
                            <li><a class="text-secondary" href="{{ route('page.about') }}">A propos</a></li>
                            <li><a class="text-secondary" href="{{ route('page.faq') }}">FAQ</a></li>
                            <li><a class="text-secondary" href="{{ route('page.sitemap') }}">Plan du Site</a></li>
                            <li><a class="text-secondary" href="{{ route('page.donate') }}">Faire un Don</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h4 class="text-white font-weight-bold text-uppercase">Souscription Newsletter</h4>
                        <p class="text-warning">Recevez des mises à jour par email sur notre site et nos offres spéciales.
                        </p>

                        {!! Form::open(['route' => 'newsletter.store', 'class' => 'my-4']) !!}
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Entrez votre email">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-success">Souscrire</button>
                            </div>
                        </div>
                        {!! Form::close() !!}

                        <h6 class="my-3 text-white font-weight-bold text-uppercase">Suivez-nous</h6>

                        <ul class="list-unstyled d-flex flex-row justify-content-around align-items-center my-2">
                            <li class="">
                                <a target="_blank" href="https://facebook.com" class="text-white text-decoration-none social-icon facebook hvr-grow"><i
                                        class="fa fa-facebook"></i></a>
                            </li>
                            <li class="">
                                <a target="_blank" href="https://twitter.com" class="text-white text-decoration-none social-icon twitter hvr-shrink"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li class="">
                                <a target="_blank" href="https://instagram.com" class="text-white text-decoration-none social-icon instagram hvr-pulse"><i
                                        class="fa fa-instagram"></i></a>
                            </li>
                            <li class="">
                                <a target="_blank" href="https://web.whatsapp.com/send?phone=22892107878&text=Bonjour AVIVART!" class="text-white text-decoration-none social-icon whatsapp hvr-push"><i
                                        class="fa fa-whatsapp"></i></a>
                            </li>
                            <li class="">
                                <a target="_blank" href="https://youtube.com" class="text-white text-decoration-none social-icon youtube hvr-pop"><i
                                        class="fa fa-youtube"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>

        <section class="copyright">
            <div class="container-fluid py-3">
                <div class="row">
                    <div class="col-lg-8 text-info text-lg-center">
                        Copyright &copy; {{ date('Y') }} Tous droits réservés, par {{ config('app.name') }} | Ce design
                        est fait par <a class="text-danger" href="#" target="_blank">AVIV'ART DESIGN</a></a>
                    </div>
                    <div class="col-lg-4 text-light text-lg-center">
                        
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <!-- Cookie Banner -->
    <div class="nk-cookie-banner alert alert-warning text-center mb-0" role="alert">
      &#x1F36A; This website uses cookies to ensure you get the best experience on our website.
      <a href="{{ route('page.terms') }}" target="blank">Learn more</a>
      <button type="button" class="btn btn-primary btn-sm ml-3" onclick="window.nk_hideCookieBanner()">
        I accept
      </button>
    </div>
    <!-- End of Cookie Banner -->

    <div><button class="material-scrolltop" type="button"></button></div>

    @else
    @include('layouts.partials._splashscreen')
    @endif

    <script type="text/javascript" src="{{ asset('public/js/tawk.js') }}"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous">
    </script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="{{ asset('public/plugins/Material-Style-Auto-Show-Hide-Scroll-To-Top-Button-Material-ScrollTop/dist/material-scrolltop.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/plugins/pin-element-top-sticky/js/jquery.sticky.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/plugins/cookie-consent-banner-localstroage/js/cookie-banner.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/js/page.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/avivart.js') }}"></script>
</body>

</html>