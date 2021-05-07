@extends('layouts.store', ['title' => 'Catégories de produit'])

@section('body')

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @if($productCategories->count())

                <div class="row mb-4">
                    @foreach($productCategories as $productCategory)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img src="{{ $productCategory->image->link }}" alt="Image"
                                class="w-100 img-200x200 hvr-bounce-out">
                        </p>
                        <h4><a href="{{ route('productCategory.show', ['productCategory' => $productCategory]) }}"
                                class="text-danger">{{ $productCategory->name }}</a></h4>
                    </div>
                    @endforeach
                </div>

                <p class="text-right text-muted">
                    Page {{ $productCategories->currentPage() }} sur {{ $productCategories->lastPage() }}, montrant
                    {{ count($productCategories->items()) }} enregistrement (s) sur {{ $productCategories->total() }} au
                    total
                </p>

                {{ $productCategories->onEachSide(5)->links() }}

                @else

                <p>Rien pour le moment</p>

                @endif

            </div>
        </div>
    </div>
</section>

@endsection