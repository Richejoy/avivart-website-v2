@extends('layouts.cosmetic', ['title' => $articleCategory->name])

@section('body')

<section class="bg-dark py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-white">{{ $articleCategory->name }}</h2>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
	<div class="container-fluid">
		<div class="row">
			<aside class="col-lg-3">
				
			</aside>

			<div class="col-lg-9">
				
			</div>
		</div>
	</div>
</section>

@endsection