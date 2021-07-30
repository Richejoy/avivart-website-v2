@extends('layouts.ad', ['title' => 'Faites gratuitement vos annonces, validité une semaine'])

@section('body')

<section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6235533576544520" crossorigin="anonymous"></script>
                <!-- AnnonceCarree1 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:200px;height:300px"
                     data-ad-client="ca-pub-6235533576544520"
                     data-ad-slot="7920091469"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>

            <div class="col-lg-8">

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="https://avivart.net/images/galleries/IMG-20210723-WA0016.jpg" class="d-block w-100" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <img src="https://avivart.net/images/galleries/IMG-20210723-WA0017.jpg" class="d-block w-100" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="http://avivart.net/images/ads/01.jpg" class="d-block w-100" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset('public/img/ads/IMG-20210707-WA0000.jpg') }}" class="d-block w-100"
                                alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="https://avivart.net/images/galleries/IMG-20210723-WA0014.jpg" class="d-block w-100" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <img src="https://avivart.net/images/galleries/IMG-20210723-WA0018.jpg" class="d-block w-100"
                                alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="https://avivart.net/images/galleries/IMG-20210723-WA0015.jpg" class="d-block w-100" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <img src="https://avivart.net/images/galleries/IMG-20210723-WA0019.jpg" class="d-block w-100" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-2">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6235533576544520" crossorigin="anonymous"></script>
                <!-- AnnonceCarree2 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:200px;height:300px"
                     data-ad-client="ca-pub-6235533576544520"
                     data-ad-slot="6074961050"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <div class="row py-3">
                    <div class="col-md-12">
                        <h2 class="mb-0 font-weight-bold text-primary">Annonces VIP</h2>
                        <p class="my-0 text-muted"><span>{{ $vipAds->count() }}</span> résultats</p>
                    </div>
                </div>

                <div class="row slick-slider">

                    @if($vipAds->count())

                        @foreach($vipAds as $ad)
                        <div class="col-md-3 mb-3 ad-item">
                            <div class="card h-100 border-primary">
                                <a href="{{ route('ad.show', ['ad' => $ad]) }}">
                                    <img src="{{ $ad->image->link }}" class="card-img-top img-200x200"
                                    alt="{{ $ad->image->description }}">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold m-0">
                                        <a href="{{ route('ad.show', array('ad' => $ad)) }}">{{ $ad->name }}</a>
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

                <hr>

                <div class="row py-3">
                    <div class="col-md-12">
                        <h2 class="mb-0 font-weight-bold text-success">Annonces les plus récentes</h2>
                        <p class="my-0 text-muted"><span>{{ $latestAds->count() }}</span> résultats</p>
                    </div>
                </div>

                <div class="row slick-slider">

                    @if($latestAds->count())

                    @foreach($latestAds as $ad)
                    <div class="col-md-3 mb-3 ad-item">
                        <div class="card h-100 border-success">
                            <a href="{{ route('ad.show', ['ad' => $ad]) }}">
                                <img src="{{ $ad->image->link }}" class="card-img-top img-200x200"
                                    alt="{{ $ad->image->description }}">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title font-weight-bold m-0">
                                    <a class="text-success"
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

                <hr>

                <div class="row py-3">
                    <div class="col-md-12">
                        <h2 class="mb-0 font-weight-bold text-danger">Toutes nos annonces</h2>
                        <p class="my-0 text-muted">Affichage <span class="shownLength"></span> sur <span class="listLength"></span> résultats</p>
                    </div>
                </div>

                <div class="row static-load-more">

                    @if($ads->count())

                    @foreach($ads as $ad)
                    <div class="col-md-3 mb-3 ad-item">
                        <div class="card h-100 border-danger">
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

                <div class="row">
                    <div class="col-md-12 text-right">
                        <div class="buttonToogle" style="display: none;">
                          <a href="javascript:;" class="showMore">+ Afficher plus</a>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row py-3">
                    <div class="col-md-12">
                        <h2 class="mb-0 font-weight-bold text-warning">Communiqués</h2>
                        <p class="my-0 text-muted"><span>2</span> résultats</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card border-warning">
                            <div class="card-body">
                                <h4 class="font-weight-bold">Offre d'emploi</h4>

                                <p>
                                    Recherche d'un couple marié avec ou sans enfant(s) d'origine <strong>Nord du Togo</strong> pour un travail dans une ferme à <strong>Vogan</strong> de 3 hectares.
                                </p>

                                <p class="font-weight-bold">NB : Logement et Paiement assurés</p>

                                <p>
                                    Téléphone : (+228) 92 10 78 78
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card border-warning">
                            <div class="card-body">
                                <h4 class="font-weight-bold">Candidature spontanée</h4>
                                
                                <p>
                                    Une technicienne de surface recherche un travail de ménage. Elle réside à <strong>Totsi Djidjolé (Togo).</strong> Elle a de l'expérience en la matière et des qualités suivantes : éfficacité, disponibilité et serviabilité.
                                </p>

                                <p class="font-weight-bold">NB : Disponibilité immédiate</p>

                                <p>
                                    Téléphone : (+228) 92 10 78 78
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection