@extends('layouts.user', ['title' => Auth::user()->fullName()])

@section('body')

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ Auth::user()->orders->count() }}</h3>

                <p>Mes commandes</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="{{ route('user.orders') }}" class="small-box-footer">En savoir plus <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ session('userFavoriteProducts', 0) }}</h3>

                <p>Mes produits favoris</p>
            </div>
            <div class="icon">
                <i class="ion ion-star"></i>
            </div>
            <a href="{{ route('user.favorite_products') }}" class="small-box-footer">En savoir plus <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ Auth::user()->transactions->count() }}</h3>

                <p>Mes transactions</p>
            </div>
            <div class="icon">
                <i class="ion ion-loop"></i>
            </div>
            <a href="{{ route('user.transactions') }}" class="small-box-footer">En savoir plus <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ $nbPayments }}</h3>

                <p>Mes payements</p>
            </div>
            <div class="icon">
                <i class="ion ion-cash"></i>
            </div>
            <a href="{{ route('user.payments') }}" class="small-box-footer">En savoir plus <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>

@endsection