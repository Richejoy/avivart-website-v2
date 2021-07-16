@extends('layouts.ad', ['title' => 'Comment ça marche ?'])

@section('body')

<section class="bg-light py-5">
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col-lg-12 text-center">
                <h2 class="font-weight-bold">Notre démarche en trois (3) étapes</h2>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-lg-4 text-center">
                <p><span class="badge badge-danger py-2 px-3">1</span></p>

                <p>
                    <img class="w-100" src="{{ asset('public/img/undraw_secure_login_pdn4_indigo.png') }}" alt="Photo">
                </p>

                <h4 class="font-weight-bold">Connexion</h4>

                <p class="text-secondary">
                    Connectez-vous en remplissant le formulaire en 15 secondes.
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <p><span class="badge badge-danger py-2 px-3">2</span></p>

                <p>
                    <img class="w-100" src="{{ asset('public/img/undraw_add_to_cart_vkjp.png') }}" alt="Photo">
                </p>

                <h4 class="font-weight-bold">Annonce</h4>

                <p class="text-secondary">
                    Faites gratuitement vos annonces, validité une semaine.
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <p><span class="badge badge-danger py-2 px-3">3</span></p>

                <p>
                    <img class="w-100" src="{{ asset('public/img/undraw_checking_boxes_2ibd.png') }}" alt="Photo">
                </p>

                <h4 class="font-weight-bold">Validation</h4>

                <p class="text-secondary">
                    Votre annonce sera visible dès sa validation par la direction AVIV'ART.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-5">
    <div class="container">
        <div class="row py-3">
            <div class="col-lg-12 text-center">
                <h2 class="font-weight-bold text-danger">Vos Avantages</h2>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <p><i class="fa fa-money text-danger fa-3x"></i></p>
                        <h4 class="font-weight-bold">Prix Compétitifs</h4>
                        <p>
                            Nous annonçons au prix du marché sans surenchère
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <p><i class="fa fa-user text-danger fa-3x"></i></p>
                        <h4 class="font-weight-bold">Satisfaction</h4>
                        <p>
                            Votre satisfaction est notre priorité
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <p><i class="fa fa-calendar text-danger fa-3x"></i></p>
                        <h4 class="font-weight-bold">Gain de temps</h4>
                        <p>
                            Nous vous validons le plus rapidement possible
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <p><i class="fa fa-check text-danger fa-3x"></i></p>
                        <h4 class="font-weight-bold">Visibilité</h4>
                        <p>
                            Vos clients ne tarderons pas à vous contacter.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection