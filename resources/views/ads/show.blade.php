@extends('layouts.ad', ['title' => 'Accueil'])

@section('body')

<section class="bg-white py-3">
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-6">
				<p>
					<img class="xzoom" src="{{ asset('public/img/ads/001/IMG-20210708-WA0012.jpg') }}" xoriginal="{{ asset('public/img/ads/001/IMG-20210708-WA0012.jpg') }}" title="Voiture double cabine 4x4 L200" />
				</p>

				<div class="xzoom-thumbs">
				  <a href="{{ asset('public/img/ads/001/IMG-20210708-WA0012.jpg') }}">
				    <img class="xzoom-gallery" width="80" src="{{ asset('public/img/ads/001/IMG-20210708-WA0012.jpg') }}"  xpreview="{{ asset('public/img/ads/001/IMG-20210708-WA0012.jpg') }}" title="Voiture double cabine 4x4 L200">
				  </a>
				  <a href="{{ asset('public/img/ads/001/IMG-20210708-WA0013.jpg') }}">
				    <img class="xzoom-gallery" width="80" src="{{ asset('public/img/ads/001/IMG-20210708-WA0013.jpg') }}" title="Voiture double cabine 4x4 L200">
				  </a>
				  <a href="{{ asset('public/img/ads/001/IMG-20210708-WA0014.jpg') }}">
				    <img class="xzoom-gallery" width="80" src="{{ asset('public/img/ads/001/IMG-20210708-WA0014.jpg') }}" title="Voiture double cabine 4x4 L200">
				  </a>
				  <a href="{{ asset('public/img/ads/001/IMG-20210708-WA0015.jpg') }}">
				    <img class="xzoom-gallery" width="80" src="{{ asset('public/img/ads/001/IMG-20210708-WA0015.jpg') }}" title="Voiture double cabine 4x4 L200">
				  </a>
				  <a href="{{ asset('public/img/ads/001/IMG-20210708-WA0016.jpg') }}">
				    <img class="xzoom-gallery" width="80" src="{{ asset('public/img/ads/001/IMG-20210708-WA0016.jpg') }}" title="Voiture double cabine 4x4 L200">
				  </a>
				</div>
			</div>

			<div class="col-lg-6">

				<h3 class="font-weight-bold">Voiture double cabine</h3>

				<p class="text-secondary">Description : 4x4 L200</p>

				<h4 class="text-dark"><u>Caractéristiques</u></h4>
				<ol class="list-unstyled">
					<li>Marque MITSUBISHI</li>
					<li>Type JNK770</li>
					<li>Moteur LY4675 très bon état</li>
					<li>Climatisation d'origine</li>
					<li>Immatriculé BC le 04-10-2019</li>
					<li>Très peu utilisé</li>
					<li>Visite technique encore valable jusqu'au 22-12-2021</li>
					<li>Assurance CEDEAO encore valable jusqu'au 09 janvier 2022</li>
					<li>Prix <strong>4.500.000FCFA</strong> à débattre</li>
				</ol>

				<h4 class="text-danger">Autres informations utiles</h4>

				<p>Contact : (+228) 99 41 42 08 / 92 10 78 78</p>
				<p>Email : <a href="mailto:contact@avivart.net">contact@avivart.net</a></p>

				<p class="">
					<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-danger btn-sm"><i class="fa fa-phone"></i> Appel</a>

					<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-success btn-sm mx-3"><i class="fa fa-whatsapp"></i> Whatsapp</a>

					<a href="{{ route('ad.show', array('ad' => 1)) }}" class="btn btn-warning btn-sm"><i class="fa fa-comments"></i> SMS</a>
				</p>
				
			</div>
			
		</div>
	</div>
</section>

@endsection