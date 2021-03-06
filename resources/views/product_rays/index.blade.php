@extends('layouts.store', ['title' => 'Tous nos rayons'])

@section('body')

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @if($productRays->count())

                <div class="row mb-4">
                    @foreach($productRays as $productRay)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img id="img{{ $productRay->id }}" data-src="{{ $productRay->image->link }}"
                                src="https://via.placeholder.com/200x150.png?text=Chargement..." alt="Image" class="w-100 img-200x200 hvr-pop lazyrate">
                        </p>
                        <h4><a href="{{ route('productRay.show', ['productRay' => $productRay]) }}"
                                class="text-danger">{{ $productRay->name }}</a></h4>
                    </div>
                    @endforeach
                </div>

                <p class="text-right text-muted">
                    Page {{ $productRays->currentPage() }} sur {{ $productRays->lastPage() }}, montrant
                    {{ count($productRays->items()) }} enregistrement (s) sur {{ $productRays->total() }} au total
                </p>

                {{ $productRays->onEachSide(5)->links() }}

                @else

                <p>Rien pour le moment</p>

                @endif

            </div>
        </div>
    </div>
</section>

@endsection