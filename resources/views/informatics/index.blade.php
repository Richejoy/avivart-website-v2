@extends(Request::has('q') ? 'layouts.informatics' : 'layouts.coming_soon', ['title' => 'Accueil'])

@section('body')

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29kZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
      <div class="carousel-caption d-none d-md-block px-3">
        <h2 class="font-weight-bold">Logiciels</h2>
        <p>
        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1531668383211-64743e924c66?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aW5mb3JtYXRpcXVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
      <div class="carousel-caption d-none d-md-block px-3">
        <h2 class="font-weight-bold">Réseaux</h2>
        <p>
        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHRlY2hub2xvZ2llc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
      <div class="carousel-caption d-none d-md-block px-3">
        <h2 class="font-weight-bold">Maintenances</h2>
        <p>
        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1531547629769-f2e504fe4521?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fHRlY2hub2xvZ2llc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
      <div class="carousel-caption d-none d-md-block px-3">
        <h2 class="font-weight-bold">Services</h2>
        <p>
        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="py-5">
	
</section>

@endsection