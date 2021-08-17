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

                                @if($productRays->count())
                                <ul type="circle" class="list-unstyled simple-load-more">
                                    @foreach($productRays as $prdRay)
                                    <li class=""><a class="text-muted"
                                                href="{{ route('productRay.show', ['productRay' => $prdRay]) }}">{{ $prdRay->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                @else
                                <p>Aucun résultat</p>
                                @endif

                            </div>
                        </div>

                        <div class="card-footer p-2 text-right"><a href="{{ route('productRay.index') }}"
                            class="text-danger">Tout afficher</a></div>
                    </div>
                </div>
            </aside>

            <div class="col-lg-9">
                <h2 class="py-2">Catégories liées</h2>

                @if($productRay->productCategories->count())

                <div class="row">
                    @foreach($productRay->productCategories as $productCategory)
                    <div class="col-md-3 mb-3 text-center">
                        <p>
                            <img id="img{{ $productCategory->id }}" data-src="{{ $productCategory->image->link }}"
                                src="https://via.placeholder.com/200x150.png?text=Chargement..." alt="Image"
                                class="w-100 img-200x200 hvr-push lazyrate">
                        </p>
                        <h4><a href="{{ route('productCategory.show', ['productCategory' => $productCategory]) }}"
                                class="text-danger">{{ $productCategory->name }}</a></h4>
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