<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm w-100" id="navbarTop">
        <div class="container-fluid">
            <a class="navbar-brand p-0 hvr-push" href="{{ route('store.index') }}"><img
                    src="{{ asset('public/img/logo.jpg') }}" alt="{{ config('app.name') }}" class="logo-xs"
                    align="middle"> <strong class="text-success"><u>Boutique</u></strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link" href="{{ route('page.index') }}">Accueil</a>
                    </li>

                    <li class="nav-item hvr-underline-from-center">
                        <a data-class="text-success" class="nav-link"
                            href="{{ route('store.index') }}">Boutique</a>
                    </li>

                    <li class="nav-item hvr-underline-from-center">
                        <a data-class="text-success" class="nav-link"
                            href="{{ route('store.organic_foods') }}">Aliments Bio</a>
                    </li>

                    <li
                        class="nav-item hvr-underline-from-center">
                        <a data-class="text-success" class="nav-link"
                            href="{{ route('store.manufactured_foods') }}">Aliments Manufacturés</a>
                    </li>

                    <li class="nav-item hvr-underline-from-center">
                        <a data-class="text-success" class="nav-link"
                            href="{{ route('store.home_appliance') }}">Electro-Ménager</a>
                    </li>

                    <li class="nav-item hvr-underline-from-center">
                        <a data-class="text-success" class="nav-link"
                            href="{{ route('store.high_tech') }}">High-Tech</a>
                    </li>

                    <li class="nav-item hvr-underline-from-center">
                        <a data-class="text-success" class="nav-link"
                            href="{{ route('store.other_products') }}">Autres Produits</a>
                    </li>

                    <li class="nav-item">
                        <a id="show-modules" class="nav-link" href="#"><i class="fa fa-th"></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>