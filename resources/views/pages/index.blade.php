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
				<h2 class="font-weight-bold">Mot de la présidente</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
	</div>
</section>

<section class="bg-dark py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center py-3">
				<h2 class="text-white font-weight-bold">Domaines d’activité</h2>
				<p class="text-light">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 h-100">
				<div class="card mb-3">
				  <img src="https://images.unsplash.com/photo-1619410766515-6263877c7bfe?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8YWV1NnJMLWo2ZXd8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold">Boutique</h5>
				    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 h-100">
				<div class="card mb-3">
				  <img src="https://images.unsplash.com/photo-1619410766515-6263877c7bfe?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8YWV1NnJMLWo2ZXd8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold">Informatique</h5>
				    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 h-100">
				<div class="card mb-3">
				  <img src="https://images.unsplash.com/photo-1619410766515-6263877c7bfe?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8YWV1NnJMLWo2ZXd8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold">Cosmétique</h5>
				    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 h-100">
				<div class="card mb-sm-3">
				  <img src="https://images.unsplash.com/photo-1619410766515-6263877c7bfe?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8YWV1NnJMLWo2ZXd8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold">Agrobusiness</h5>
				    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 h-100">
				<div class="card mb-sm-3">
				  <img src="https://images.unsplash.com/photo-1619410766515-6263877c7bfe?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8YWV1NnJMLWo2ZXd8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold">Immobilier</h5>
				    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 h-100">
				<div class="card mb-sm-3">
				  <img src="https://images.unsplash.com/photo-1619410766515-6263877c7bfe?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8YWV1NnJMLWo2ZXd8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="Image">
				  <div class="card-body">
				    <h5 class="card-title font-weight-bold">Annonces</h5>
				    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
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
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-users fa-3x"></i></p>
						<h4>7</h4>
						<p class="font-weight-bold">Années d'expériences</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-users fa-3x"></i></p>
						<h4>7</h4>
						<p class="font-weight-bold">Clients</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-users fa-3x"></i></p>
						<h4>7</h4>
						<p class="font-weight-bold">Partenaires</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p><i class="fa fa-users fa-3x"></i></p>
						<h4>7</h4>
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
				<h2 class="text-white font-weight-bold">Témoignages</h2>
				<p class="text-light">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-4 mb-sm-3 text-center">
				<p>
					<img src="https://avivart.net/images/users/man.png" alt="Image">
				</p>
				<p class="text-light">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<h4 class="text-white font-weight-bold">Nom & Prénoms</h4>
			</div>

			<div class="col-lg-4 mb-sm-3 text-center">
				<p>
					<img src="https://avivart.net/images/users/woman.png" alt="Image">
				</p>
				<p class="text-light">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<h4 class="text-white font-weight-bold">Nom & Prénoms</h4>
			</div>

			<div class="col-lg-4 mb-sm-3 text-center">
				<p>
					<img src="https://avivart.net/images/users/lady.png" alt="Image">
				</p>
				<p class="text-light">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<h4 class="text-white font-weight-bold">Nom & Prénoms</h4>
			</div>
		</div>
	</div>
</section>

<section class="bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="font-weight-bold text-primary">Equipe</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p>
							<img src="https://avivart.net/images/users/man.png" alt="Image">
						</p>
						<h4 class="font-weight-bold">Name</h4>
						<h6 class="text-secondary">Function</h6>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p>
							<img src="https://avivart.net/images/users/man.png" alt="Image">
						</p>
						<h4 class="font-weight-bold">Name</h4>
						<h6 class="text-secondary">Function</h6>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p>
							<img src="https://avivart.net/images/users/man.png" alt="Image">
						</p>
						<h4 class="font-weight-bold">Name</h4>
						<h6 class="text-secondary">Function</h6>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="card">
					<div class="card-body text-center">
						<p>
							<img src="https://avivart.net/images/users/man.png" alt="Image">
						</p>
						<h4 class="font-weight-bold">Name</h4>
						<h6 class="text-secondary">Function</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="font-weight-bold text-success">Partenaires</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="https://avivart.net/images/users/lady.png" alt="Image">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="https://avivart.net/images/users/lady.png" alt="Image">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="https://avivart.net/images/users/lady.png" alt="Image">
				</p>
			</div>

			<div class="col-lg-3 col-sm-6 text-center">
				<p>
					<img src="https://avivart.net/images/users/lady.png" alt="Image">
				</p>
			</div>
		</div>
	</div>
</section>

@endsection