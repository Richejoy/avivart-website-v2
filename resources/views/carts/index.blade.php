@extends('layouts.cart', ['title' => 'Panier'])

@section('body')

<section class="py-5 bg-light">
    <div class="container-fluid">
        @if(Cart::instance('store')->count())

        <div class="row">
            <div class="col-lg-8">
                <h2 class="my-3">Mon Panier</h2>

                <div class="table-responsive bg-white">
                    <table class="table table-bordered mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Image</th>
                                <th>Produit</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartContent as $row)
                            <tr>
                                <td><img src="{{ $row->model->image->link }}" alt="Image" width="48" height="48"></td>
                                <td><a href="{{ route('store.show', ['product' => $row->id]) }}">{{ $row->name }}</a>
                                </td>
                                <td>{{ $row->price }} {{ $row->model->currency->name }}</td>
                                <td>
                                    <form method="get" action="{{ route('cart.update', ['row' => $row->rowId]) }}"
                                        accept-charset="utf-8" autocomplete="off">
                                        <div class="input-group">
                                            <input type="number" name="quantity" id="quantity" class="form-control"
                                                placeholder="Quantité" value="{{ $row->qty }}" required>
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-dark">Valider</button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td>{{ $row->subtotal }} {{ $row->model->currency->name }}</td>
                                <td>
                                    <a data-toggle="tooltip" title="Retirer du panier"
                                        href="{{ route('cart.remove', ['row' => $row->rowId]) }}" class="remove-product-from-cart text-danger"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

                <p class="mt-5">
                    <a href="{{ route('store.index') }}" class="btn btn-outline-primary">Continuer mes achats</a>

                    <a href="{{ route('cart.truncate') }}" class="truncate-cart btn btn-outline-warning">Vider le panier</a>
                </p>

            </div>
            <aside class="col-lg-4">
                <h2>Coupon de remise</h2>

                @if(session()->has('discountCoupon'))

                <div class="card">
                    <div class="card-body">
                        <h6>Un coupon de ({{ session('discountCoupon')->rate }}) à été appliqué</h6>

                        <h5 class="font-weight-bold"><mark>Montant à payé = {{ str_replace(',', '', Cart::instance('store')->total()) - (str_replace(',', '', Cart::instance('store')->subtotal()) * session('discountCoupon')->rate) }} FCFA</mark></h5>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('cart.remove_coupon') }}" class="btn btn-warning">Supprimer le coupon</a>
                    </div>
                </div>

                @else

                {!! Form::open(['route' => 'cart.apply_coupon']) !!}
                <div class="input-group">
                    <input type="text" name="code" id="code" class="form-control" placeholder="Entrez votre code"
                        required>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-info">Appliquer</button>
                    </div>
                </div>
                {!! Form::close() !!}

                @endif

                <div class="card mt-3">
                    <div class="card-header">Détails du panier</div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Sous Total</td>
                                    <td>{{ Cart::instance('store')->subtotal() }} FCFA</td>
                                </tr>
                                <tr>
                                    <td>Taxe</td>
                                    <td>{{ Cart::instance('store')->tax() }} FCFA</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>{{ Cart::instance('store')->total() }} FCFA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('cart.checkout') }}" class="btn btn-success">Payer</a>
                    </div>
                </div>
            </aside>
        </div>

        @else

        <div class="row">
            <div class="col-lg-12">
                <p>Aucun produit dans le panier</p>
            </div>
        </div>

        @endif
    </div>
</section>

@endsection