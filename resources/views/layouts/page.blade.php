<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>{{ config('app.name') }} - {{ $title ?? 'Laravel' }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/splashscreen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/avivart.css') }}">
</head>

<body>

    @if(session()->has('splashscreen'))
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="{{ route('page.index') }}"><img
                    src="{{ asset('public/img/logo_black.png') }}" alt="{{ config('app.name') }}" class="logo-xs"></a>
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
                        <a class="nav-link" href="{{ route('informatics.index') }}">Informatique</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('store.index') }}">Boutique</a>
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

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="{{ route('page.login') }}">Connexion</a>
                    </li>

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
                    <div class="col-lg-3">
                        <p>
                            <img src="{{ asset('public/img/logo_grey.png') }}" alt="{{ config('app.name') }}"
                                class="logo">
                        </p>
                        <p class="text-light">Adresse : Kégué</p>
                        <p class="text-light">Téléphone : +228 90 00 00 00</p>
                        <p class="text-light">Email : contact@avivart.net</p>
                    </div>
                    <div class="col-lg-3">
                        <h4 class="text-white font-weight-bold text-uppercase">Société</h4>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="{{ route('page.index') }}">Accueil</a></li>
                            <li><a class="text-secondary" href="{{ route('informatics.index') }}">Informatique</a></li>
                            <li><a class="text-secondary" href="{{ route('store.index') }}">Boutique</a></li>
                            <li><a class="text-secondary" href="{{ route('cosmetic.index') }}">Cosmétique</a></li>
                            <li><a class="text-secondary" href="{{ route('agribusiness.index') }}">Agrobusiness</a></li>
                            <li><a class="text-secondary" href="{{ route('immovable.index') }}">Immobilier</a></li>
                            <li><a class="text-secondary" href="{{ route('ad.index') }}">Annonces</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h4 class="text-white font-weight-bold text-uppercase">Autres Liens</h4>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="{{ route('page.conditions') }}">Conditions Générales</a>
                            </li>
                            <li><a class="text-secondary" href="{{ route('page.terms') }}">Termes Généreaux</a></li>
                            <li><a class="text-secondary" href="{{ route('contact.index') }}">Contact</a></li>
                            <li><a class="text-secondary" href="{{ route('page.about') }}">A propos</a></li>
                            <li><a class="text-secondary" href="{{ route('page.sitemap') }}">Plan du Site</a></li>
                            <li><a class="text-secondary" href="{{ route('page.donate') }}">Faire un Don</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="text-white font-weight-bold text-uppercase">Souscription Newsletter</h4>
                        <p class="text-muted">Recevez des mises à jour par email sur notre site et nos offres spéciales.
                        </p>

                        {!! Form::open(['route' => 'newsletter.store', 'class' => 'my-4']) !!}
                        <div class="input-group">
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Entrez votre email">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Souscrire</button>
                            </div>
                        </div>
                        {!! Form::close() !!}

                        <h4 class="my-3 text-white font-weight-bold text-uppercase">Suivez-nous</h4>

                        <ul class="list-unstyled d-flex flex-row justify-content-around align-items-center my-2">
                            <li class="">
                                <a href="" class="text-white text-decoration-none social-icon facebook"><i
                                        class="fa fa-facebook"></i></a>
                            </li>
                            <li class="pl-3 pr-3">
                                <a href="" class="text-white text-decoration-none social-icon twitter"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li class="">
                                <a href="" class="text-white text-decoration-none social-icon instagram"><i
                                        class="fa fa-instagram"></i></a>
                            </li>
                            <li class="">
                                <a href="" class="text-white text-decoration-none social-icon whatsapp"><i
                                        class="fa fa-whatsapp"></i></a>
                            </li>
                            <li class="">
                                <a href="" class="text-white text-decoration-none social-icon youtube"><i
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
                    <div class="col-lg-8 text-muted text-lg-center">
                        Copyright &copy; {{ date('Y') }} Tous droits réservés, par {{ config('app.name') }} | Ce design
                        est fait avec <i class="fa fa-heart text-danger"></i> par <a class="text-success" href="#"
                            target="_blank">AVIV'ART DESIGN</a></a>
                    </div>
                    <div class="col-lg-4 text-light text-lg-center">
                        <span class="pr-3"><i class="fa fa-credit-card-alt"></i></span>
                        <span class="pl-2 pr-2"><i class="fa fa-cc-visa"></i></span>
                        <span class="pl-2 pr-2"><i class="fa fa-cc-mastercard"></i></span>
                        <span class="pl-2 pr-2"><i class="fa fa-cc-paypal"></i></span>
                        <span class="pl-2 pr-2"><i class="fa fa-cc-stripe"></i></span>
                        <span class="pl-2 pr-2"><i class="fa fa-cc-jcb"></i></span>
                        <span class="pl-3"><i class="fa fa-cc-amex"></i></span>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    @else
    @include('layouts.partials._splashscreen')
    @endif

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="{{ asset('public/js/page.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/avivart.js') }}"></script>
</body>

</html>