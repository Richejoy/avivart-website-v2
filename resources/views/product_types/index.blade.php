@extends('layouts.store', ['title' => 'Types de produit'])

@section('body')

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @if($productTypes->count())

                <div class="row mb-4">
                    @foreach($productTypes as $productType)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img id="img{{ $productType->id }}" data-src="{{ $productType->image->link }}"
                                src="https://via.placeholder.com/200x150.png?text=Chargement..." alt="Image" class="w-100 img-200x200 hvr-grow lazyrate">
                        </p>
                        <h4><a href="{{ route('productType.show', ['productType' => $productType]) }}"
                                class="text-danger">{{ $productType->name }}</a></h4>
                    </div>
                    @endforeach
                </div>

                <p class="text-right text-muted">
                    Page {{ $productTypes->currentPage() }} sur {{ $productTypes->lastPage() }}, montrant
                    {{ count($productTypes->items()) }} enregistrement (s) sur {{ $productTypes->total() }} au total
                </p>

                {{ $productTypes->onEachSide(5)->links() }}

                @else

                <p>Rien pour le moment</p>

                @endif

            </div>
        </div>
    </div>
</section>

@endsection