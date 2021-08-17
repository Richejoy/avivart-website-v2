@extends('layouts.store', ['title' => Request::query('name') ?? 'Recherche'])

@section('body')

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-3">

                <div class="my-3">
                    <p>
                        <img src="https://avivart.net/images/galleries/IMG-20210723-WA0018.jpg" alt="Image" class="w-100">
                    </p>
                    <p>
                        <img src="https://avivart.net/images/galleries/IMG-20210517-WA0006.jpg" alt="Image" class="w-100">
                    </p>
                    <p>
                        <img src="https://avivart.net/images/galleries/IMG-20210715-WA0005.jpg" alt="Image" class="w-100">
                    </p>
                </div>

            </aside>

            <div class="col-lg-9">

                <h2 class="font-weight-bold text-dark">Recherche de produits ({{ $products->count() }})</h2>

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
                                    href="{{ route('cart.add', ['product' => $product]) }}" class="text-primary"><i
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
                <p>Aucun produit</p>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <img src="https://avivart.net/images/galleries/IMG-20210614-WA0007.jpg" alt="Image" class="w-100">
            </div>
            <div class="col-md-3">
                <img src="https://avivart.net/images/galleries/IMG-20210723-WA0019.jpg" alt="Image" class="w-100">
            </div>
            <div class="col-md-3">
                <img src="https://avivart.net/images/galleries/IMG-20210601-WA0000.jpg" alt="Image" class="w-100">
            </div>
            <div class="col-md-3">
                <img src="https://avivart.net/images/galleries/IMG-20210721-WA0039.jpg" alt="Image" class="w-100">
            </div>
        </div>
    </div>
</section>

@endsection