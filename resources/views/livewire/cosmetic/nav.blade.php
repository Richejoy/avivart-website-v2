<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm w-100" id="navbarTop">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="{{ route('ad.index') }}"><img src="{{ asset('img/logo_ww.png') }}"
                    alt="{{ config('app.name') }}" class="logo-xs" align="middle"> <strong
                    class="text-info"><u>Cosmétique</u></strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('page.index') }}">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a data-class="text-info" class="nav-link" href="{{ route('cosmetic.index') }}">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a data-class="text-info" class="nav-link" href="{{ route('cosmetic.soap') }}">Savons</a>
                    </li>

                    <li class="nav-item">
                        <a data-class="text-info" class="nav-link" href="{{ route('cosmetic.milk') }}">Laits</a>
                    </li>

                    <li class="nav-item">
                        <a data-class="text-info" class="nav-link" href="{{ route('cosmetic.scrub') }}">Gommages</a>
                    </li>

                    <li class="nav-item">
                        <a data-class="text-info" class="nav-link" href="{{ route('cosmetic.mask') }}">Masques</a>
                    </li>

                    <li class="nav-item">
                        <a data-class="text-info" class="nav-link" href="{{ route('cosmetic.perfume') }}">Parfums</a>
                    </li>

                    <li class="nav-item d-none d-md-block d-lg-block d-xl-block">
                        <a id="show-modules" class="nav-link text-success" href="#"><i class="fa fa-th"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>