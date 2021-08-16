<section>
    @livewire('cosmetic.nav')

    <header class="bg-light">
        <section class="container-fluid">
            <div class="row pt-3">
                <div class="col-lg-3">
                    <p class="m-lg-0 fs-12">Horaires : 7j/7j de 6h30min à 21h00 Tél : (+228) 92 10 78 78</p>
                    <p class="m-lg-0 fs-12 text-danger">Nous vendons au prix du marché sans surenchère.</p>
                </div>
                <div class="col-lg-6">
                    <form class="" method="get" action="{{ route('cosmetic.search') }}" accept-charset="utf-8"
                        autocomplete="off">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <select class="form-select" name="article_category_id" id="article_category_id">

                                    <option value="0">Toutes les catégories</option>

                                    @if($articleRays->count())
                                    @foreach($articleRays as $articleRay)
                                    <optgroup label="{{ $articleRay->name }}">
                                        @if($articleRay->articleCategories->count())
                                        @foreach($articleRay->articleCategories as $articleCategory)
                                        <option value="{{ $articleCategory->id }}">{{ $articleCategory->name }}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                    @endforeach
                                    @endif

                                </select>
                            </div>
                            <input type="search" name="name" id="name" class="form-control border-info"
                                placeholder="Rechercher un article..." value="{{ Request::query('name') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-info">Rechercher</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <div>
                        <a class="btn btn-dark" href="{{ route('basket.index') }}"
                            data-toggle="tooltip" title="Nombre d'articles"><i class="fa fa-shopping-cart"></i>
                            ({{ Cart::instance('cosmetic')->content()->count() }})</a>

                        <a class="btn btn-dark" href="{{ route('user.favorite_articles') }}"
                            data-toggle="tooltip" title="Articles favoris"><i class="fa fa-heart"></i>
                            ({{ session('userFavoriteArticles', 0) }})</a>

                        <a class="btn btn-dark" href="{{ route('basket.checkout') }}"
                            data-toggle="tooltip" title="Détail commande">
                            @if(session()->has('discountCoupon'))
                            <i class="fa fa-money"></i>
                            ({{ str_replace(',', '', Cart::instance('cosmetic')->total()) - (str_replace(',', '', Cart::instance('cosmetic')->subtotal()) * session('discountCoupon')->rate) }}
                            FCFA)
                            @else
                            <i class="fa fa-money"></i> ({{ Cart::instance('cosmetic')->subtotal() }} FCFA)
                            @endif
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <p class="m-lg-0 fs-12"><a href="{{ route('page.register') }}">Inscrivez-vous. Livraison gratuite à
                            partir de 100 000FCFA.</a></p>
                </div>
                <div class="col-lg-9">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('page.login') }}"
                                    class=" text-primary font-weight-bold">Connectez-vous</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('cosmetic.guide') }}"
                                    class=" text-primary font-weight-bold">Comment ça marche ?</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('articleCategory.index') }}"
                                    class="text-primary font-weight-bold">Toutes nos catégories</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ pageTitle($title) }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
    </header>
</section>