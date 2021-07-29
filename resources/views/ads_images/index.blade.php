@extends('layouts.user', ['title' => "Images ou photos"])

@section('body')

<div class="row">
    <div class="col-lg-12">

        <p><a class="btn btn-success" href="{{ route('adImage.create', ['ad' => $ad->id]) }}">Ajouter une image ou photo</a></p>

        @if($adsImages->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Annonce</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($adsImages as $adImage)
                    <tr>
                        <td>{{ $adImage->ad->name }}</td>
                        <td>{{ $adImage->image->id }}</td>
                        <td>{{ $adImage->created }}</td>
                        <td>
                            <a data-toggle="tooltip" title="Editer image"
                                    href="{{ route('image.edit', ['image' => $adImage->image->id]) }}" class="text-danger"><i
                                        class="fa fa-image"></i></a>
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