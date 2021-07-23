@extends('layouts.ad', ['title' => "Catégories d'annonce"])

@section('body')

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @if($adCategories->count())

                <div class="row mb-4">
                    @foreach($adCategories as $adCategory)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img id="img{{ $adCategory->id }}" src="{{ $adCategory->image->link }}" alt="Image" class="w-100 img-200x200">
                        </p>
                        <h4><a href="{{ route('adCategory.show', ['adCategory' => $adCategory]) }}"
                                class="text-info">{{ $adCategory->name }}</a></h4>
                    </div>
                    @endforeach
                </div>

                <p class="text-right text-muted">
                    Page {{ $adCategories->currentPage() }} sur {{ $adCategories->lastPage() }}, montrant
                    {{ count($adCategories->items()) }} enregistrement (s) sur {{ $adCategories->total() }} au
                    total
                </p>

                {{ $adCategories->onEachSide(5)->links() }}

                @else

                <p>Rien pour le moment</p>

                @endif

            </div>
        </div>
    </div>
</section>

@endsection