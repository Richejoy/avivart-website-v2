@extends('layouts.cosmetic', ['title' => $articleRay->name])

@section('body')

<section class="bg-info py-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
            <h4 class="font-weight-bold text-light">{{ $articleRay->name }} | Catégories liées ({{ $articleRay->articleCategories->count() }})</h4>
            </div>
        </div>
    </div>
</section>

<section class="py-3">
	<div class="container-fluid">
		<div class="row">
			<article class="col-lg-9">

                @if($articleRay->articleCategories->count())

                <div class="row">
                    @foreach($articleRay->articleCategories as $articleCategory)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img id="img{{ $articleCategory->id }}" src="{{ $articleCategory->image->link }}" alt="Image"
                                class="w-100 img-200x200">
                        </p>
                        <h4><a href="{{ route('articleCategory.show', ['articleCategory' => $articleCategory]) }}"
                                class="text-info">{{ $articleCategory->name }}</a></h4>
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