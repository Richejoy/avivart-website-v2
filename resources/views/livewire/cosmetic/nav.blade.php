<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm w-100" id="navbarTop">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="{{ route('ad.index') }}"><img src="{{ asset('public/img/logo_ww.png') }}"
                    alt="{{ config('app.name') }}" class="logo-xs" align="middle"> <strong
                    class="text-info"><u>Cosmétique</u></strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-warning" href="{{ route('page.index') }}">Accueil</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="{{ route('cosmetic.index') }}">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-info" href="{{ route('cosmetic.soap') }}">Savons</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-info" href="{{ route('cosmetic.milk') }}">Laits</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-info" href="{{ route('cosmetic.scrub') }}">Gommages</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-info" href="{{ route('cosmetic.mask') }}">Masques</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-info" href="{{ route('cosmetic.perfume') }}">Parfums</a>
                    </li>

                    <li class="nav-item">
                        <a id="show-modules" class="nav-link text-success" href="#"><i class="fa fa-th"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>