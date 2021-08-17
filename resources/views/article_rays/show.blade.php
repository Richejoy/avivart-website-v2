@extends('layouts.cosmetic', ['title' => $articleRay->name])

@section('body')

<section class="bg-dark py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white">{{ $articleRay->name }}</h2>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
	<div class="container-fluid">
		<div class="row">
			<article class="col-lg-9">
                <h2 class="py-2">Catégories liées</h2>

                @if($articleRay->articleCategories->count())

                <div class="row">
                    @foreach($articleRay->articleCategories as $articleCategory)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img id="img{{ $articleCategory->id }}" data-src="{{ $articleCategory->image->link }}"
                                src="https://via.placeholder.com/200x150.png?text=Chargement..." alt="Image"
                                class="w-100 img-200x200 hvr-push lazyrate">
                        </p>
                        <h4><a href="{{ route('articleCategory.show', ['articleCategory' => $articleCategory]) }}"
                                class="text-danger">{{ $articleCategory->name }}</a></h4>
                    </div>
                    @endforeach
                </div>

                @else

                <p>Rien pour le moment</p>

                @endif
            </article>

			<aside class="col-lg-3">
			</aside>
		</div>
	</div>
</section>

@endsection