@extends('layouts.page', ['title' => 'A propos'])

@section('body')

<section class="bg-white py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <p class="mb-0">
                    <img class="w-100 border border-dark p-2" src="{{ asset('img/viva1.jpg') }}" alt="Photo">
                </p>
                <h5 class="mt-0 bg-dark p-2 text-white font-weight-bold">Mme Viva AKUE-ATSAH</h5>
            </div>

            <div class="col-lg-6">
                <h2 class="font-weight-bold text-danger py-lg-5"><u>Mot de la Directrice Générale</u></h2>

                <p class="text-justify">
                    AVIV'ART est une entreprise spécialisée dans l’Ingénierie Informatique, dans e-commerce, et dans d'autres prestations de services. C'est pour vous que nous œuvrons dans les domaines qui nous passionnent.
                </p>
                <p class="text-justify">
                    Notre force, offrir des solutions innovantes, toujours à la pointe de la technologie pour conserver et accroître notre part de marché. Nos experts sont à votre service pour votre entière satisfaction. Car à AVIV'ART, le client est réellement au cœur de notre métier.
                </p>
                <p class="text-justify">
                    A travers ce site, vous avez un aperçu de toutes nos activités, de tous nos produits, nos expertises, nos expériences, nos partenariats ...
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-danger py-lg-5"><u>Qui sommes-nous ?</u></h2>

                <p class="text-justify">
                    AVIV’ART est une équipe composée des experts œuvrant très efficacement dans les domaines qui les passionnent pour la grande satisfaction des clients.
                </p>
                <p class="text-justify">
                    Le but de notre business est de répondre de manière qualitative et quantitative au coût du marché sans une surenchère, en vue de satisfaire les besoins des entreprises et des ménages.
                </p>
                <p class="text-justify">
                    Nous accompagnons donc les entreprises en répondant à leurs besoins informatiques par la fourniture et l’intégration de solutions informatiques. Aux particuliers, nous offrons des services et produits pour faciliter leur quotidien en se servant de la nouvelle technologie. C'est l'art de mieux vivre.
                </p>
                <p class="text-justify">
                    Notre objectif, est de nous positionner comme étant leader dans la mise en place des solutions informatiques, en digitalisant les activités des entreprises au niveau national et sous-régional.
                </p>
            </div>

            <div class="col-lg-6">
                <p class="mb-0">
                    <img class="w-100 border border-dark p-2" src="{{ asset('img/team.jpeg') }}" alt="Image">
                </p>
                <h5 class="mt-0 bg-dark p-2 text-white font-weight-bold">VIVA Equipe</h5>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-3">
    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-lg-12 text-center">
                <h2 class="font-weight-bold text-uppercase text-info"><u>Nos valeurs</u></h2>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-lg-4 text-center">
                <div class="border-hover-solid-primary">
                    <h4 class="py-3 font-weight-bold text-uppercase"><i class="fa fa-lock text-info fa-2x px-3"></i> SÉCURITÉ</h4>
                    <p class="text-secondary">
                        Nous disposons des meilleurs standards <br> au niveau de la sécurité et de la qualité.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="border-hover-solid-success">
                    <h4 class="py-3 font-weight-bold text-uppercase"><i class="fa fa-check text-info fa-2x px-3"></i> RAPIDITÉ</h4>
                    <p class="text-secondary">
                        La prise en charge rapide de vos commandes est garantie par notre réseau performant de partenaires de transport sélectionnés que nous entretenons.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="border-hover-solid-danger">
                    <h4 class="py-3 font-weight-bold text-uppercase"><i class="fa fa-user text-info fa-2x px-3"></i> FLEXIBILITÉ</h4>
                    <p class="text-secondary">
                        Nous avons la capacité de nous adapter <br> à tous vos besoins en temps réel.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection