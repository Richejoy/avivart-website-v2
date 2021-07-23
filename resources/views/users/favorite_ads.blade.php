@extends('layouts.user', ['title' => 'Mes annonces favoris'])

@section('body')

<div class="row">
    <div class="col-lg-12">

        @if($adsUsers->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Annonce</th>
                        <th>Prix</th>
                        <th>Catégorie</th>
                        <th>Rayon</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($adsUsers as $adUser)
                    <tr>
                        <td>{{ $adUser->ad->name }}</td>
                        <td>{{ $adUser->ad->getPrice() }}</td>
                        <td>{{ $adUser->ad->adCategory->name }}</td>
                        <td>{{ $adUser->ad->adCategory->adRay->name }}</td>
                        <td>{{ $adUser->created }}</td>
                        <td>

                            <a target="_blank" data-toggle="tooltip" title="Détails"
                                    href="{{ route('ad.show', ['ad' => $adUser->ad]) }}" class="text-success"><i
                                        class="fa fa-info-circle"></i></a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p>Aucune</p>
        @endif

    </div>
</div>

@endsection