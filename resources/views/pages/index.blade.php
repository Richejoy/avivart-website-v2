@extends('layouts.page', ['title' => "L'art de mieux vivre"])

@section('body')

<section class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="https://images.unsplash.com/photo-1550071593-fd1bdaf1f93c?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDF8YWV1NnJMLWo2ZXd8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
				    </div>
				    <div class="carousel-item">
				      <img src="https://images.unsplash.com/photo-1619410766515-6263877c7bfe?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8YWV1NnJMLWo2ZXd8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
				    </div>
				    <div class="carousel-item">
				      <img src="https://images.unsplash.com/photo-1581091870598-36ce9bad5c77?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDExfGFldTZyTC1qNmV3fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
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
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<p>
					<img class="w-100" src="{{ asset('public/img/viva1.jpg') }}" alt="Photo">
				</p>
			</div>
			<div class="col-lg-9">
				<h4 class="font-weight-bold text-uppercase">Mot de la Directrice Générale</h4>

				<p class="text-justify">
					AVIV'ART est une entreprise spécialisée dans l’Ingénierie Informatique, dans e-commerce, et dans d'autres prestations de services. C'est pour vous que nous œuvrons dans les domaines qui nous passionnent.
				</p>
				<p class="text-justify">
					Notre force, offrir des solutions innovantes, toujours à la pointe de la technologie pour conserver et accroître notre part de marché. Nos experts sont à votre service pour votre entière satisfaction. Car à AVIV'ART, le client est réellement au cœur de notre métier.
				</p>
				<p class="text-justify">
					A travers ce site, vous avez un aperçu de toutes nos activités, de tous nos produits, nos expertises, nos expériences, nos partenariats ...
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
				<h2 class="text-white font-weight-bold text-uppercase">Domaines d’activité</h2>
				<p class="text-light">
					La société exerce aussi dans les domaines suivants en tant qu’intermédiaire : transport et infographie. Nous vous proposons des conseils de placement d’argent vous permettant de faire travailler votre argent à votre place.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 mb-3">
				<div class="card h-100">
				  <img src="https://images.unsplash.com/photo-1546213290-e1b492ab3eee?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Ym91dGlxdWV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top img-200x200" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold text-uppercase">Boutique</h5>
				    <p class="card-text">
				    	Nous vendons au prix du marché sans surenchère.
				    </p>
				    <ul>
				    	<li>Aliments Bio</li>
				    	<li>Aliments manufacturés made in Togo</li>
				    	<li>Aliments Importés</li>
				    	<li>Electroménagers</li>
				    	<li>High Tech</li>
				    	<li>Divers</li>
				    </ul>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 mb-3">
				<div class="card h-100">
				  <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aW5mb3JtYXRpb24lMjB0ZWNobm9sb2d5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top img-200x200" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold text-uppercase">Informatique</h5>
				    <p class="card-text">
				    	Nous offrons des Solutions Informatiques :
				    </p>
				    <ul>
				    	<li>Digitalisation des activités des entreprise</li>
				    	<li>Intégration de solutions logiciels</li>
				    	<li>Développement d’applications métier</li>
				    	<li>Création d’applications web et mobile</li>
				    	<li>Marketing Digital</li>
				    	<li>Servies après Ventes</li>
				    </ul>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 mb-3">
				<div class="card h-100">
				  <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y29zbWV0aWNzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top img-200x200" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold text-uppercase">Cosmétique</h5>
				    <p class="card-text">
				    	AVIV’ART met à votre disposition une large gamme de produits cosmétique naturels
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
				    	Nous mettons en relation des vendeurs, des bailleurs et des chercheurs de locaux...
					</p>
					<ul>
						<li>Appartements meublés</li>
						<li>Appartements non meublés</li>
						<li>Construction de Bâtiments</li>
						<li>Décoration maison</li>
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
		</div>
	</div>
</section>

<section class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="font-weight-bold text-danger">Qui sommes-nous ?</h2>
				<p class="text-justify">
					AVIV’ART est une équipe composée des experts œuvrant très efficacement dans les domaines qui les passionnent pour la grande satisfaction des clients.
				</p>
				<p class="text-justify">
					Le but de notre business est de répondre de manière qualitative et quantitative au coût du marché sans une surenchère, en vue de satisfaire les besoins des entreprises et des ménages.
				</p>
				<p class="text-justify">
					Nous accompagnons donc les entreprises en répondant à leurs besoins informatiques par la fourniture et l’intégration de solutions informatiques. Aux particuliers, nous offrons des services et produits pour faciliter leur quotidien en se servant de la nouvelle technologie. C'est l'art de mieux vivre.
				</p>
				<p class="text-justify">
					Notre objectif, est de nous positionner comme étant leader dans la mise en place des solutions informatiques, en digitalisant les activités des entreprises au niveau national et sous-régional.
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-calendar fa-3x"></i></p>
						<h4>20</h4>
						<p class="font-weight-bold">Années d'expériences</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-users fa-3x"></i></p>
						<h4>+250</h4>
						<p class="font-weight-bold">Clients</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-handshake-o fa-3x"></i></p>
						<h4>+10</h4>
						<p class="font-weight-bold">Partenaires</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-user fa-3x"></i></p>
						<h4>+12</h4>
						<p class="font-weight-bold">Équipe</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-primary py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="text-white font-weight-bold text-uppercase">Témoignages</h2>
				<p class="text-light">
					Ils sont tous fans de nos services et voici ce qu'ils en disent.
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-6 text-center">
				<p>
					<img src="https://avivart.net/images/users/man.png" alt="Image">
				</p>
				<p class="text-light">
					La société AVIV'ART a marqué positivement le Top management de notre ociété par la digitalisation des processus opérationnels et fonctionnels. Nos clients ont ésormais accès à nos services en ligne n'impote où n'impote quand. Quel que soit le budget, le model de votre Business (B to B ou B to C). AVIV'ART vous accompagne.
				</p>
				<h4 class="text-white font-weight-bold">DSI de la Société MWD (Gérard AKAKPOVI)</h4>
			</div>

			<div class="col-lg-6 text-center">
				<p>
					<img src="https://avivart.net/images/users/woman.png" alt="Image">
				</p>
				<p class="text-light">
					En tant que  cadre d'une Banque et manager, je trouve difficlement le temps pour effectuer les courses en vue de bien alimenter ma petite famille. Avec la boutique en ligne de la Société AVIV'ART, j'effecutue les commandes et je me fait livré. L'achat en ligne est sans frais, et les aliments sont au prix du marché. C'est génial.
				</p>
				<h4 class="text-white font-weight-bold">Mme Joséphine DJIDOULA</h4>
			</div>
		</div>
	</div>
</section>

<section class="bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="font-weight-bold text-primary text-uppercase">Equipe</h2>
				<p>
					Une équipe dynamique et légendaire pour répondre dans les brefs délais à toutes vos questions.
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-12">
				<p>
					<img class="w-100" src="{{ asset('public/img/team.jpeg') }}" alt="Image">
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
					Ils nous apprécient pour notre travail.
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6du4329FNh5mo6jyYeQC5Y_L_PA4eD-3lNA&usqp=CAU" alt="Image" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzTYG6G2pahuZxgXTCecwc-JBZKJ3ibSDtJw&usqp=CAU" alt="Image" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="data:image/png;base64,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" alt="Image" class="img-150x150 w-100">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="data:image/jpeg;base64,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" alt="Image" class="img-150x150 w-100">
				</p>
			</div>
		</div>
	</div>
</section>

@endsection