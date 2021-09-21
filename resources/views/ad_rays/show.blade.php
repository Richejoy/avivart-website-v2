@extends('layouts.ad', ['title' => $adRay->name])

@section('body')

<section class="bg-primary py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white">{{ $adRay->name }}</h2>
                <h4 class="font-weight-bold text-light">Catégories liées ({{ $adRay->adCategories->count() }})</h4>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-3">
                <div class="accordion" id="accordion1">
                    <div class="card">
                        <div class="card-header p-0 bg-white font-weight-bold" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none text-dark"
                                    type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <i class="fa fa-plus"></i> Tous nos Rayons
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion1">
                            <div class="card-body">

                                @if($adRays->count())
                                <ul type="circle" class="list-unstyled simple-load-more">
                                    @foreach($adRays as $aRay)
                                    <li class=""><a class="text-muted"
                                                href="{{ route('adRay.show', ['adRay' => $aRay]) }}">{{ $aRay->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                @else
                                <p>Aucun résultat</p>
                                @endif

                            </div>
                        </div>

                        <div class="card-footer p-2 text-right"><a href="{{ route('adRay.index') }}"
                            class="text-info">Tout afficher</a></div>
                    </div>
                </div>
            </aside>

            <div class="col-lg-9">
                @if($adRay->adCategories->count())

                <div class="row">
                    @foreach($adRay->adCategories as $adCategory)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img id="img{{ $adCategory->id }}" src="{{ $adCategory->image->link }}" alt="Image" class="w-100 img-200x200">
                        </p>
                        <h4><a href="{{ route('adCategory.show', ['adCategory' => $adCategory]) }}"
                                class="text-info">{{ $adCategory->name }}</a></h4>
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