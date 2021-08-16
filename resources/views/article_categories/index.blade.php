@extends('layouts.cosmetic', ['title' => 'Toutes nos catégories'])

@section('body')

<section class="py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				
				@if($articleCategories->count())

                <div class="row mb-4">
                    @foreach($articleCategories as $articleCategory)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img id="img{{ $articleCategory->id }}" src="{{ $articleCategory->image->link }}" alt="Image" class="w-100 img-200x200">
                        </p>
                        <h4><a href="{{ route('articleCategory.show', ['articleCategory' => $articleCategory]) }}"
                                class="text-info">{{ $articleCategory->name }}</a></h4>
                    </div>
                    @endforeach
                </div>

                <p class="text-right text-muted">
                    Page {{ $articleCategories->currentPage() }} sur {{ $articleCategories->lastPage() }}, montrant
                    {{ count($articleCategories->items()) }} enregistrement (s) sur {{ $articleCategories->total() }} au
                    total
                </p>

                {{ $articleCategories->onEachSide(5)->links() }}

                @else

                <p>Rien pour le moment</p>

                @endif

			</div>
		</div>
	</div>
</section>

@endsection