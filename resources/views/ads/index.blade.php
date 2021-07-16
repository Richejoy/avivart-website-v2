@extends('layouts.ad', ['title' => 'Publier des annonces que vous désirez'])

@section('body')

<section class="">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2">
			</div>

			<div class="col-lg-8">
				
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

			<div class="col-lg-2">
			</div>
		</div>
	</div>
</section>

<section class="bg-light py-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">

				<div class="row py-3">
					<div class="col-md-12">
						<h2 class="font-weight-bold">Annonces VIP</h2>
					</div>
				</div>

				<div class="row slick-slider">

					@for($i = 0; $i < 4; $i++)

					@if($vipAds->count())

					@foreach($vipAds as $ad)
					<div class="col-md-3 mb-3 ad-item">
						<div class="card h-100">
						  <img src="{{ $ad->image->link }}" class="card-img-top img-200x200" alt="Image">
						  <div class="card-body">
						  	<p class="font-weight-bold">{{ $ad->getPrice() }}</p>
						    <h5 class="card-title font-weight-bold">
						    	<a href="{{ route('ad.show', array('ad' => $ad)) }}">{{ $ad->name }}</a></h5>
						    <div class="card-text text-secondary">
						    	<span class="material-icons">location_on</span>{{ $ad->user->location() }}
						    </div>
						    <div class="card-text text-secondary">
						    	<span class="material-icons">timer</span>
						    	<time class="timeago" datetime="{{ $ad->user->image->created }}">{{ $ad->user->image->created }}</time>
						    </div>
						  </div>
						  <div class="card-footer p-1 text-center">
						  	<a title="Ajouter au favoris" href="{{ route('user.add_ad', ['ad' => $ad]) }}" class="mr-4"><i class="fa fa-heart text-primary"></i></a>

						  	<a title="Appel" href="tel:{{ $ad->user->longPhone() }}" class=""><i class="fa fa-phone text-danger"></i></a>

						  	<a title="Whatsapp" href="https://web.whatsapp.com/send?phone={{ $ad->user->longPhone() }}&text=Bonjour!" class="mx-4"><i class="fa fa-whatsapp text-success"></i></a>

						  	<a title="Message" href="mailto:{{ $ad->user->email }}?subject=Annonce&body=Bonjour!" class=""><i class="fa fa-comments text-warning"></i></a>
						  </div>
						</div>
					</div>
					@endforeach

					@else

					<div class="col-lg-12">
						<p>Rien</p>
					</div>

					@endif

					@endfor

				</div>

				<hr>

				<div class="row py-3">
					<div class="col-md-12">
						<h2 class="font-weight-bold">Annonces les plus récentes</h2>
					</div>
				</div>

				<div class="row">
					
					@if($latestAds->count())

					@foreach($latestAds as $ad)
					<div class="col-md-3 mb-3 ad-item">
						<div class="card h-100">
						  <img src="{{ $ad->image->link }}" class="card-img-top img-200x200" alt="Image">
						  <div class="card-body">
						  	<p class="font-weight-bold">{{ $ad->getPrice() }}</p>
						    <h5 class="card-title font-weight-bold">
						    	<a href="{{ route('ad.show', array('ad' => $ad)) }}">{{ $ad->name }}</a></h5>
						    <div class="card-text text-secondary">
						    	<span class="material-icons">location_on</span>{{ $ad->user->location() }}
						    </div>
						    <div class="card-text text-secondary">
						    	<span class="material-icons">timer</span>
						    	<time class="timeago" datetime="{{ $ad->user->image->created }}">{{ $ad->user->image->created }}</time>
						    </div>
						  </div>
						  <div class="card-footer p-1 text-center">
						  	<a title="Ajouter au favoris" href="{{ route('user.add_ad', ['ad' => $ad]) }}" class="mr-4"><i class="fa fa-heart text-primary"></i></a>

						  	<a title="Appel" href="tel:{{ $ad->user->longPhone() }}" class=""><i class="fa fa-phone text-danger"></i></a>

						  	<a title="Whatsapp" href="https://web.whatsapp.com/send?phone={{ $ad->user->longPhone() }}&text=Bonjour!" class="mx-4"><i class="fa fa-whatsapp text-success"></i></a>

						  	<a title="Message" href="mailto:{{ $ad->user->email }}?subject=Annonce&body=Bonjour!" class=""><i class="fa fa-comments text-warning"></i></a>
						  </div>
						</div>
					</div>
					@endforeach

					@else

					<div class="col-lg-12">
						<p>Rien</p>
					</div>

					@endif

				</div>

				<hr>

				<div class="row py-3">
					<div class="col-md-12">
						<h2 class="font-weight-bold">Toutes nos annonces</h2>
					</div>
				</div>

				<div class="row">
					
					@if($ads->count())

					@foreach($ads as $ad)
					<div class="col-md-3 mb-3 ad-item">
						<div class="card h-100">
						  <img src="{{ $ad->image->link }}" class="card-img-top img-200x200" alt="Image">
						  <div class="card-body">
						  	<p class="font-weight-bold">{{ $ad->getPrice() }}</p>
						    <h5 class="card-title font-weight-bold">
						    	<a href="{{ route('ad.show', array('ad' => $ad)) }}">{{ $ad->name }}</a></h5>
						    <div class="card-text text-secondary">
						    	<span class="material-icons">location_on</span>{{ $ad->user->location() }}
						    </div>
						    <div class="card-text text-secondary">
						    	<span class="material-icons">timer</span>
						    	<time class="timeago" datetime="{{ $ad->user->image->created }}">{{ $ad->user->image->created }}</time>
						    </div>
						  </div>
						  <div class="card-footer p-1 text-center">
						  	<a title="Ajouter au favoris" href="{{ route('user.add_ad', ['ad' => $ad]) }}" class="mr-4"><i class="fa fa-heart text-primary"></i></a>

						  	<a title="Appel" href="tel:{{ $ad->user->longPhone() }}" class=""><i class="fa fa-phone text-danger"></i></a>

						  	<a title="Whatsapp" href="https://web.whatsapp.com/send?phone={{ $ad->user->longPhone() }}&text=Bonjour!" class="mx-4"><i class="fa fa-whatsapp text-success"></i></a>

						  	<a title="Message" href="mailto:{{ $ad->user->email }}?subject=Annonce&body=Bonjour!" class=""><i class="fa fa-comments text-warning"></i></a>
						  </div>
						</div>
					</div>
					@endforeach

					@else

					<div class="col-lg-12">
						<p>Rien</p>
					</div>

					@endif

				</div>

			</div>
		</div>
	</div>
</section>

@endsection