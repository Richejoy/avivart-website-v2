<section>
    @livewire('ad.nav')

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

                                    @if($adRays->count())
                                    @foreach($adRays as $adRay)
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
                            <li class="breadcrumb-item"><a href="{{ route('adRay.index') }}"
                                    class="text-primary font-weight-bold">Tous nos rayons</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('adCategory.index') }}"
                                    class="text-primary font-weight-bold">Toutes nos catégories</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('adType.index') }}"
                                    class="text-primary font-weight-bold">Tous nos types</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ Str::limit(pageTitle($title), 25) }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
    </header>
</section>