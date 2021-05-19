@extends('layouts.pdf', ['title' => 'Commande'])

@section('body')

<header>
	<p>
		<img src="{{ asset('public/img/logo.jpg') }}" alt="{{ config('app.name') }}">
	</p>
</header>

@if($order != null)

<h4>Commande Numéro {{ $order->getNumber() }}</h4>

<table class="table1">
    <tr>
        <th>Adresse de livraison</th>
        <td>{{ $order->delivery_address }}</td>
    </tr>
    <tr>
        <th>Date de livraison</th>
        <td>{{ $order->delivery_date }}</td>
    </tr>
    <tr>
        <th>Mode de paiement</th>
        <td>{{ $order->paymentMode }}</td>
    </tr>
    <tr>
        <th>Coupon</th>
        <td>{{ $order->coupon }}</td>
    </tr>
    <tr>
        <th>Statut</th>
        <td>{{ $order->orderState }}</td>
    </tr>
    <tr>
        <th>Montant</th>
        <td>{{ $order->amount }}</td>
    </tr>
    <tr>
        <th>Payée</th>
        <td>{{ $order->paid ? 'Oui' : 'Non' }}</td>
    </tr>
    <tr>
        <th>Date</th>
        <td>{{ $order->created }}</td>
    </tr>
</table>

<h4>Liste des produits</h4>

@if($order->productsOrders != null)
<table class="table2">
    <tr>
        <th>Produit</th>
        <th>Quantité</th>
    </tr>

    @foreach($order->productsOrders as $productOrder)
    <tr>
        <td>{{ $productOrder->product }}</td>
        <td>{{ $productOrder->quantity }}</td>
    </tr>
    @endforeach
</table>
@else
<p>Cette commande ne dispose pas de produit</p>
@endif

@else

<p>Rien pour le moment</p>

@endif

@endsection