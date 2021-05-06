@extends('layouts.store', ['title' => 'Conversion'])

@section('body')

<section class="bg-light py-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">

				@if($conversions->count())

				<div class="row">
					@foreach($conversions as $conversion)
					<div class="col-md-2 text-center">
						<h4><a href="{{ route('conversion.show', ['conversion' => $conversion]) }}" class="text-danger">{{ $conversion->name }}</a></h4>
					</div>
					@endforeach
				</div>

				@else

				<p>Rien pour le moment</p>

				@endif
				
			</div>
		</div>
	</div>
</section>

@endsection