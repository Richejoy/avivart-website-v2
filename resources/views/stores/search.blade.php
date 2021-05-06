@extends('layouts.store', ['title' => Request::query('name')])

@section('body')

<section class="bg-light py-3">
	<div class="container-fluid">
		<div class="row">

			<aside class="col-lg-3">
				
			</aside>
			
			<div class="col-lg-9">

				<h2>Recherche de produits ({{ $products->count() }})</h2>

				@if($products->count())

				<div class="row mb-4" id="product-container">
					@foreach($products as $product)
					<article class="col-md-3 mb-3 product-item hvr-float">
						<div class="text-right">
							<span class="badge {{ $product->onDiscount() }}">{{ $product->getPercentage() }}%</span>
						</div>
						<div class="card h-100">
						  <img id="img{{ $product->id }}" data-src="{{ $product->image->link }}" src="https://via.placeholder.com/200x150.png?text=Chargement..." class="card-img-top prd-img lazyrate" alt="Image">
						  <span class="bg-primary text-white text-center">{{ $product->name }}</span>
						  <div class="card-body p-2 text-center">
						    <h5 class="card-title m-0">{{ $product->description }}</h5>

						    <p class="m-0">
						    	<a href="{{ route('productType.show', ['productType' => $product->productType]) }}">{{ $product->productType->name }}</a>
						    </p>

						    <p class="card-text m-0">
						    	<a class="text-secondary" href="{{ route('conversion.show', ['conversion' => $product->conversion]) }}">{{ $product->conversion->name }}</a>
						    </p>

						    <h6 class="text-dark m-0">
						    	<strong>{{ $product->new_price }} {{ $product->currency->name }}</strong>
						    	@if($product->new_price != $product->old_price)
						    	 / <strike>{{ $product->old_price }} {{ $product->currency->name }}</strike>
						    	 @endif
						    </h6>
						  </div>
						  <div class="card-footer text-center">
						    	<a data-toggle="tooltip" title="Ajouter au panier" href="{{ route('cart.add', ['product' => $product]) }}" class="text-primary"><i class="fa fa-shopping-cart"></i></a>

						    	<a data-toggle="tooltip" title="Ajouter au favorites" href="{{ route('user.add', ['product' => $product]) }}" class="text-danger px-5"><i class="fa fa-heart"></i></a>

						    	<a data-toggle="tooltip" title="Détails" href="{{ route('store.show', ['product' => $product]) }}" class="text-info"><i class="fa fa-info-circle"></i></a>
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
	</div>
</section>

@endsection