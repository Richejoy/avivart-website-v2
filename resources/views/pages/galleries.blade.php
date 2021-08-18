@extends('layouts.page', ['title' => "Galeries d'images et de vidéos"])

@section('body')

<section class="py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <ul class="nav nav-pills flex-column flex-sm-row mb-3" id="pills-tab" role="tablist">
                  <li class="flex-sm-fill text-sm-center nav-item" role="presentation">
                    <a class="nav-link active" id="pills-image-tab" data-toggle="pill" href="#pills-image" role="tab" aria-controls="pills-image" aria-selected="true">Images</a>
                  </li>
                  <li class="flex-sm-fill text-sm-center nav-item" role="presentation">
                    <a class="nav-link" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="false">Vidéos</a>
                  </li>
                  <li class="flex-sm-fill text-sm-center nav-item" role="presentation">
                    <a class="nav-link" id="pills-audio-tab" data-toggle="pill" href="#pills-audio" role="tab" aria-controls="pills-audio" aria-selected="false">Audios</a>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">

                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://avivart.net/images/galleries/IMG-20210723-WA0014.jpg" alt="Image" class="w-100">
                        </div>
                        <div class="col-md-3">
                            <img src="https://avivart.net/images/galleries/IMG-20210723-WA0015.jpg" alt="Image" class="w-100">
                        </div>
                        <div class="col-md-3">
                            <img src="https://avivart.net/images/galleries/IMG-20210723-WA0016.jpg" alt="Image" class="w-100">
                        </div>
                        <div class="col-md-3">
                            <img src="https://avivart.net/images/galleries/IMG-20210723-WA0017.jpg" alt="Image" class="w-100">
                        </div>
                    </div>

                  </div>

                  <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                    <div class="row">
                        <div class="col-md-3">
                            <video controls class="w-100 p-0">
                                <source src="{{ asset('public/videos/splashscreen0.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-3">
                            <video controls class="w-100 p-0">
                                <source src="{{ asset('public/videos/v0.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-3">
                            <video controls class="w-100 p-0">
                                <source src="{{ asset('public/videos/v1.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-3">
                            <video controls class="w-100 p-0">
                                <source src="{{ asset('public/videos/v2.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-3">
                            <video controls class="w-100 p-0">
                                <source src="{{ asset('public/videos/v4.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="pills-audio" role="tabpanel" aria-labelledby="pills-audio-tab">
                    <p>Rien pour le moment</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection