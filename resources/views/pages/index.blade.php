@extends('layouts.page', ['title' => "L'art de mieux vivre"])

@section('body')

<section class="bg-light py-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">

				  	<!-- Row 1 -->
				    <div class="carousel-item active">
				    	<div class="row">
				    		<div class="col-md-4 col-sm-4 wow slideInLeft">
				    			<img src="{{ asset('img/slider1.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    		<div class="col-md-4 col-sm-4 wow slideInUp">
				    			<img src="{{ asset('img/slider2.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    		<div class="col-md-4 col-sm-4 wow slideInRight">
				    			<img src="{{ asset('img/slider3.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    	</div>
				    </div>

				    <!-- Row 2 -->
				    <div class="carousel-item">
				      	<div class="row">
				    		<div class="col-md-4 col-sm-4 wow fadeInLeft">
				    			<img src="{{ asset('img/slider12.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    		<div class="col-md-4 col-sm-4 wow fadeInUp">
				    			<img src="{{ asset('img/slider5.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    		<div class="col-md-4 col-sm-4 wow fadeInRight">
				    			<img src="{{ asset('img/slider6.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    	</div>
				    </div>

				    <!-- Row 3 -->
				    <div class="carousel-item">
				      	<div class="row">
				    		<div class="col-md-4 col-sm-4 wow bounceInLeft">
				    			<img src="{{ asset('img/slider7.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    		<div class="col-md-4 col-sm-4 wow bounceInUp">
				    			<img src="{{ asset('img/slider8.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    		<div class="col-md-4 col-sm-4 wow bounceInRight">
				    			<img src="{{ asset('img/slider9.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    	</div>
				    </div>

				    <!-- Row 4 -->
				    <div class="carousel-item">
				      	<div class="row">
				    		<div class="col-md-4 col-sm-4 wow bounceInLeft">
				    			<img src="{{ asset('img/slider13.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    		<div class="col-md-4 col-sm-4 wow bounceInUp">
				    			<img src="{{ asset('img/slider14.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    		<div class="col-md-4 col-sm-4 wow bounceInRight">
				    			<img src="{{ asset('img/slider15.jpg') }}" class="d-block w-100" alt="Image">
				    		</div>
				    	</div>
				    </div>

				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="bg-white py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 wow flash">
				<p>
					<img class="w-100 border border-dark p-2" src="{{ asset('img/viva1.jpg') }}" alt="Photo">
				</p>
			</div>
			<div class="col-lg-9 wow pulse">
				<h4 class="font-weight-bold text-uppercase">Mot de la Directrice G??n??rale</h4>

				<p class="text-justify">
					AVIV'ART est une entreprise sp??cialis??e dans l???Ing??nierie Informatique, dans e-commerce, et dans d'autres prestations de services. C'est pour vous que nous ??uvrons dans les domaines qui nous passionnent.
				</p>
				<p class="text-justify">
					Notre force, offrir des solutions innovantes, toujours ?? la pointe de la technologie pour conserver et accro??tre notre part de march??. Nos experts sont ?? votre service pour votre enti??re satisfaction. Car ?? AVIV'ART, le client est r??ellement au c??ur de notre m??tier.
				</p>
				<p class="text-justify">
					A travers ce site, vous avez un aper??u de toutes nos activit??s, de tous nos produits, nos expertises, nos exp??riences, nos partenariats ...
				</p>

				<h5 class="font-weight-bold">Mme Viva AKUE-ATSAH</h5>
			</div>
		</div>
	</div>
</section>

<section class="bg-dark pt-5 pb-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center py-3">
				<h2 class="text-white font-weight-bold text-uppercase">Domaines d???activit??</h2>
				<p class="text-light">
					La soci??t?? AVIV'ART a de l'expertise dans les domaines suivants. D??couvrez ces domaines dans lesquels nous exer??ons.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 mb-3">
				<div class="card h-100">
				  <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aW5mb3JtYXRpb24lMjB0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top img-200x200" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold text-uppercase">Informatique</h5>
				    <p class="card-text">
				    	Nous offrons des Solutions Informatiques :
				    </p>
				    <ul>
				    	<li>Digitalisation des activit??s des entreprises</li>
				    	<li>Int??gration de solutions logiciels</li>
				    	<li>D??veloppement d???application m??tier</li>
				    	<li>Cr??ation d???application web et mobile</li>
				    	<li>Marketing Digital</li>
				    	<li>Servies apr??s Ventes</li>
				    </ul>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 mb-3">
				<div class="card h-100">
				  <img src="https://images.unsplash.com/photo-1546213290-e1b492ab3eee?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Ym91dGlxdWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top img-200x200" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold text-uppercase">Boutique</h5>
				    <p class="card-text">
				    	Nous vendons au prix du march?? sans surench??re.
				    </p>
				    <ul>
				    	<li>Aliments Bio</li>
				    	<li>Aliments manufactur??s made in Togo</li>
				    	<li>Aliments Import??s</li>
				    	<li>Electrom??nagers</li>
				    	<li>High Tech</li>
				    	<li>Divers</li>
				    </ul>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 mb-3">
				<div class="card h-100">
				  <img src="https://images.unsplash.com/photo-1602189156324-4c5c6c2c02b3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YW5ub3VuY2V8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top img-200x200" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold text-uppercase">Annonces</h5>
				    <p class="card-text">
				    	Clients et Partenaires faites vos annonces
				    </p>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 mb-3">
				<div class="card h-100">
				  <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y29zbWV0aWNzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top img-200x200" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold text-uppercase">Cosm??tique</h5>
				    <p class="card-text">
				    	AVIV???ART met ?? votre disposition une large gamme de produits cosm??tique naturels
				    </p>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 mb-3">
				<div class="card h-100">
				  <img src="https://images.unsplash.com/photo-1615149596814-f1c1364eb077?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YWdyaWJ1c2luZXNzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top img-200x200" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold text-uppercase">Agrobusiness</h5>
				    <p class="card-text">
				    	L'Agriculture et l'Elevage sont notre avenir.
				    </p>
				    <ul>
				    	<li>Divine AgriPlus Group and Parteners</li>
				    	<li>Champs Eco Bio de Rue</li>
				    </ul>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 mb-3">
				<div class="card h-100">
				  <img src="https://images.unsplash.com/photo-1620418885634-6db6bdda0a97?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aW1tb2JpbGllcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top img-200x200" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold text-uppercase">Immobiliers</h5>
				    <p class="card-text">
				    	Nous louons et vendons les :
					</p>
					<ul>
						<li>Appartements meubl??s</li>
						<li>Appartements non meubl??s</li>
						<li>Construction de B??timents</li>
						<li>D??coration maison</li>
					</ul>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="font-weight-bold text-danger">Qui sommes-nous ?</h2>
				<p class="text-justify">
					AVIV???ART est une ??quipe compos??e des experts ??uvrant tr??s efficacement dans les domaines qui les passionnent pour la grande satisfaction des clients.
				</p>
				<p class="text-justify">
					Le but de notre business est de r??pondre de mani??re qualitative et quantitative au co??t du march?? sans une surench??re, en vue de satisfaire les besoins des entreprises et des m??nages.
				</p>
				<p class="text-justify">
					Nous accompagnons donc les entreprises en r??pondant ?? leurs besoins informatiques par la fourniture et l???int??gration de solutions informatiques. Aux particuliers, nous offrons des services et produits pour faciliter leur quotidien en se servant de la nouvelle technologie. C'est l'art de mieux vivre.
				</p>
				<p class="text-justify">
					Notre objectif, est de nous positionner comme ??tant leader dans la mise en place des solutions informatiques, en digitalisant les activit??s des entreprises au niveau national et sous-r??gional.
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-calendar text-danger fa-3x"></i></p>
						<h4>20</h4>
						<p class="font-weight-bold">Ann??es d'exp??riences</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-users text-danger fa-3x"></i></p>
						<h4>+250</h4>
						<p class="font-weight-bold">Clients</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-handshake-o text-danger fa-3x"></i></p>
						<h4>+10</h4>
						<p class="font-weight-bold">Partenaires</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-user text-danger fa-3x"></i></p>
						<h4>+12</h4>
						<p class="font-weight-bold">??quipe</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-5" style="background-color: #055483;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="text-white font-weight-bold text-uppercase">T??moignages</h2>
				<p class="text-light">
					Ils sont tous fans de nos services et voici ce qu'ils en disent.
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-6 text-center">
				<p>
					<img src="https://avivart.net/images/users/man.png" alt="Image" class="wow flip border rounded-circle p-2">
				</p>
				<p class="text-light">
					La soci??t?? AVIV'ART a marqu?? positivement le top management de notre soci??t?? par la digitalisation des processus op??rationnels et fonctionnels. Nos clients ont d??sormais acc??s ?? nos services en ligne n'importe o?? n'importe quand. Quel que soit le budget, le model de votre Business (B to B ou B to C). AVIV'ART vous accompagne.
				</p>
				<h4 class="text-white font-weight-bold">DSI de la soci??t?? MWD (G??rard AKAKPOVI)</h4>
			</div>

			<div class="col-lg-6 text-center">
				<p>
					<img src="https://avivart.net/images/users/woman.png" alt="Image" class="wow snake border rounded-circle p-2">
				</p>
				<p class="text-light">
					En tant que  cadre d'une banque et manager, je trouve difficilement le temps pour effectuer les courses en vue de bien alimenter ma petite famille. Avec la boutique en ligne de la soci??t?? AVIV'ART, j'effectue les commandes et je me fait livr??. L'achat en ligne est sans frais, et les aliments sont au prix du march??. C'est g??nial.
				</p>
				<h4 class="text-white font-weight-bold">Mme Jos??phine DJIDOULA</h4>
			</div>
		</div>
	</div>
</section>

<section class="bg-white py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="font-weight-bold text-primary text-uppercase">Equipe</h2>
				<p>
					Une ??quipe dynamique et l??gendaire pour r??pondre dans les brefs d??lais ?? toutes vos questions.
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-12">
				<p>
					<img class="w-100" src="{{ asset('img/team.jpeg') }}" alt="Image">
				</p>
			</div>
		</div>
	</div>
</section>

<section class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="font-weight-bold text-success text-uppercase">Partenaires</h2>
				<p>
					Ils nous appr??cient pour notre travail.
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/lenovo.png') }}" alt="LENOVO" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/microsoft.png') }}" alt="MICROSOFT" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/hp.png') }}" alt="HP" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/oracle.png') }}" alt="ORACLE" class="img-150x150 w-100">
				</p>
			</div>
			
			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/ecobank.jpeg') }}" alt="ECOBANK" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/sunu.jpeg') }}" alt="SUNU" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/moov.png') }}" alt="MOOV" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/togocom.jpeg') }}" alt="TOGOCOM" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/smartaps.jpg') }}" alt="SMARTAPS" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/ole.jpeg') }}" alt="OLE" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/kaba.jpeg') }}" alt="KABA" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="{{ asset('img/partners/osons.jpg') }}" alt="OSONS" class="img-150x150 w-100">
				</p>
			</div>
		</div>
	</div>
</section>

@endsection