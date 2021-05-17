@extends('layouts.page', ['title' => 'Accueil'])

@section('body')

<section>
	<div class="container-fluid my-3">
		<div class="row">
			<div class="col-lg-9">
				
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

			<aside class="col-lg-3">
				
			</aside>
		</div>
	</div>
</section>

@endsection