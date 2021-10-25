@extends('layouts.store', ['title' => 'Comment ça marche ?'])

@section('body')

<section class="bg-success py-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="font-weight-bold text-light">Notre démarche en trois (3) étapes</h4>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col-lg-4 text-center">
                <p><span class="badge badge-danger py-2 px-3">1</span></p>

                <p>
                    <img class="w-100" src="{{ asset('img/undraw_secure_login_pdn4.png') }}" alt="Photo">
                </p>

                <h4 class="font-weight-bold">Connexion</h4>

                <p class="text-secondary">
                    Connectez-vous en remplissant le formulaire en 15 secondes.
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <p><span class="badge badge-danger py-2 px-3">2</span></p>

                <p>
                    <img class="w-100" src="{{ asset('img/undraw_shopping_app_flsj.png') }}" alt="Photo">
                </p>

                <h4 class="font-weight-bold">Commande</h4>

                <p class="text-secondary">
                    Ajouter vos besoins de produits dans le panier puis procéder au payement.
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <p><span class="badge badge-danger py-2 px-3">3</span></p>

                <p>
                    <img class="w-100" src="{{ asset('img/undraw_order_a_car_3tww.png') }}" alt="Photo">
                </p>

                <h4 class="font-weight-bold">Livraison</h4>

                <p class="text-secondary">
                    Votre commande de produits vous sera livrée le plus rapidement possible.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark py-5">
    <div class="container">
        <div class="row py-3">
            <div class="col-lg-12 text-center">
                <h2 class="font-weight-bold text-primary">Vos Avantages</h2>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <p><i class="fa fa-money text-primary fa-3x"></i></p>
                        <h4 class="font-weight-bold">Prix Compétitifs</h4>
                        <p>
                            Nous vendons au prix du marché sans surenchère
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <p><i class="fa fa-user text-primary fa-3x"></i></p>
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
                        <p><i class="fa fa-calendar text-primary fa-3x"></i></p>
                        <h4 class="font-weight-bold">Gain de temps</h4>
                        <p>
                            Nous vous livrons le plus rapidement possible
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <p><i class="fa fa-car text-primary fa-3x"></i></p>
                        <h4 class="font-weight-bold">Transport</h4>
                        <p>
                            Rapidité et éfficacité garanties avec nos partenaires
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection