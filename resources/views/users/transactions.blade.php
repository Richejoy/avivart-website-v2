@extends('layouts.user', ['title' => 'Mes transactions'])

@section('body')

<div class="row">
	<div class="col-lg-12">
		
		@if($transactions->count())
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th>Type de transaction</th>
							<th>Activité</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
						@foreach($transactions as $transaction)
						<tr>
							<td>{{ $transaction->transactionType->name }}</td>
							<td>{{ $transaction->activity }}</td>
							<td>{{ $transaction->created }}</td>
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