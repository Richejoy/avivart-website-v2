<nav class="navbar navbar-expand-lg navbar-dark shadow-sm w-100" id="navbarTop">
        <div class="container-fluid">
            <a class="navbar-brand p-0" href="{{ route('informatics.index') }}"><img
                    src="{{ asset('img/logo_ww.png') }}" alt="{{ config('app.name') }}" class="logo-xs"
                    align="middle"> <strong class="text-warning"><u>Informatique</u></strong></a>
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
                        <a data-class="text-warning" class="nav-link" href="{{ route('informatics.index') }}">Informatique</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Solutions
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('informatics.solutions') }}">Microfinance</a>
                            <a class="dropdown-item" href="{{ route('informatics.solutions') }}">Digitalisation</a>
                            <a class="dropdown-item" href="{{ route('informatics.solutions') }}">Transformation
                                Digitale</a>
                            <a class="dropdown-item" href="{{ route('informatics.solutions') }}">Gestion de Stock</a>
                            <a class="dropdown-item" href="{{ route('informatics.solutions') }}">Logistique</a>
                            <a class="dropdown-item" href="{{ route('informatics.solutions') }}">Sant??</a>
                            <a class="dropdown-item" href="{{ route('informatics.solutions') }}">Site Web</a>
                            <a class="dropdown-item" href="{{ route('informatics.solutions') }}">Int??gration de solution
                                informatique</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            R??seaux
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('informatics.networks') }}">Inter-connexion Site</a>
                            <a class="dropdown-item" href="{{ route('informatics.networks') }}">VPN</a>
                            <a class="dropdown-item" href="{{ route('informatics.networks') }}">VSAT</a>
                            <a class="dropdown-item" href="{{ route('informatics.networks') }}">Wifi Zone</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Base de Donn??es
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('informatics.databases') }}">ORACLE</a>
                            <a class="dropdown-item" href="{{ route('informatics.databases') }}">SQL SERVER</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('informatics.services') }}">Marketing Digital</a>
                            <a class="dropdown-item" href="{{ route('informatics.services') }}">Maintenance</a>
                            <a class="dropdown-item" href="{{ route('informatics.services') }}">D??mat??rialisation</a>
                            <a class="dropdown-item" href="{{ route('informatics.services') }}">Infog??rance</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a data-class="text-warning" class="nav-link" href="{{ route('informatics.partners') }}">Partenaires</a>
                    </li>

                    <li class="nav-item">
                        <a data-class="text-warning" class="nav-link" href="{{ route('informatics.formations') }}">Formations</a>
                    </li>

                    <li class="nav-item d-none d-md-block d-lg-block d-xl-block">
                        <a id="show-modules" class="nav-link" href="#"><i class="fa fa-th"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>