<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" integrity="sha512-SJw7jzjMYJhsEnN/BuxTWXkezA2cRanuB8TdCNMXFJjxG9ZGSKOX5P3j03H6kdMxalKHZ7vlBMB4CagFP/de0A==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />

	<title>{{ config('app.name') }} - Boutique - {{ $title ?? 'Laravel' }}</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/loadMoreResults/css/loadMoreResults.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/splashscreen.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/store.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/avivart.css') }}">
</head>
<body>

	@if(session()->has('splashscreen'))
	<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
		<div class="container-fluid">
	  <a  class="navbar-brand p-0 hvr-push" href="{{ route('page.index') }}"><img src="{{ asset('public/img/logo.jpg') }}" alt="{{ config('app.name') }}" class="logo-xs"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse justify-content-md-end" id="navbarSupportedContent">
		<ul class="navbar-nav">
	      	<li class="nav-item hvr-underline-from-center">
		        <a class="nav-link text-danger font-weight-bold" href="{{ route('page.index') }}">Accueil</a>
		    </li>

		    <li class="nav-item hvr-underline-from-center active">
		        <a class="nav-link text-primary font-weight-bold" href="{{ route('store.index') }}">Boutique</a>
		    </li>

		    <li class="nav-item hvr-underline-from-center">
	        	<a class="nav-link" href="{{ route('store.organic_foods') }}">Aliments Bio</a>
	      	</li>

	      <li class="nav-item hvr-underline-from-center">
	        <a class="nav-link" href="{{ route('store.manufactured_foods') }}">Aliments Manufacturés</a>
	      </li>

	      <li class="nav-item hvr-underline-from-center">
	        <a class="nav-link" href="{{ route('store.home_appliance') }}">Electro-Ménager</a>
	      </li>

	      <li class="nav-item hvr-underline-from-center">
	        <a class="nav-link" href="{{ route('store.high_tech') }}">High-Tech</a>
	      </li>

	      <li class="nav-item hvr-underline-from-center">
	        <a class="nav-link" href="{{ route('store.other_products') }}">Autres Produits</a>
	      </li>

	      <li class="nav-item hvr-underline-from-center">
	        <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
	      </li>

	      <li class="nav-item hvr-underline-from-center">
	        <a class="nav-link" href="{{ route('page.login') }}">Connexion</a>
	      </li>

	    </ul>
	  </div>
	  </div>
	</nav>

	<header class="bg-white">
		<section class="container-fluid">
			<div class="row pt-3">
				<div class="col-lg-3">
					<p style="font-size: 12px" class="m-lg-0">Horaires : 7j/7j de 6h30mn à 21h00 Tél : (+228) 92 10 78 78</p>
					<p style="font-size: 12px" class="m-lg-0 text-danger">Nous vendons au prix du marché sans surenchère.</p>
				</div>
				<div class="col-lg-6">
					<form class="" method="get" action="{{ route('store.search') }}" accept-charset="utf-8" autocomplete="off">
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
						  <input type="search" name="name" id="name" class="form-control border-danger" placeholder="Rechercher un aliment ou produit..." required value="{{ Request::query('name') }}">
						  <div class="input-group-append">
						    <button type="submit" class="btn btn-danger hvr-glow">Rechercher</button>
						  </div>
						</div>
	    			</form>
				</div>
				<div class="col-lg-3">
					<div>
						<a class="btn btn-light hvr-bounce-to-bottom" href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i> ({{ Cart::content()->count() }})</a>

						<a class="btn btn-light hvr-bounce-to-top" href="{{ route('user.favorite_products') }}"><i class="fa fa-heart"></i> ({{ session('userFavoriteProducts', 0) }})</a>

						<a class="btn btn-light hvr-bounce-to-right" href="{{ route('cart.checkout') }}">
						    @if(session()->has('discountCoupon'))
						        <i class="fa fa-money"></i> ({{ Cart::total() - (Cart::subtotal() * session('discountCoupon')->rate) }} FCFA)
						    @else
						       	<i class="fa fa-money"></i> ({{ Cart::subtotal() }} FCFA)
						    @endif
						</a>

						<a style="font-size: 12px" class="text-decoration-none" href="{{ route('contact.index') }}"><u>Contactez-nous</u></a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3">
					<p style="font-size: 12px" class="m-lg-0"><a href="{{ route('page.register') }}">Inscrivez-vous. Livraison gratuite à partir de 100 000FCFA.</a></p>
				</div>
				<div class="col-lg-9">
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb bg-white m-0 p-0">
					    <li class="breadcrumb-item"><a href="{{ route('page.index') }}" class=" text-danger font-weight-bold">Accueil</a></li>
					    <li class="breadcrumb-item"><a href="{{ route('store.index') }}" class=" text-primary font-weight-bold">Boutique</a></li>
					    <li class="breadcrumb-item"><a href="{{ route('productCategory.index') }}" class="text-primary font-weight-bold">Toutes nos catégories</a></li>
					    <li class="breadcrumb-item active" aria-current="page">{{ $title ?? 'Laravel' }}</li>
					  </ol>
					</nav>
				</div>
			</div>
		</section>
	</header>

	<main>
		@yield('body')
	</main>

	<footer class="main-footer">
		<section class="content py-lg-4">
			<div class="container-fluid pt-5 pb-3">
				<div class="row">
					<div class="col-lg-3">
						<h4 class="text-white font-weight-bold text-uppercase">Société</h4>
						
						<p class="text-light">Adresse : CAP Kégué</p>
						<p class="text-light">Téléphone : +228 92 10 78 78</p>
						<p class="text-light">Email : contact@avivart.net</p>

						<p>
							<img src="{{ asset('public/img/logo_grey.png') }}" alt="{{ config('app.name') }}" class="logo">
						</p>
					</div>
					<div class="col-lg-3">
						<h4 class="text-white font-weight-bold text-uppercase">Liens Principaux</h4>
						<ul class="list-unstyled">
							<li><a class="text-secondary" href="{{ route('page.index') }}">Accueil</a></li>
							<li><a class="text-secondary" href="{{ route('store.index') }}">Boutique</a></li>
							<li><a class="text-secondary" href="{{ route('store.organic_foods') }}">A Aliments Bio</a></li>
							<li><a class="text-secondary" href="{{ route('store.manufactured_foods') }}">A Aliments Manufacturés</a></li>
							<li><a class="text-secondary" href="{{ route('store.home_appliance') }}">Electro Ménager</a></li>
							<li><a class="text-secondary" href="{{ route('store.high_tech') }}">A High-Tech</a></li>
							<li><a class="text-secondary" href="{{ route('store.other_products') }}">A Autres Produits</a></li>
							<li><a class="text-secondary" href="{{ route('contact.index') }}">Contact</a></li>
							<li><a class="text-secondary" href="{{ route('page.about') }}">A propos</a></li>
						</ul>
					</div>
					<div class="col-lg-2">
						<h4 class="text-white font-weight-bold text-uppercase">Autres Liens</h4>
						<ul class="list-unstyled">
							<li><a class="text-secondary" href="{{ route('informatics.index') }}">Informatique</a></li>
							<li><a class="text-secondary" href="{{ route('cosmetic.index') }}">Cosmétique</a></li>
							<li><a class="text-secondary" href="{{ route('agribusiness.index') }}">Agrobusiness</a></li>
							<li><a class="text-secondary" href="{{ route('immovable.index') }}">Immobilier</a></li>
							<li><a class="text-secondary" href="{{ route('ad.index') }}">Annonces</a></li>
							<li><a class="text-secondary" href="{{ route('page.conditions') }}">Conditions Générales</a></li>
							<li><a class="text-secondary" href="{{ route('page.terms') }}">Termes Généreaux</a></li>
						</ul>
					</div>
					<div class="col-lg-4">
						<h4 class="text-white font-weight-bold text-uppercase">Souscription Newsletter</h4>
						<p class="text-muted">Recevez des mises à jour par email sur notre site et nos offres spéciales.</p>

						{!! Form::open(['route' => 'newsletter.store', 'class' => 'my-4']) !!}
		      				<div class="input-group">
							  <input type="email" name="email" id="email" class="form-control" placeholder="Entrez votre email">
							  <div class="input-group-append">
							    <button type="submit" class="btn btn-secondary">Souscrire</button>
							  </div>
							</div>
	    				{!! Form::close() !!}

	    				<h6 class="my-3 text-white font-weight-bold text-uppercase">Suivez-nous</h6>

	    				<ul class="list-unstyled d-flex flex-row justify-content-around align-items-center my-2">
							<li class="">
								<a href="" class="text-white text-decoration-none social-icon facebook hvr-grow"><i class="fa fa-facebook"></i></a>
							</li>
							<li class="pl-3 pr-3">
								<a href="" class="text-white text-decoration-none social-icon twitter hvr-shrink"><i class="fa fa-twitter"></i></a>
							</li>
							<li class="">
								<a href="" class="text-white text-decoration-none social-icon instagram hvr-pulse"><i class="fa fa-instagram"></i></a>
							</li>
							<li class="">
								<a href="" class="text-white text-decoration-none social-icon whatsapp hvr-push"><i class="fa fa-whatsapp"></i></a>
							</li>
							<li class="">
								<a href="" class="text-white text-decoration-none social-icon youtube hvr-pop"><i class="fa fa-youtube"></i></a>
							</li>
						</ul>

					</div>
				</div>
			</div>
		</section>

		<section class="copyright">
			<div class="container-fluid py-3">
				<div class="row">
					<div class="col-lg-8 text-muted text-lg-center">
						Copyright &copy; {{ date('Y') }} Tous droits réservés, par {{ config('app.name') }} | Ce design est fait par <a class="text-success" href="#" target="_blank">AVIV'ART DESIGN</a></a>
					</div>
					<div class="col-lg-4 text-light text-lg-center">
						<span class="pr-3"><i class="fa fa-credit-card-alt"></i></span>
						<span class="pl-2 pr-2"><i class="fa fa-cc-visa"></i></span>
						<span class="pl-2 pr-2"><i class="fa fa-cc-mastercard"></i></span>
						<span class="pl-2 pr-2"><i class="fa fa-cc-paypal"></i></span>
						<span class="pl-2 pr-2"><i class="fa fa-cc-stripe"></i></span>
						<span class="pl-2 pr-2"><i class="fa fa-cc-jcb"></i></span>
						<span class="pl-3"><i class="fa fa-cc-amex"></i></span>
					</div>
				</div>
			</div>
		</section>
	</footer>

	<!-- Modal -->
	<div class="videoIcon">
		<video muted autoplay loop>
		    <source src="{{ asset('public/videos/v2.mp4') }}" type="video/mp4">
		</video>
	</div>
	<div class="videoPopup">
		<div class="card border-secondary">
			<div class="card-header bg-secondary text-white">Vidéo d'actualité <span data-toggle="tooltip" title="Fermer" class="closeVideoPopup pull-right"><i class="fa fa-close"></i></span></div>
			<video controls class="w-100 p-0">
		        <source src="{{ asset('public/videos/v2.mp4') }}" type="video/mp4">
		    </video>
		</div>
	</div>

	@else
	@include('layouts.partials._splashscreen')
	@endif

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ asset('public/plugins/jquery.lazyrate/js/jquery.lazyrate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/plugins/loadMoreResults/js/loadMoreResults.js') }}"></script>

	<script type="text/javascript" src="{{ asset('public/js/store.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/avivart.js') }}"></script>

	@include('flashy::message')
</body>
</html>