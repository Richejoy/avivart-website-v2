@extends('layouts.user', ['title' => 'Mes annonces'])

@section('body')

<div class="row">
    <div class="col-lg-12">

        <p><a target="_blank" class="btn btn-success" href="{{ route('ad.create') }}">Publier une annonce</a></p>

        @if($ads->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Date de création</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ads as $ad)
                    <tr>
                        <td>{{ $ad->name }}</td>
                        <td>{{ $ad->description }}</td>
                        <td>{{ $ad->getPrice() }}</td>
                        <td>{{ $ad->image->created }}</td>
                        <td>
                            <a target="_blank" data-toggle="tooltip" title="Afficher"
                                    href="{{ route('ad.show', ['ad' => $ad]) }}" class="text-success"><i
                                        class="fa fa-info-circle"></i></a>
                            <a target="_blank" data-toggle="tooltip" title="Editer"
                                    href="{{ route('ad.edit', ['ad' => $ad]) }}" class="text-warning"><i
                                        class="fa fa-pencil"></i></a>
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