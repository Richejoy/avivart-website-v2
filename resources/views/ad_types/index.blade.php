@extends('layouts.ad', ['title' => 'Tous nos types'])

@section('body')

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @if($adTypes->count())

                <div class="row mb-4">
                    @foreach($adTypes as $adType)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img id="img{{ $adType->id }}" src="{{ $adType->image->link }}" alt="Image" class="w-100 img-200x200">
                        </p>
                        <h4><a href="{{ route('adType.show', ['adType' => $adType]) }}"
                                class="text-primary">{{ $adType->name }}</a></h4>
                    </div>
                    @endforeach
                </div>

                <p class="text-right text-muted">
                    Page {{ $adTypes->currentPage() }} sur {{ $adTypes->lastPage() }}, montrant
                    {{ count($adTypes->items()) }} enregistrement (s) sur {{ $adTypes->total() }} au total
                </p>

                {{ $adTypes->onEachSide(5)->links() }}

                @else

                <p>Rien pour le moment</p>

                @endif

            </div>
        </div>
    </div>
</section>

@endsection