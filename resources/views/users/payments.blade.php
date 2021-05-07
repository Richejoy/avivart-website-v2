@extends('layouts.user', ['title' => 'Mes payements'])

@section('body')

<div class="row">
    <div class="col-lg-12">

        @if($payments->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Numéro Commande</th>
                        <th>Montant</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->order->getNumber() }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>{{ $payment->created }}</td>
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