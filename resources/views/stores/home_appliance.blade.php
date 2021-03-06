@extends('layouts.store', ['title' => 'Electro-Ménager'])

@section('body')
<section class="bg-success py-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="font-weight-bold text-light">Produits ({{ $products->count() }})</h4>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-3 pb-3">

                <div class="accordion" id="accordion1">
                    <div class="card">
                        <div class="card-header p-0 bg-white font-weight-bold" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none text-dark"
                                    type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <i class="fa fa-plus"></i> Electro-Ménager
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion1">
                            <div class="card-body">

                                @if($productCategories->count())
                                <ul type="circle" class="list-unstyled simple-load-more">
                                    <li><a class="text-danger" href="{{ route('store.home_appliance') }}">Tout</a></li>

                                    @foreach($productCategories as $productCategory)
                                    <li><a class="{{ $productCategory->getSelected(Request::query('product_category_id')) }}"
                                            href="{{ route('store.home_appliance', ['product_category_id' => $productCategory->id]) }}">{{ $productCategory->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                <p>Aucune catégorie de produits</p>
                                @endif

                            </div>
                        </div>

                        <div class="card-footer p-2 text-right"><a href="{{ route('productCategory.index', ['product_ray_id' => 3]) }}"
                            class="text-danger">Tout afficher</a></div>
                    </div>
                </div>

            </aside>
            <div class="col-lg-9">

                @if($products->count())

                <div class="row mb-4">
                    @foreach($products as $product)
                    <article class="col-md-3 mb-3 product-item hvr-float">
                        <div class="text-right">
                            <span class="badge {{ $product->onDiscount() }}">{{ $product->getPercentage() }}%</span>
                        </div>
                        <div class="card border-primary h-100">
                            <a href="{{ route('store.show', ['product' => $product]) }}">
                                <img id="img{{ $product->id }}" data-src="{{ $product->image->link }}"
                                src="https://via.placeholder.com/200x150.png?text=Chargement..."
                                class="card-img-top prd-img lazyrate" alt="Image">
                            </a>
                            <span class="bg-primary text-white text-center">{{ $product->name }}</span>
                            <div class="card-body p-2 text-center">
                                <h6 class="card-title m-0">{{ $product->description }}</h6>

                                <p class="m-0">
                                    <a
                                        href="{{ route('productType.show', ['productType' => $product->productType]) }}">{{ $product->productType->name }}</a>
                                </p>

                                <p class="card-text m-0">
                                    {{ $product->conversion->name }}
                                </p>

                                <h6 class="text-dark m-0">
                                    <strong>{{ $product->getNewPrice() }}</strong>
                                    @if($product->new_price != $product->old_price)
                                    / <strike>{{ $product->getOldPrice() }}</strike>
                                    @endif
                                </h6>
                            </div>
                            <div class="card-footer text-center p-2">
                                <a data-toggle="tooltip" title="Ajouter au panier"
                                    href="{{ route('cart.add', ['product' => $product]) }}" class="add-product-to-cart text-primary"><i
                                        class="fa fa-shopping-cart"></i></a>

                                <a data-toggle="tooltip" title="Ajouter au favoris"
                                    href="{{ route('user.add', ['product' => $product]) }}" class="text-danger px-5"><i
                                        class="fa fa-heart"></i></a>

                                <a data-toggle="tooltip" title="Détails"
                                    href="{{ route('store.show', ['product' => $product]) }}" class="text-info"><i
                                        class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>

                <p class="text-right text-muted">
                    Page {{ $products->currentPage() }} sur {{ $products->lastPage() }}, montrant
                    {{ count($products->items()) }} enregistrement (s) sur {{ $products->total() }} au total
                </p>

                {{ $products->onEachSide(5)->links() }}

                @else
                <x-empty-data module="store" />
                @endif

            </div>
        </div>
    </div>
</section>

@endsection