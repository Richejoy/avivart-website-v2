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
                            <a style="margin: 0 15px;" target="_blank" data-toggle="tooltip" title="Editer"
                                    href="{{ route('ad.edit', ['ad' => $ad]) }}" class="text-warning"><i
                                        class="fa fa-pencil"></i></a>

                            <a data-toggle="tooltip" title="Editer image"
                                    href="{{ route('image.edit', ['image' => $ad->image->id]) }}" class="text-danger"><i
                                        class="fa fa-image"></i></a>

                            <a style="margin-left: 15px;" data-toggle="tooltip" title="Images supplémentaires"
                                    href="{{ route('adImage.index', ['ad' => $ad->id]) }}" class="text-info"><i
                                        class="fa fa-file"></i></a>
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