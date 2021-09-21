@extends('layouts.ad', ['title' =>  'Immobilier'])

@section('body')
<section class="bg-primary py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="font-weight-bold text-light">Annonces ({{ $ads->count() }})</h2>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-3 pb-3">

                <div class="accordion" id="accordion1">
                    <div class="card">
                        <div class="card-header p-0 bg-white font-weight-bold" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-decoration-none text-dark"
                                    type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <i class="fa fa-plus"></i> Immobilier
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion1">
                            <div class="card-body">

                                @if($adCategories->count())
                                <ul type="circle" class="list-unstyled simple-load-more">
                                    <li><a class="text-danger" href="{{ route('ad.immovable') }}">Tout</a></li>

                                    @foreach($adCategories as $adCategory)
                                    <li><a class="{{ $adCategory->getSelected(Request::query('ad_category_id')) }}"
                                            href="{{ route('ad.immovable', ['ad_category_id' => $adCategory->id]) }}">{{ $adCategory->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                <p>Aucune catégorie d'annonce</p>
                                @endif

                            </div>
                        </div>

                        <div class="card-footer p-2 text-right"><a href="{{ route('adCategory.index', ['ad_ray_id' => 2]) }}"
                            class="text-danger">Tout afficher</a></div>
                    </div>
                </div>

            </aside>
            <div class="col-lg-9">
                <div class="row">

                    @if($ads->count())

                    @foreach($ads as $ad)
                    <div class="col-md-3 mb-3 ad-item">
                        <div class="card h-100 border-dark">
                            <a href="{{ route('ad.show', ['ad' => $ad]) }}">
                                <img src="{{ $ad->image->link }}" class="card-img-top img-200x200"
                                    alt="{{ $ad->image->description }}">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title font-weight-bold m-0">
                                    <a class="text-danger"
                                        href="{{ route('ad.show', array('ad' => $ad)) }}">{{ $ad->name }}</a>
                                </h6>
                                <p class="font-weight-bold">{{ $ad->getPrice() }}</p>
                                <div class="card-text text-secondary">
                                    <span class="material-icons">location_on</span>{{ $ad->user->location() }}
                                </div>
                                <div class="card-text text-secondary">
                                    <span class="material-icons">timer</span>
                                    <time class="timeago"
                                        datetime="{{ $ad->image->created }}">{{ $ad->image->created }}</time>
                                </div>
                            </div>
                            <div class="card-footer p-1 text-center">
                                <a title="Ajouter au favoris" href="{{ route('user.add_ad', ['ad' => $ad]) }}"
                                    class="mr-4"><i class="fa fa-heart text-primary"></i></a>

                                <a target="_blank" title="Appel" href="{{ $ad->phoneLink() }}" class=""><i
                                            class="fa fa-phone text-danger"></i></a>

                                <a target="_blank" title="Whatsapp"
                                        href="{{ $ad->whatsappLink() }}"
                                        class="mx-4"><i class="fa fa-whatsapp text-success"></i></a>

                                <a target="_blank" title="Message"
                                        href="{{ $ad->messageLink() }}" class=""><i
                                            class="fa fa-comments text-warning"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @else

                    <div class="col-lg-12">
                        <p>Rien</p>
                    </div>

                    @endif

                </div>

            </div>
        </div>
    </div>
</section>

@endsection