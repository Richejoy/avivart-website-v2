@extends('layouts.page', ['title' => 'Plan du Site'])

@section('body')

<section class="bg-white py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 text-center">
                        <h4 class="py-4 font-weight-bold text-uppercase">Société</h4>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="{{ route('page.index') }}">Accueil</a></li>
                            <li><a class="text-secondary" href="{{ route('informatics.index') }}">Informatique</a></li>
                            <li><a class="text-secondary" href="{{ route('store.index') }}">Boutique</a></li>
                            <li><a class="text-secondary" href="{{ route('ad.index') }}">Annonces</a></li>
                            <li><a class="text-secondary" href="{{ route('cosmetic.index') }}">Cosmétique</a></li>
                            <li><a class="text-secondary" href="{{ route('agribusiness.index') }}">Agrobusiness</a></li>
                            <li><a class="text-secondary" href="{{ route('immovable.index') }}">Immobilier</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 text-center">
                        <p><img src="{{ asset('img/undraw_software_engineer_lvl4.png') }}" class="w-100" alt="Image"></p>
                    </div>

                    <div class="col-lg-4 text-center">
                        <h4 class="py-4 font-weight-bold text-uppercase">Autres Liens</h4>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="{{ route('service.index') }}">Services</a>
                            </li>
                            <li><a class="text-secondary" href="{{ route('contact.index') }}">Contact</a></li>
                            <li><a class="text-secondary" href="{{ route('page.about') }}">A propos</a></li>
                            <li><a class="text-secondary" href="{{ route('page.conditions') }}">Conditions Générales</a>
                            </li>
                            <li><a class="text-secondary" href="{{ route('page.terms') }}">Termes Généraux</a></li>
                            <li><a class="text-secondary" href="{{ route('page.faq') }}">Foire aux questions</a></li>
                            <li><a class="text-secondary" href="{{ route('page.donate') }}">Faire un Don</a></li>
                            <li><a class="text-secondary" href="{{ route('page.sitemap') }}">Plan du Site</a></li>
                        </ul>
                    </div>
        </div>
    </div>
</section>

@endsection