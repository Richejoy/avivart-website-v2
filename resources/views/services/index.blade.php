@extends('layouts.page', ['title' => 'Services'])

@section('body')

<section class="bg-white py-3">
    <div class="container-fluid">

        <div class="row py-5">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-info py-lg-5">Conception de logiciels sur mesure</h2>

                <p class="text-justify">
                    De nos jours l'informatique fait partie des priorités en matière de visibilité et de digitalisation d'une entreprise.
                </p>
            </div>

            <div class="col-lg-6">
                <p>
                    <img class="w-100" src="{{ asset('public/img/undraw_software_engineer_lvl5.png') }}" alt="Photo">
                </p>
            </div>
        </div>
        
        <hr>

        <div class="row py-5">
            <div class="col-lg-6">
                <p>
                    <img class="w-100" src="{{ asset('public/img/undraw_electric_car_b7hl.png') }}" alt="Photo">
                </p>
            </div>

            <div class="col-lg-6">
                <h2 class="font-weight-bold text-danger py-lg-5">Vente & Location des voitures</h2>

                <p class="text-justify">
                    La société AVIV'ART est spécialisée dans la vente et location des voitures que ce soit des voitures nouvelles ou d'occasions.
                </p>
            </div>
        </div>

        <hr>

        <div class="row py-5">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-danger py-lg-5">Employés de bureau</h2>

                <p class="text-justify">
                    Nous mettons à la disposition des entreprises les employés...
                </p>
            </div>

            <div class="col-lg-6">
                <p>
                    <img class="w-100" src="{{ asset('public/img/undraw_quitting_time_dm8t.png') }}" alt="Photo">
                </p>
            </div>
        </div>

        <hr>

        <div class="row py-5">
            <div class="col-lg-6">
                <p>
                    <img class="w-100" src="{{ asset('public/img/undraw_people_tax5.png') }}" alt="Photo">
                </p>
            </div>

            <div class="col-lg-6">
                <h2 class="font-weight-bold text-info py-lg-5">Employés de maison</h2>

                <p class="text-justify">
                    Nous mettons également aux ménages des employés...
                </p>
            </div>
        </div>

    </div>
</section>

@endsection