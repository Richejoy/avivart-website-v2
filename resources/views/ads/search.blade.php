@extends('layouts.ad', ['title' => Request::query('name') ?? 'Recherche'])

@section('body')
<section class="bg-primary py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white">{{ Str::title(Request::query('name')) ?? 'Recherche' }}</h2>
                <h4 class="font-weight-bold text-light">Annonces ({{ $ads->count() }})</h4>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
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