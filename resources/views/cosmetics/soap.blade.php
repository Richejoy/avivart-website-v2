@extends('layouts.cosmetic', ['title' => 'Savons'])

@section('body')

<section class="py-5">
	<div class="container-fluid">
		<div class="row">
            <article class="col-lg-9">
				<h2 class="font-weight-bold text-dark">Savons ({{ $articles->count() }})</h2>

                @if($articles->count())

                <div class="row mb-4" id="article-container">
                    @foreach($articles as $article)
                    <article class="col-md-3 mb-3 article-item">
                        <div class="text-right">
                            <span class="badge {{ $article->onDiscount() }}">{{ $article->getPercentage() }}%</span>
                        </div>
                        <div class="card border-success h-100">
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
			</article>

            <aside class="col-lg-3">
            </aside>
		</div>
	</div>
</section>

@endsection