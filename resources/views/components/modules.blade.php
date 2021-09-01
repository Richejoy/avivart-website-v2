<div id="modules" class="position-fixed h-100 bg-white">
    <div class="modules-header bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <i class="p-2 fa fa-th"></i>
                </div>
                <div class="col-8 px-2 pt-1 pb-2">
                    <strong class="text-uppercase">{{ $headerText }}</strong>
                </div>
                <div id="close-modules" class="col-2 bg-danger cursor-pointer">
                    <i class="p-2 fa fa-close text-white"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="modules-body py-3">
        <div class="container">

            @if(!is_null($content))

            <livewire:login-form />

            @else

            <div class="row">
                <div class="col-6">
                    <div class="card border-primary">
                        <div class="card-body text-center p-1">
                            <a class="d-block text-decoration-none text-muted" href="{{ route('informatics.index') }}">
                                <i class="text-primary fa fa-code fa-3x"></i>
                                <br>
                                <strong>Informatique</strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-success">
                        <div class="card-body text-center p-1">
                            <a class="d-block text-decoration-none text-muted" href="{{ route('store.index') }}">
                                <i class="text-success fa fa-shopping-basket fa-3x"></i>
                                <br>
                                <strong>Boutique</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-6">
                    <div class="card border-warning">
                        <div class="card-body text-center p-1">
                            <a class="d-block text-decoration-none text-muted" href="{{ route('ad.index') }}">
                                <i class="text-warning fa fa-bullhorn fa-3x"></i>
                                <br>
                                <strong>Annonces</strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-info">
                        <div class="card-body text-center p-1">
                            <a class="d-block text-decoration-none text-muted" href="{{ route('cosmetic.index') }}">
                                <i class="text-info fa fa-suitcase fa-3x"></i>
                                <br>
                                <strong>Cosmétique</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card border-dark">
                        <div class="card-body text-center p-1">
                            <a class="d-block text-decoration-none text-muted" href="{{ route('agribusiness.index') }}">
                                <i class="text-dark fa fa-blind fa-3x"></i>
                                <br>
                                <strong>Agrobusiness</strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card border-danger">
                        <div class="card-body text-center p-1">
                            <a class="d-block text-decoration-none text-muted" href="{{ route('immovable.index') }}">
                                <i class="text-danger fa fa-industry fa-3x"></i>
                                <br>
                                <strong>Immobilier</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @endif

        </div>
    </div>

    <div class="modules-footer text-center p-2 bg-light">
        <p class="m-0">
            <a class="fs-12 text-muted" href="{{ route('page.index') }}">Accueil</a>
            <a class="fs-12 text-muted mx-2" href="{{ route('service.index') }}">Services</a>
            <a class="fs-12 text-muted" href="{{ route('contact.index') }}">Contact</a>

            <a class="fs-12 text-muted mx-2" href="{{ route('page.about') }}">A propos</a>
            <a class="fs-12 text-muted" href="{{ route('page.faq') }}">Faq</a>

            <a class="fs-12 text-muted mx-2" href="{{ route('page.sitemap') }}">Plan du site</a>
            <a class="fs-12 text-muted" href="{{ route('page.conditions') }}">Conditions Générales</a>

            <a class="fs-12 text-muted mx-2" href="{{ route('page.terms') }}">Termes Généraux</a>
            <a class="fs-12 text-muted" href="{{ route('page.login') }}">Connexion</a>

            <a class="fs-12 text-muted mx-2" href="{{ route('page.register') }}">Inscription</a>
            <a class="fs-12 text-muted" href="{{ route('page.donate') }}">Faire un don</a>

            <a class="fs-12 text-muted mx-2" href="{{ route('page.galleries') }}">Galeries</a>
        </p>
        <p class="m-0">
            <strong class="fs-12 text-muted">&copy; 2018 - {{ date('Y') }} {{ config('app.name') }}</strong>
        </p>
    </div>
</div>