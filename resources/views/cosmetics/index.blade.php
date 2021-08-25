@extends('layouts.cosmetic', ['title' => 'Réaussez votre beauté avec du naturel'])

@section('body')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y29zbWV0aWN8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1601049676869-702ea24cfd58?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29zbWV0aWN8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGNvc21ldGljfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1601049315503-07926a49f521?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGNvc21ldGljfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1591019479261-1a103585c559?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGNvc21ldGljfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="Image">
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

<section class="py-3 bg-color1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9">
                <div
                    class="p-2 mt-xs-3 mb-3 bg-secondary text-white font-weight-bold shadow-sm rounded">
                    <i class="fa fa-bell fa-pulse"></i> Réaussez votre beauté avec du naturel
                </div>

                @if($articles->count())

                <div class="row mb-4" id="article-container">
                    @foreach($articles as $article)
                    <article class="col-md-3 mb-3 article-item">
                        <div class="text-right">
                            <span class="badge {{ $article->onDiscount() }}">{{ $article->getPercentage() }}%</span>
                        </div>
                        <div class="card border-secondary h-100">
                            <a href="{{ route('cosmetic.show', ['article' => $article]) }}">
                                <img src="{{ $article->image->link }}"
                                class="card-img-top article-img" alt="Image">
                            </a>
                            <span class="bg-secondary text-white text-center">{{ $article->name }}</span>
                            <div class="card-body p-2 text-center">
                                <h6 class="card-title m-0">{{ $article->description }}</h6>

                                <p class="m-0">
                                    <a
                                        href="{{ route('articleType.show', ['articleType' => $article->articleType]) }}">{{ $article->articleType->name }}</a>
                                </p>

                                <p class="card-text m-0">
                                    {{ $article->conversion->name }}
                                </p>

                                <h6 class="text-dark m-0">
                                    <strong>{{ $article->getNewPrice() }}</strong>
                                    @if($article->new_price != $article->old_price)
                                    / <strike>{{ $article->getOldPrice() }}</strike>
                                    @endif
                                </h6>
                            </div>
                            <div class="card-footer text-center p-2">
                                <a data-toggle="tooltip" title="Ajouter au panier"
                                    href="{{ route('basket.add', ['article' => $article]) }}" class="cart text-primary"><i
                                        class="fa fa-shopping-cart"></i></a>

                                <a data-toggle="tooltip" title="Ajouter au favoris"
                                    href="{{ route('user.add_article', ['article' => $article]) }}" class="text-danger px-5"><i
                                        class="fa fa-heart"></i></a>

                                <a data-toggle="tooltip" title="Détails"
                                    href="{{ route('cosmetic.show', ['article' => $article]) }}" class="text-info"><i
                                        class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>

                @else
                <p>Aucun article</p>
                @endif
            </div>

            <aside class="col-lg-3 pb-3">

                <div class="card border-white mb-3">
                    <div class="card-header bg-white py-2"><i class="fa fa-bell fa-pulse mr-2 text-warning"></i> Conseils</div>

                    <marquee>
                        <img src="{{ asset('public/img/cosmetics/IMG-20210722-WA0033.jpg') }}" width="250px" height="250px">

                        <img src="{{ asset('public/img/cosmetics/IMG-20210818-WA0012.jpg') }}" width="250px" height="250px">

                        <img src="{{ asset('public/img/cosmetics/IMG-20210818-WA0014.jpg') }}" width="250px" height="250px">

                        <img src="{{ asset('public/img/cosmetics/IMG-20210818-WA0015.jpg') }}" width="250px" height="250px">
                    </marquee>

                </div>

                <video controls class="w-100 p-0">
                    <source src="{{ asset('public/videos/v4.mp4') }}" type="video/mp4">
                </video>

            </aside>
		</div>
	</div>
</section>

@endsection