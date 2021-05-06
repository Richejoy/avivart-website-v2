@extends('layouts.user', ['title' => 'Mes produits favorites'])

@section('body')

<div class="row">
	<div class="col-lg-12">
		
		@if($productsUsers->count())
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>Produit</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
						@foreach($productsUsers as $productUser)
						<tr>
							<td>{{ $productUser->product->name }}</td>
							<td>{{ $productUser->created }}</td>
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