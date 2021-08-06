<section>
    @livewire('store.nav')
    
    <header class="bg-white">
        <section class="container-fluid">
            <div class="row pt-3">
                <div class="col-lg-3">
                    <p class="m-lg-0 fs-12">Horaires : 7j/7j de 6h30min à 21h00 Tél : (+228) 92 10 78 78</p>
                    <p class="m-lg-0 fs-12 text-danger">Nous vendons au prix du marché sans surenchère.</p>
                </div>
                <div class="col-lg-6">
                    <form class="" method="get" action="{{ route('store.search') }}" accept-charset="utf-8"
                        autocomplete="off">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <select class="form-select" name="product_category_id" id="product_category_id">

                                    <option value="0">Toutes les catégories</option>

                                    @if(session()->has('sessionProductRays') && session('sessionProductRays')->count())
                                    @foreach(session('sessionProductRays') as $productRay)
                                    <optgroup label="{{ $productRay->name }}">
                                        @if($productRay->productCategories->count())
                                        @foreach($productRay->productCategories as $productCategory)
                                        <option value="{{ $productCategory->id }}">{{ $productCategory->name }}</option>
                                        @endforeach
                                        @endif
                                    </optgroup>
                                    @endforeach
                                    @endif

                                </select>
                            </div>
                            <input type="search" name="name" id="name" class="form-control border-danger"
                                placeholder="Rechercher un aliment ou produit..." value="{{ Request::query('name') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-danger hvr-glow">Rechercher</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <div>
                        <a class="btn btn-light hvr-bounce-to-bottom" href="{{ route('cart.index') }}"
                            data-toggle="tooltip" title="Nombre de produits"><i class="fa fa-shopping-cart"></i>
                            ({{ Cart::content()->count() }})</a>

                        <a class="btn btn-light hvr-bounce-to-top" href="{{ route('user.favorite_products') }}"
                            data-toggle="tooltip" title="Produits favoris"><i class="fa fa-heart"></i>
                            ({{ session('userFavoriteProducts', 0) }})</a>

                        <a class="btn btn-light hvr-bounce-to-right" href="{{ route('cart.checkout') }}"
                            data-toggle="tooltip" title="Détails commande">
                            @if(session()->has('discountCoupon'))
                            <i class="fa fa-money"></i>
                            ({{ str_replace(',', '', Cart::total()) - (str_replace(',', '', Cart::subtotal()) * session('discountCoupon')->rate) }}
                            FCFA)
                            @else
                            <i class="fa fa-money"></i> ({{ Cart::subtotal() }} FCFA)
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
                        <ol class="breadcrumb bg-white m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('page.login') }}"
                                    class=" text-primary font-weight-bold">Connectez-vous</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('store.guide') }}"
                                    class=" text-primary font-weight-bold">Comment ça marche ?</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('productCategory.index') }}"
                                    class="text-primary font-weight-bold">Toutes nos catégories</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ pageTitle($title) }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
    </header>
</section>