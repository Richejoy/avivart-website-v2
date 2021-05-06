<div class="splashscreen">
	<video muted autoplay loop>
		<source src="{{ asset('public/videos/splashscreen.mp4') }}" type="video/mp4">
		Votre navigateur n'est pas à jour pour lire la vidéo.
	</video>

	<div class="content bg-white p-5 text-center">
		<p>
			<a href="{{ route('page.splashscreen') }}?redirect={{ route('page.index') }}">
				<img class="logo" src="{{ asset('public/img/logo.png') }}" alt="LOGO">
			</a>
		</p>
		<p>
			<a href="{{ route('page.splashscreen') }}?redirect={{ route('informatics.index') }}" class="btn btn-primary btn-lg">Informatique</a>

			<a href="{{ route('page.splashscreen') }}?redirect={{ route('store.index') }}" class="btn btn-success btn-lg">Boutique</a>
		</p>
		<p>
			<a href="{{ route('page.splashscreen') }}?redirect={{ route('cosmetic.index') }}" class="btn btn-info btn-lg">Cosmétique</a>

			<a href="{{ route('page.splashscreen') }}?redirect={{ route('agribusiness.index') }}" class="btn btn-dark btn-lg">Agrobusiness</a>
		</p>
		<p>
			<a href="{{ route('page.splashscreen') }}?redirect={{ route('immovable.index') }}" class="btn btn-danger btn-lg">Immobilier</a>

			<a href="{{ route('page.splashscreen') }}?redirect={{ route('ad.index') }}" class="btn btn-warning btn-lg">Annonces</a>
		</p>
	</div>
</div>