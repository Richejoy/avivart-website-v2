@extends('layouts.ad', ['title' => $ad->name])

@section('body')

<section class="bg-white py-3">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-6">
				<p>
					<img class="xzoom" src="{{ $ad->image->link }}" xoriginal="{{ $ad->image->link }}" title="{{ $ad->image->description }}" alt="{{ $ad->image->description }}" />
				</p>

				<div class="xzoom-thumbs">
				  <a href="{{ $ad->image->link }}" class="text-decoration-none">
				    <img class="xzoom-gallery" width="100" src="{{ $ad->image->link }}"  xpreview="{{ $ad->image->link }}" title="{{ $ad->image->description }}" alt="{{ $ad->image->description }}">
				  </a>

				  <!-- Others images -->
				  @if($adsImages->count())
				  @foreach($adsImages as $adImage)
				  <a href="{{ $adImage->image->link }}" class="text-decoration-none">
				    <img class="xzoom-gallery" width="100" src="{{ $adImage->image->link }}" title="{{ $ad->image->description }}" alt="{{ $ad->image->description }}">
				  </a>
				  @endforeach
				  @endif
				</div>
			</div>

			<div class="col-lg-6">

				<h3 class="font-weight-bold">{{ $ad->name }}</h3>

				<p class="text-secondary">Description : {{ $ad->description }}</p>

				<h4 class="text-dark"><u>Caractéristiques</u></h4>
				<p class="text-muted">
					{!! nl2br($ad->characteristics) !!}
				</p>

				<h5>Prix : <strong>{{ $ad->getPrice() }}</strong></h5>

				<h4 class="text-danger">Autres informations utiles</h4>

				<p><span class="material-icons">phone</span> Contact : {{ $ad->user->longPhone() }}</p>
				<p><span class="material-icons">email</span> Email : <a href="mailto:{{ $ad->user->email }}?subject=Annonce&message=Bonjour">{{ $ad->user->email }}</a></p>
				<p class="card-text text-secondary">
					<span class="material-icons">location_on</span> Localisation : {{ $ad->user->location() }}
				</p>
				<p class="card-text text-secondary">
					<span class="material-icons">timer</span> Date :
					<time class="timeago" datetime="{{ $ad->image->created }}">{{ $ad->image->created }}</time>
				</p>

				<p class="">
					<a href="#" class="btn btn-danger btn-sm"><span class="material-icons">phone</span> Appel</a>

					<a href="#" class="btn btn-success btn-sm mx-5"><span class="material-icons">forum</span> Whatsapp</a>

					<a href="#" class="btn btn-warning btn-sm"><span class="material-icons">message</span> Message</a>
				</p>
				
			</div>
			
		</div>
	</div>
</section>

@endsection