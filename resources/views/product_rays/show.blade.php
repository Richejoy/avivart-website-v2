@extends('layouts.store', ['title' => $productRay->name])

@section('body')

<section class="bg-success py-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="text-white">{{ $productRay->name }}</h2>
			</div>
		</div>
	</div>
</section>

<section class="bg-light py-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="py-3">Catégories de produit liées</h2>

				@if($productRay->productCategories->count())

				<div class="row">
					@foreach($productRay->productCategories as $productCategory)
					<div class="col-md-3 mb-3 text-center">
						<p>
							<img src="{{ $productCategory->image->link }}" alt="Image" class="w-100 img-200x200 hvr-push">
						</p>
						<h4><a href="{{ route('productCategory.show', ['productCategory' => $productCategory]) }}" class="text-danger">{{ $productCategory->name }}</a></h4>
					</div>
					@endforeach
				</div>

				@else

				<p>Rien pour le moment</p>

				@endif

			</div>

		</div>
	</div>
</section>

@endsection