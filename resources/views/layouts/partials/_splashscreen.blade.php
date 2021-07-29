<div class="splashscreen">
	<video muted autoplay loop>
		<source src="{{ asset('public/videos/splash.mp4') }}" type="video/mp4">
		<source src="{{ asset('public/videos/splashscreen0.webm') }}" type="video/webm">
		Votre navigateur n'est pas à jour pour lire la vidéo.
	</video>

	<div class="content bg-white px-4 py-2 text-center">

		<p>
			<a href="{{ route('page.splashscreen') }}?redirect={{ route('page.index') }}">
				<img class="logo" src="{{ asset('public/img/logo.png') }}" alt="LOGO">
			</a>
		</p>

		<table class="table">
			<tr>
				<td>
					<a href="{{ route('page.splashscreen') }}?redirect={{ route('informatics.index') }}" class="btn btn-primary btn-lg btn-block">Informatique</a>
				</td>
				<td>
					<a href="{{ route('page.splashscreen') }}?redirect={{ route('store.index') }}" class="btn btn-success btn-lg btn-block">Boutique</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="{{ route('page.splashscreen') }}?redirect={{ route('ad.index') }}" class="btn btn-warning btn-lg btn-block">Annonces</a>
				</td>
				<td>
					<a href="{{ route('page.splashscreen') }}?redirect={{ route('cosmetic.index') }}" class="btn btn-info btn-lg btn-block">Cosmétique</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="{{ route('page.splashscreen') }}?redirect={{ route('agribusiness.index') }}" class="btn btn-dark btn-lg btn-block">Agrobusiness</a>
				</td>
				<td>
					<a href="{{ route('page.splashscreen') }}?redirect={{ route('immovable.index') }}" class="btn btn-danger btn-lg btn-block">Immobilier</a>
				</td>
			</tr>
		</table>
		
		<p>
			<a href="{{ route('page.splashscreen') }}?redirect={{ route('page.index') }}" class="btn btn-link">Nous découvrir</a>
		</p>
	</div>
</div>