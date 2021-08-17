@extends('layouts.cosmetic', ['title' => 'Tous nos rayons'])

@section('body')

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @if($articleRays->count())

                <div class="row mb-4">
                    @foreach($articleRays as $articleRay)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img id="img{{ $articleRay->id }}" data-src="{{ $articleRay->image->link }}"
                                src="https://via.placeholder.com/200x150.png?text=Chargement..." alt="Image" class="w-100 img-200x200 hvr-pop lazyrate">
                        </p>
                        <h4><a href="{{ route('articleRay.show', ['articleRay' => $articleRay]) }}"
                                class="text-danger">{{ $articleRay->name }}</a></h4>
                    </div>
                    @endforeach
                </div>

                <p class="text-right text-muted">
                    Page {{ $articleRays->currentPage() }} sur {{ $articleRays->lastPage() }}, montrant
                    {{ count($articleRays->items()) }} enregistrement (s) sur {{ $articleRays->total() }} au total
                </p>

                {{ $articleRays->onEachSide(5)->links() }}

                @else

                <p>Rien pour le moment</p>

                @endif

            </div>
        </div>
    </div>
</section>

@endsection