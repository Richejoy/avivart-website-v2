@extends('layouts.informatics', ['title' => 'Des logiciels sur mesure'])

@section('body')

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('public/img/informatics/logiciel1.jpg') }}" class="d-block w-100" alt="Image">
            <div class="carousel-caption d-none d-md-block px-3">
                <h2 class="font-weight-bold">Logiciels</h2>
                <p>Nous conçevons vos logiciels métiers selon votre budget.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('public/img/informatics/reseau1.jpg') }}" class="d-block w-100" alt="Image">
            <div class="carousel-caption d-none d-md-block px-3">
                <h2 class="font-weight-bold">Réseaux</h2>
                <p>Installation de réseaux stables et sécurisés.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('public/img/informatics/maintenance2.jpg') }}" class="d-block w-100" alt="Image">
            <div class="carousel-caption d-none d-md-block px-3">
                <h2 class="font-weight-bold">Maintenances</h2>
                <p>Nous vendons et maintenons vos équipements informatiques.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('public/img/informatics/services3.jpg') }}" class="d-block w-100" alt="Image">
            <div class="carousel-caption d-none d-md-block px-3">
                <h2 class="font-weight-bold">Services</h2>
                <p>Offre de services personnalisés.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="bg-white pt-5 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-3">
                <h2 class="font-weight-bold text-uppercase">Notre centre de formation</h2>
                <p class="">
                    Pour des formations professionnelles et certifiantes.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHNvZnR3YXJlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        class="card-img-top img-200x200" alt="Image">
                    <div class="card-body bg-light">
                        <h5 class="card-title font-weight-bold">Développement d'applications</h5>
                        <p>
                            Cette formation vous fera acquérir les technologies nécessaires pour concevoir un site ou
                            une application web et une application mobile.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card h-100">
                    <img src="{{ asset('public/img/trainings/database.png') }}" class="card-img-top img-200x200"
                        alt="Image">
                    <div class="card-body bg-light">
                        <h5 class="card-title font-weight-bold">Administration de base de données</h5>
                        <p>
                            Ce programme contient les formations ORACLE, SQL SERVER, MYSQL
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card h-100">
                    <img src="{{ asset('public/img/trainings/reseau.jpg') }}" class="card-img-top img-200x200"
                        alt="Image">
                    <div class="card-body bg-light">
                        <h5 class="card-title font-weight-bold">Administration réseaux</h5>
                        <p>
                            Cette formation vous donnera des certifications en CCNA 1, CCNA 2, CCNA 3, CCNA 4, CISCO.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="font-weight-bold text-primary">Quelques unes de nos références</h2>
                <p class="text-justify">
                    AVIV’ART œuvre très efficacement dans les domaines qui les passionnent pour la grande satisfaction
                    des clients.
                </p>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-lg-3 col-sm-6 text-center">
                <p>
                    <img src="{{ asset('public/img/partners/ecobank.jpeg') }}" alt="ECOBANK" class="img-150x150 w-100">
                </p>
            </div>

            <div class="col-lg-3 col-sm-6 text-center">
                <p>
                    <img src="{{ asset('public/img/partners/sunu.jpeg') }}" alt="SUNU" class="img-150x150 w-100">
                </p>
            </div>

            <div class="col-lg-3 col-sm-6 text-center">
                <p>
                    <img src="{{ asset('public/img/partners/hi.png') }}" alt="HI" class="img-150x150 w-100">
                </p>
            </div>

            <div class="col-lg-3 col-sm-6 text-center">
                <p>
                    <img src="{{ asset('public/img/partners/anaxar.jpg') }}" alt="ANAXAR" class="img-150x150 w-100">
                </p>
            </div>

            <div class="col-lg-3 col-sm-6 text-center">
                <p>
                    <img src="{{ asset('public/img/partners/nbfconsulting.png') }}" alt="NBF CONSULTING"
                        class="img-150x150 w-100">
                </p>
            </div>

            <div class="col-lg-3 col-sm-6 text-center">
                <p>
                    <img src="{{ asset('public/img/partners/fucec.jpeg') }}" alt="FUCEC TOGO" class="img-150x150 w-100">
                </p>
            </div>

        </div>
    </div>
</section>

@endsection