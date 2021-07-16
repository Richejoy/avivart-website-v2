@extends('layouts.user', ['title' => 'Mes produits favoris'])

@section('body')

<div class="row">
    <div class="col-lg-12">

        @if($productsUsers->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Catégorie</th>
                        <th>Rayon</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productsUsers as $productUser)
                    <tr>
                        <td>{{ $productUser->product->name }}</td>
                        <td>{{ $productUser->product->getNewPrice() }}</td>
                        <td>{{ $productUser->product->productCategory->name }}</td>
                        <td>{{ $productUser->product->productCategory->productRay->name }}</td>
                        <td>{{ $productUser->created }}</td>
                        <td>
                            <a data-toggle="tooltip" title="Ajouter au panier"
                                    href="{{ route('cart.add', ['product' => $productUser->product]) }}" class="text-primary"><i
                                        class="fa fa-shopping-cart"></i></a>

                            <a target="_blank" style="padding-left: 15px" data-toggle="tooltip" title="Détails"
                                    href="{{ route('store.show', ['product' => $productUser->product]) }}" class="text-warning"><i
                                        class="fa fa-info-circle"></i></a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p>Aucun</p>
        @endif

    </div>
</div>

@endsection