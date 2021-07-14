@extends('layouts.ad', ['title' => 'Accueil'])

@section('body')

<section class="">
	<div class="container">
		<div class="col-lg-10 offset-lg-1">
			
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			        <img src="{{ asset('public/img/ads/avivart2.jpg') }}" class="d-block w-100" alt="Image">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('public/img/ads/IMG-20210707-WA0000.jpg') }}" class="d-block w-100" alt="Image">
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('public/img/ads/IMG-20210707-WA0000.jpg') }}" class="d-block w-100" alt="Image">
			    </div>
			  </div>
			</div>

		</div>
	</div>
</section>

<section class="bg-light py-3">
	<div class="container-fluid">
		<div class="row">

			<aside class="col-lg-3 py-3">
				<h2 class="font-weight-bold">Publicités</h2>
			</aside>

			<div class="col-lg-9">

				<div class="row py-3">
					<div class="col-md-12">
						<h2 class="font-weight-bold">Annonces VIP</h2>
					</div>
				</div>

				<div class="row">
					
					<div class="col-md-4 mb-3 ad-item">
						<div class="card h-100">
						  <img src="{{ asset('public/img/ads/001/IMG-20210708-WA0012.jpg') }}" class="card-img-top img-200x200" alt="Image">
						  <div class="card-body">
						  	<p class="font-weight-bold">4.500.000FCFA</p>
						    <h5 class="card-title font-weight-bold">
						    	<a href="{{ route('ad.show', array('ad' => 1)) }}">Voiture double cabine</a></h5>
						    <p class="card-text text-secondary">
						    	<i class="fa fa-map-marker"></i> Lomé, TOGO
						    </p>
						  </div>
						  <div class="card-footer p-1 text-center">
						  	<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-danger btn-sm"><i class="fa fa-phone"></i> Appel</a>

						  	<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-success btn-sm mx-3"><i class="fa fa-whatsapp"></i> Whatsapp</a>

						  	<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-warning btn-sm"><i class="fa fa-comments"></i> SMS</a>
						  </div>
						</div>
					</div>

				</div>

				<hr>

				<div class="row py-3">
					<div class="col-md-12">
						<h2 class="font-weight-bold">Annonces les plus récentes</h2>
					</div>
				</div>

				<div class="row">
					
					<div class="col-md-4 mb-3 ad-item">
						<div class="card h-100">
						  <img src="{{ asset('public/img/ads/001/IMG-20210708-WA0012.jpg') }}" class="card-img-top img-200x200" alt="Image">
						  <div class="card-body">
						  	<p class="font-weight-bold">4.500.000FCFA</p>
						    <h5 class="card-title font-weight-bold">
						    	<a href="{{ route('ad.show', array('ad' => 1)) }}">Voiture double cabine</a></h5>
						    <p class="card-text text-secondary">
						    	<i class="fa fa-map-marker"></i> Lomé, TOGO
						    </p>
						  </div>
						  <div class="card-footer p-1 text-center">
						  	<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-danger btn-sm"><i class="fa fa-phone"></i> Appel</a>

						  	<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-success btn-sm mx-3"><i class="fa fa-whatsapp"></i> Whatsapp</a>

						  	<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-warning btn-sm"><i class="fa fa-comments"></i> SMS</a>
						  </div>
						</div>
					</div>

				</div>

				<hr>

				<div class="row py-3">
					<div class="col-md-12">
						<h2 class="font-weight-bold">Toutes nos annonces</h2>
					</div>
				</div>

				<div class="row">
					
					<div class="col-md-4 mb-3 ad-item">
						<div class="card h-100">
						  <img src="{{ asset('public/img/ads/001/IMG-20210708-WA0012.jpg') }}" class="card-img-top img-200x200" alt="Image">
						  <div class="card-body">
						  	<p class="font-weight-bold">4.500.000FCFA</p>
						    <h5 class="card-title font-weight-bold">
						    	<a href="{{ route('ad.show', array('ad' => 1)) }}">Voiture double cabine</a></h5>
						    <p class="card-text text-secondary">
						    	<i class="fa fa-map-marker"></i> Lomé, TOGO
						    </p>
						  </div>
						  <div class="card-footer p-1 text-center">
						  	<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-danger btn-sm"><i class="fa fa-phone"></i> Appel</a>

						  	<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-success btn-sm mx-3"><i class="fa fa-whatsapp"></i> Whatsapp</a>

						  	<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-warning btn-sm"><i class="fa fa-comments"></i> SMS</a>
						  </div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</section>

@endsection