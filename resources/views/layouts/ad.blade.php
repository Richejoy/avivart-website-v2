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

    <title>{{ config('app.name') }} - Annonces - {{ $title ?? 'Laravel' }}</title>

    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/plugins/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/css/xzoom.css') }}"
        media="all" />

    <link type="text/css" rel="stylesheet" media="all"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.css" />
    <link type="text/css" rel="stylesheet" media="all"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    @if(!session()->has('splashscreen'))
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/splashscreen.css') }}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/ad.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/avivart.css') }}">
</head>

<body>

    @if(session()->has('splashscreen'))
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="{{ route('page.index') }}"><img src="{{ asset('public/img/logo.png') }}"
                    alt="{{ config('app.name') }}" class="logo-xs" align="middle"> <strong
                    class="text-warning"><u>Annonces</u></strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="{{ route('page.index') }}">Accueil</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold text-danger" href="{{ route('ad.index') }}">Annonces</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ad.automobile') }}">Automobile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ad.immovable') }}">Immobilier</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ad.cosmetic') }}">Cosmétique</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ad.agribusiness') }}">Agrobusiness</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ad.other_ads') }}">Autres Annonces</a>
                    </li>

                    <li class="nav-item">
                        <a id="show-modules" class="nav-link" href="#"><i class="fa fa-th"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-white">
        <section class="container-fluid">
            <div class="row pt-3">
                <div class="col-lg-3">
                    <p class="m-lg-0 fs-12">Horaires : 7j/7j de 6h30min à 21h00 Tél : (+228) 92 10 78 78</p>
                    <p class="m-lg-0 fs-12 text-danger">Faites gratuitement vos annonces, validité une semaine.</p>
                </div>
                <div class="col-lg-6">
                    <form class="" method="get" action="{{ route('ad.search') }}" accept-charset="utf-8"
                        autocomplete="off">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <select class="form-select" name="ad_category_id" id="ad_category_id">

                                    <option value="0">Toutes les catégories</option>

                                    @if(session()->has('sessionAdRays') && session('sessionAdRays')->count())
                                    @foreach(session('sessionAdRays') as $adRay)
                                    <optgroup label="{{ $adRay->name }}">
                                        @if($adRay->adCategories->count())
                                        @foreach($adRay->adCategories as $adCategory)
                                        <option value="{{ $adCategory->id }}">{{ $adCategory->name }}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                    @endforeach
                                    @endif

                                </select>
                            </div>
                            <input type="search" name="name" id="name" class="form-control border-warning"
                                placeholder="Rechercher une annonce..." value="{{ Request::query('name') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-warning hvr-glow">Rechercher</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a class="btn btn-outline-primary"><span class="material-icons">favorite</span></a>
                      <a data-toggle="tooltip" title="Annonces favorites" class="btn btn-primary" href="{{ route('user.favorite_ads') }}">{{ session('userFavoriteAds', 0) }}</a>
                    </div>

                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a class="btn btn-outline-danger"><span class="material-icons">notification_important</span></a>
                      <a class="btn btn-danger" href="{{ route('ad.create') }}">Publier une annonce</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <p class="m-lg-0 fs-12"><a href="{{ route('page.register') }}">Inscrivez-vous et publier des
                            annonces en toute liberté.</a></p>
                </div>
                <div class="col-lg-9">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('page.login') }}"
                                    class=" text-primary font-weight-bold">Connectez-vous</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('ad.guide') }}"
                                    class=" text-primary font-weight-bold">Comment ça marche ?</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('adCategory.index') }}"
                                    class="text-primary font-weight-bold">Toutes nos catégories</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $title ?? 'Laravel' }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
    </header>

    <main>
        @yield('body')

        @include('layouts.partials._modules')
    </main>

    <footer class="main-footer bg-dark">
        <section class="content py-lg-4">
            <div class="container-fluid pt-5 pb-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <p>
                            <img src="{{ asset('public/img/logo_ww.png') }}" alt="{{ config('app.name') }}"
                                class="logo">
                        </p>

                        <p class="text-light">Adresse : CAP Kégué</p>
                        <p class="text-light">Téléphone : +228 92 10 78 78</p>
                        <p class="text-light">Email : contact@avivart.net</p>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h4 class="text-white font-weight-bold text-uppercase">Liens Principaux</h4>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="{{ route('page.index') }}">Accueil</a></li>
                            <li><a class="text-secondary" href="{{ route('ad.index') }}">Annonces</a></li>
                            <li><a class="text-secondary" href="{{ route('ad.automobile') }}">Automobile</a></li>
                            <li><a class="text-secondary" href="{{ route('ad.immovable') }}">Immobilier</a></li>
                            <li><a class="text-secondary" href="{{ route('ad.cosmetic') }}">Cosmétique</a></li>
                            <li><a class="text-secondary" href="{{ route('ad.agribusiness') }}">Agrobusiness</a></li>
                            <li><a class="text-secondary" href="{{ route('ad.other_ads') }}">Autres Annonces</a></li>
                            <li><a class="text-secondary" href="{{ route('contact.index') }}">Contact</a></li>
                            <li><a class="text-secondary" href="{{ route('page.about') }}">A propos</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <h4 class="text-white font-weight-bold text-uppercase">Autres Liens</h4>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="{{ route('informatics.index') }}">Informatique</a></li>
                            <li><a class="text-secondary" href="{{ route('store.index') }}">Boutique</a></li>
                            <li><a class="text-secondary" href="{{ route('cosmetic.index') }}">Cosmétique</a></li>
                            <li><a class="text-secondary" href="{{ route('agribusiness.index') }}">Agrobusiness</a></li>
                            <li><a class="text-secondary" href="{{ route('immovable.index') }}">Immobilier</a></li>
                            <li><a class="text-secondary" href="{{ route('service.index') }}">Services</a>
                            </li>
                            <li><a class="text-secondary" href="{{ route('page.conditions') }}">Conditions Générales</a>
                            </li>
                            <li><a class="text-secondary" href="{{ route('page.terms') }}">Termes Généraux</a></li>
                            <li><a class="text-secondary" href="{{ route('page.faq') }}">Foire aux questions</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h4 class="text-white font-weight-bold text-uppercase">Souscription Newsletter</h4>
                        <p class="text-secondary">Recevez des mises à jour par email sur notre site et nos offres
                            spéciales.
                        </p>

                        {!! Form::open(['route' => 'newsletter.store', 'class' => 'my-4']) !!}
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Entrez votre email">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-warning">Souscrire</button>
                            </div>
                        </div>
                        {!! Form::close() !!}

                        <h6 class="my-3 text-white font-weight-bold text-uppercase">Suivez-nous</h6>

                        <ul class="list-unstyled d-flex flex-row justify-content-around align-items-center my-2">
                            <li>
                                <a target="_blank" href="https://facebook.com/societeavivart"
                                    class="text-white text-decoration-none social-icon facebook hvr-grow"><i
                                        class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/art_aviv"
                                    class="text-white text-decoration-none social-icon twitter hvr-shrink"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://telegram.me/avivart"
                                    class="text-white text-decoration-none social-icon telegram hvr-pulse"><i
                                        class="fa fa-telegram"></i></a>
                            </li>
                            <li>
                                <a target="_blank"
                                    href="https://web.whatsapp.com/send?phone=22892107878&text=Bonjour AVIVART!"
                                    class="text-white text-decoration-none social-icon whatsapp hvr-push"><i
                                        class="fa fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://youtube.com/channel/UC-JUg2ErdyUWoHWF8AoqQYg"
                                    class="text-white text-decoration-none social-icon youtube hvr-pop"><i
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
                        &copy; 2018 - {{ date('Y') }} {{ config('app.name') }}, Tous droits réservés | Ce design
                        est fait par <a class="text-warning" href="#" target="_blank">AVIV'ART DESIGN</a></a>
                    </div>
                    <div class="col-lg-4 text-light text-lg-center">

                    </div>
                </div>
            </div>
        </section>
    </footer>

    <div class="modal fade" id="securityModal" tabindex="-1" aria-labelledby="securityModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">AVIV'ART Annonce : Conseils de sécurité</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-center"><i class="fa fa-lock fa-5x text-warning"></i></p>
            <ol>
                <li>Eviter d'envoyer de paiements sans avoir <a href="{{ route('contact.index') }}">verifié l'annonce</a>.</li>
                <li>Eviter d'envoyer d'argent par des mobiles money, par virement bancaire ou par n'importe quels autres moyens.</li>
                <li>Donner RDV au vendeur dans un lieu public à une heure de travail.</li>
            </ol>
            <p class="text-center">
                Téléphone : (+228) 92 10 78 78<br>
                Email : <a href="mailto:contact@avivart.net">contact@avivart.net</a>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>

    @else
    @include('layouts.partials._splashscreen')
    @endif

    <script type="text/javascript" src="{{ asset('public/js/tawk.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.js">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript"
        src="{{ asset('public/plugins/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/js/xzoom.min.js') }}"></script>

    <script type="text/javascript"
        src="{{ asset('public/plugins/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/js/jquery.hammer.min.js') }}">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.min.js"
        integrity="sha256-0+5OfvOxkLHqpLPPwy9pDjug8N3cwaqcmleaxnR5VS8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/locales/jquery.timeago.fr.min.js"
        integrity="sha256-83OUXlbwKXMQPFrnJtQFpqYMK1LKWbBL+eUEGYhleDM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hazzik-jquery.livequery/1.3.6/jquery.livequery.min.js"
        integrity="sha256-88KNhDMpl3sAHFBGXrXw/K7H95NglbRhahMYlJyUtOo=" crossorigin="anonymous"></script>

    <script type="text/javascript"
        src="{{ asset('public/plugins/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/js/xzoom-custom.js') }}">
    </script>

    <script type="text/javascript" src="{{ asset('public/js/jquery-static-load-more.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/cookies.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/ad.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/avivart.js') }}"></script>
</body>

</html>