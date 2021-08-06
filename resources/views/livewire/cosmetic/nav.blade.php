<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow-sm w-100" id="navbarTop">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="{{ route('ad.index') }}"><img src="{{ asset('public/img/logo.png') }}"
                    alt="{{ config('app.name') }}" class="logo-xs" align="middle"> <strong
                    class="text-info"><u>Cosmétique</u></strong></a>
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
                        <a class="nav-link font-weight-bold text-info" href="{{ route('cosmetic.index') }}">Cosmétique</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cosmetic.index') }}">Savons</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cosmetic.index') }}">Laits</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cosmetic.index') }}">Gommages</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ad.agribusiness') }}">Masques</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cosmetic.index') }}">Parfums</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cosmetic.index') }}">Autres</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cosmetic.index') }}">Conseils</a>
                    </li>

                    <li class="nav-item">
                        <a id="show-modules" class="nav-link" href="#"><i class="fa fa-th"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>