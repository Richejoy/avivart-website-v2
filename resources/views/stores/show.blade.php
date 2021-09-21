@extends('layouts.store', ['title' => $product->name])

@section('body')
<section class="bg-success py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="font-weight-bold text-light">{{ $product->name }}</h2>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-4">
                <h2 class="font-weight-bold">{{ $product->name }}</h2>
                <p>Description : {{ $product->description }}</p>

                <p class="">Rayon : <a
                        href="{{ route('productRay.show', ['productRay' => $product->productCategory->productRay]) }}">{{ $product->productCategory->productRay->name }}</a>
                </p>

                <p class="">Catégorie : <a
                        href="{{ route('productCategory.show', ['productCategory' => $product->productCategory]) }}">{{ $product->productCategory->name }}</a>
                </p>

                <p class="">Type : <a
                        href="{{ route('productType.show', ['productType' => $product->productType]) }}">{{ $product->productType->name }}</a>
                </p>

                <p class="">Conversion : {{ $product->conversion->name }}
                </p>

                <p class="">Devise : {{ $product->currency->name }}</p>

                <p class="">Stock : {{ $product->quantity }}</p>

                <p class="">En promotion : {{ $product->on_discount ? 'Oui' : 'Non' }}</p>

                <h6 class="">
                    Prix : <strong>{{ $product->getNewPrice() }}</strong>
                    @if($product->new_price != $product->old_price)
                    / <strike>{{ $product->getOldPrice() }}</strike>
                    @endif
                </h6>

                <form class="my-3" method="get" action="{{ route('cart.add', ['product' => $product]) }}"
                    accept-charset="utf-8" autocomplete="off">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-shopping-cart"></i></div>
                        </div>
                        <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Quantité"
                            value="1" min="1" step="1" required>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-dark">Ajouter au
                                panier</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <h5 class="font-weight-bold">Caractéristiques :</h5>
                <p class="text-muted">
                    {!! nl2br($product->characteristics) !!}
                </p>

                <hr>

                <h4 class="my-3">Partagez</h4>

                <ul class="list-unstyled d-flex flex-row justify-content-around align-items-center my-2">
                    <li class="">
                        <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" class="text-white text-decoration-none social-icon facebook hvr-pop"><i
                                class="fa fa-facebook"></i></a>
                    </li>
                    <li class="">
                        <a target="_blank" href="https://twitter.com/intent/tweet?url={{ Request::url() }}" class="text-white text-decoration-none social-icon twitter hvr-pulse"><i
                                class="fa fa-twitter"></i></a>
                    </li>
                    <li class="">
                        <a target="_blank" href="https://plus.google.com/share?url={{ Request::url() }}" class="text-white text-decoration-none social-icon youtube hvr-hang"><i
                                class="fa fa-google-plus"></i></a>
                    </li>
                </ul>

                <hr>

                <p>
                    <a target="_blank" data-toggle="tooltip" title="Appel" href="{{ $product->phoneLink() }}" class=""><i
                                            class="fa fa-phone fa-2x text-danger"></i></a>

                    <a target="_blank" data-toggle="tooltip" title="Whatsapp"
                                        href="{{ $product->whatsappLink() }}"
                                        class="ml-4 mr-2"><i class="fa fa-whatsapp fa-2x text-success"></i></a>

                    <a target="_blank" data-toggle="tooltip" title="Telegram" href="{{ $product->telegramLink() }}" class="ml-2 mr-4"><i
                                class="fa fa-telegram fa-2x text-primary"></i></a>

                    <a target="_blank" data-toggle="tooltip" title="Message"
                                        href="{{ $product->messageLink() }}" class="mr-4"><i
                                            class="fa fa-comments fa-2x text-warning"></i></a>
                
                    <a data-toggle="tooltip" title="Ajouter au favoris"
                            href="{{ route('user.add', ['product' => $product]) }}" class="text-danger"><i
                                class="fa fa-heart fa-2x"></i></a>
                </p>
            </div>

            <div class="col-lg-4">
                <p class="">
                    <img id="img{{ $product->id }}" data-src="{{ $product->image->link }}"
                        src="https://via.placeholder.com/200x150.png?text=Chargement..." class="w-100 lazyrate"
                        alt="Image">
                </p>
            </div>

        </div>
    </div>
</section>

@endsection