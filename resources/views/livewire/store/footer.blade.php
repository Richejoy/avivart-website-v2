<footer class="main-footer" id="end">
        <section class="content py-lg-4">
            <div class="container-fluid pt-5 pb-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <p>
                            <img src="{{ asset('img/logo_white.jpeg') }}" alt="{{ config('app.name') }}"
                                class="logo">
                        </p>

                        <p class="text-light">Adresse : CAP Kégué</p>
                        <p class="text-light">Téléphone : +228 92 10 78 78</p>
                        <p class="text-light">Email : contact@avivart.net</p>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h4 class="text-white font-weight-bold text-uppercase">Liens Principaux</h4>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="{{ route('page.index') }}">Accueil</a></li>
                            <li><a class="text-secondary" href="{{ route('store.index') }}">Boutique</a></li>
                            <li><a class="text-secondary" href="{{ route('store.organic_foods') }}">Aliments Bio</a>
                            </li>
                            <li><a class="text-secondary" href="{{ route('store.manufactured_foods') }}">Aliments
                                    Manufacturés</a></li>
                            <li><a class="text-secondary" href="{{ route('store.home_appliance') }}">Electro Ménager</a>
                            </li>
                            <li><a class="text-secondary" href="{{ route('store.high_tech') }}">High-Tech</a></li>
                            <li><a class="text-secondary" href="{{ route('store.other_products') }}">Autres
                                    Produits</a></li>
                            <li><a class="text-secondary" href="{{ route('contact.index') }}">Contact</a></li>
                            <li><a class="text-secondary" href="{{ route('page.about') }}">A propos</a></li>
                            <li><a class="text-secondary" href="{{ route('page.galleries') }}">Galeries</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <h4 class="text-white font-weight-bold text-uppercase">Autres Liens</h4>
                        <ul class="list-unstyled">
                            <li><a class="text-secondary" href="{{ route('informatics.index') }}">Informatique</a></li>
                            <li><a class="text-secondary" href="{{ route('ad.index') }}">Annonces</a></li>
                            <li><a class="text-secondary" href="{{ route('cosmetic.index') }}">Cosmétique</a></li>
                            <li><a class="text-secondary" href="{{ route('agribusiness.index') }}">Agrobusiness</a></li>
                            <li><a class="text-secondary" href="{{ route('immovable.index') }}">Immobilier</a></li>
                            <li><a class="text-secondary" href="{{ route('service.index') }}">Services</a>
                            </li>
                            <li><a class="text-secondary" href="{{ route('page.conditions') }}">Conditions Générales</a>
                            </li>
                            <li><a class="text-secondary" href="{{ route('page.terms') }}">Termes Généraux</a></li>
                            <li><a class="text-secondary" href="{{ route('page.faq') }}">Foire aux questions</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h4 class="text-white font-weight-bold text-uppercase">Souscription Newsletter</h4>
                        <p class="text-secondary">Recevez des mises à jour par email sur notre site et nos offres
                            spéciales.
                        </p>

                        <x-newsletter btnColor="btn btn-success" />

                        <h6 class="my-3 text-white font-weight-bold text-uppercase">Suivez-nous</h6>

                        <ul class="list-unstyled d-flex flex-row justify-content-around align-items-center my-2">
                            <li>
                                <a target="_blank" href="https://facebook.com/societeavivart"
                                    class="text-white text-decoration-none social-icon facebook hvr-grow"><i
                                        class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/art_aviv"
                                    class="text-white text-decoration-none social-icon twitter hvr-shrink"><i
                                        class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://telegram.me/avivart"
                                    class="text-white text-decoration-none social-icon telegram hvr-pulse"><i
                                        class="fa fa-telegram"></i></a>
                            </li>
                            <li>
                                <a target="_blank"
                                    href="https://web.whatsapp.com/send?phone=22892107878&text=Bonjour AVIVART!"
                                    class="text-white text-decoration-none social-icon whatsapp hvr-push"><i
                                        class="fa fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://youtube.com/channel/UC-JUg2ErdyUWoHWF8AoqQYg"
                                    class="text-white text-decoration-none social-icon youtube hvr-pop"><i
                                        class="fa fa-youtube"></i></a>
                            </li>
                        </ul>

                        <div class="text-center mt-3">
                            <em class="fs-12 text-secondary text-uppercase">Mode de payement</em>

                            <img alt="TMONEY" src="{{ asset('img/payments/tmoney.png') }}" class="mr-2 img-25x25">

                            <img alt="FLOOZ" src="{{ asset('img/payments/flooz.jpeg') }}"
                            class="mr-2 img-25x25">

                            <img alt="VISA" src="{{ asset('img/payments/visa.jpeg') }}" class="mr-2 img-25x25">

                            <img alt="PAYPAL" src="{{ asset('img/payments/paypal.png') }}" class="img-25x25">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="copyright">
            <div class="container-fluid py-3">
                <div class="row">
                    <div class="col-lg-8 text-info text-lg-center">
                        &copy; 2018 - {{ date('Y') }} {{ config('app.name') }}, Tous droits réservés | Ce design
                        est fait par <a class="text-success" href="#" target="_blank">AVIV'ART-DESIGN</a>
                    </div>
                    <div class="col-lg-4 text-info text-lg-center">
                        Fait avec <i class="fa fa-heart text-danger"></i> par <a class="text-success" href="#" target="_blank">AVIV'ART-DEV</a>
                    </div>
                </div>
            </div>
        </section>
    </footer>