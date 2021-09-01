<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm w-100" id="navbarTop">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="{{ route('page.index') }}"><img src="{{ asset('public/img/logo.png') }}"
                    alt="{{ config('app.name') }}" class="logo-xs"></a>
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
                        <a class="nav-link" href="{{ route('ad.index') }}">Annonces</a>
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
                        <a class="nav-link" href="{{ route('service.index') }}">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('page.about') }}">A propos</a>
                    </li>

                    <li class="nav-item">
                        <a id="show-modules" class="nav-link text-success" href="#"><i class="fa fa-user-circle fa-2x"></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>