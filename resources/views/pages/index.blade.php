@extends('layouts.page', ['title' => 'Achats et Ventes'])

@section('body')

<section class="bg-light py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.unsplash.com/photo-1611095973763-414019e72400?ixid=MnwxMjA3fDF8MHx0b3BpYy1mZWVkfDEwfGFldTZyTC1qNmV3fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                class="d-block w-100" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1600195077909-46e573870d99?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDN8YWV1NnJMLWo2ZXd8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                class="d-block w-100" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1607528971899-2e89e6c0ec69?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ0fF9oYi1kbDRRLTRVfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                class="d-block w-100" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>

            <aside class="col-lg-3">

            </aside>
        </div>
    </div>
</section>

@endsection