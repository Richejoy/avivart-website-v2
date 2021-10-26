@extends('layouts.store', ['title' => 'Commandez vos aliments en ligne, payez sans frais et faites vous livrer'])

@section('body')

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
                                    <i class="fa fa-plus"></i> Tous nos Rayons
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion1">
                            <div class="card-body">

                                @if($productRays->count())
                                <ol class="list-unstyled">
                                    @foreach($productRays as $productRay)
                                    <li><a href="{{ route('productRay.show', ['productRay' => $productRay]) }}">{{ $productRay->name }}
                                            <i class="fa fa-chevron-right float-right"></i></a></li>

                                    @if($productRay->productCategories->count())
                                    <ul class="simple-load-more">
                                        @foreach($productRay->productCategories as $productCategory)
                                        <li class=""><a class="text-muted"
                                                href="{{ route('productCategory.show', ['productCategory' => $productCategory]) }}">{{ $productCategory->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif

                                    @endforeach
                                </ol>
                                @else
                                <p>Aucun rayon de produits</p>
                                @endif

                            </div>
                        </div>

                        <div class="card-footer p-2 text-right"><a href="{{ route('productRay.index') }}"
                            class="text-danger">Tout afficher</a></div>
                    </div>
                </div>

                <div class="mt-3 accordion" id="accordion2">
                    <div class="card">
                        <div class="card-header p-0 bg-white font-weight-bold" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none text-dark"
                                    type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                    aria-controls="collapseTwo">
                                    <i class="fa fa-plus"></i> Tous nos Types
                                </button>
                            </h2>
                        </div>

                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion2">
                            <div class="card-body">

                                @if($productTypes->count())
                                <ol class="list-unstyled simple-load-more">
                                    @foreach($productTypes as $productType)
                                    <li><a class="text-muted"
                                            href="{{ route('productType.show', ['productType' => $productType]) }}">{{ $productType->name }}</a>
                                    </li>
                                    @endforeach
                                </ol>
                                @else
                                <p>Aucun type de produits</p>
                                @endif

                            </div>
                        </div>

                        <div class="card-footer p-2 text-right"><a href="{{ route('productType.index') }}"
                            class="text-danger">Tout afficher</a></div>
                    </div>
                </div>

            </aside>

            <div class="col-lg-9">
                <div
                    class="p-2 mt-xs-3 mb-3 bg-success text-white font-weight-bold shadow-sm rounded">
                    <i class="fa fa-bell fa-pulse"></i> Commandez vos aliments en ligne, payez sans frais et faites vous
                    livrer
                </div>

                @if($products->count())

                <div class="row mb-4" id="product-container">
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

                @else
                <x-empty-data module="store" />
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('img/pubs/IMG-20211026-WA0006.jpg') }}" alt="Image" class="w-100">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('img/pubs/IMG-20211026-WA0007.jpg') }}" alt="Image" class="w-100">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('img/pubs/IMG-20211026-WA0008.jpg') }}" alt="Image" class="w-100">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('img/pubs/IMG-20211026-WA0009.jpg') }}" alt="Image" class="w-100">
            </div>
        </div>
    </div>
</section>

@endsection