@extends('layouts.cosmetic', ['title' => 'Tous nos types'])

@section('body')

<section class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @if($articleTypes->count())

                <div class="row mb-4">
                    @foreach($articleTypes as $articleType)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img id="img{{ $articleType->id }}" src="{{ $articleType->image->link }}" alt="Image" class="w-100 img-200x200">
                        </p>
                        <h4><a href="{{ route('articleType.show', ['articleType' => $articleType]) }}"
                                class="text-info">{{ $articleType->name }}</a></h4>
                    </div>
                    @endforeach
                </div>

                <p class="text-right text-muted">
                    Page {{ $articleTypes->currentPage() }} sur {{ $articleTypes->lastPage() }}, montrant
                    {{ count($articleTypes->items()) }} enregistrement (s) sur {{ $articleTypes->total() }} au total
                </p>

                {{ $articleTypes->onEachSide(5)->links() }}

                @else

                <p>Rien pour le moment</p>

                @endif

            </div>
        </div>
    </div>
</section>

@endsection