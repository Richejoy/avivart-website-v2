@extends('layouts.cosmetic', ['title' => 'Réaussez votre beauté avec du naturel'])

@section('body')

<section class="py-3">
	<div class="container-fluid">
		<div class="row">
			<aside class="col-lg-3 pb-3">

                <div class="accordion" id="accordion1">
                    <div class="card">
                        <div class="card-header p-0 bg-white font-weight-bold" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none text-dark"
                                    type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <i class="fa fa-plus"></i> Tous nos Rayons
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion1">
                            <div class="card-body">

                                @if($articleRays->count())
                                <ol class="list-unstyled">
                                    @foreach($articleRays as $articleRay)
                                    <li><a href="{{ route('articleRay.show', ['articleRay' => $articleRay]) }}">{{ $articleRay->name }}
                                            <i class="fa fa-chevron-right float-right"></i></a></li>

                                    @if($articleRay->articleCategories->count())
                                    <ul class="simple-load-more">
                                        @foreach($articleRay->articleCategories as $articleCategory)
                                        <li class=""><a class="text-muted"
                                                href="{{ route('articleCategory.show', ['articleCategory' => $articleCategory]) }}">{{ $articleCategory->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif

                                    @endforeach
                                </ol>
                                @else
                                <p>Aucun rayon d'article</p>
                                @endif

                            </div>
                        </div>

                        <div class="card-footer p-2 text-right"><a href="{{ route('articleRay.index') }}"
                            class="text-info">Tout afficher</a></div>
                    </div>
                </div>

                <div class="mt-3 accordion" id="accordion2">
                    <div class="card">
                        <div class="card-header p-0 bg-white font-weight-bold" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none text-dark"
                                    type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                                    aria-controls="collapseTwo">
                                    <i class="fa fa-plus"></i> Tous nos Types
                                </button>
                            </h2>
                        </div>

                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion2">
                            <div class="card-body">

                                @if($articleTypes->count())
                                <ol class="list-unstyled simple-load-more">
                                    @foreach($articleTypes as $articleType)
                                    <li><a class="text-muted"
                                            href="{{ route('articleType.show', ['articleType' => $articleType]) }}">{{ $articleType->name }}</a>
                                    </li>
                                    @endforeach
                                </ol>
                                @else
                                <p>Aucun type d'article</p>
                                @endif

                            </div>
                        </div>

                        <div class="card-footer p-2 text-right"><a href="{{ route('articleType.index') }}"
                            class="text-info">Tout afficher</a></div>
                    </div>
                </div>

            </aside>

			<div class="col-lg-9">
                @if($articles->count())

                <div class="row mb-4" id="article-container">
                    @foreach($articles as $article)
                    <article class="col-md-3 mb-3 article-item">
                        <div class="text-right">
                            <span class="badge {{ $article->onDiscount() }}">{{ $article->getPercentage() }}%</span>
                        </div>
                        <div class="card h-100">
                            <a href="{{ route('cosmetic.show', ['article' => $article]) }}">
                                <img src="{{ $article->image->link }}"
                                class="card-img-top article-img" alt="Image">
                            </a>
                            <span class="bg-success text-white text-center">{{ $article->name }}</span>
                            <div class="card-body p-2 text-center">
                                <h6 class="card-title m-0">{{ $article->description }}</h6>

                                <p class="m-0">
                                    <a
                                        href="{{ route('articleType.show', ['articleType' => $article->articleType]) }}">{{ $article->articleType->name }}</a>
                                </p>

                                <p class="card-text m-0">
                                    <a class="text-secondary"
                                        href="{{ route('conversion.show', ['conversion' => $article->conversion]) }}">{{ $article->conversion->name }}</a>
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
                                    href="{{ route('basket.add', ['article' => $article]) }}" class="text-primary"><i
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
		</div>
	</div>
</section>

@endsection