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
                  <div class="tab-pane fade show active border p-3 bg-light" id="pills-image" role="tabpanel" aria-labelledby="pills-image-tab">

                    <div class="row images gallery">
                        <a class="col-md-3 d-block" href="https://avivart.net/images/galleries/IMG-20210723-WA0014.jpg" data-caption="Image 1">
                            <img src="https://avivart.net/images/galleries/IMG-20210723-WA0014.jpg" alt="Image" class="w-100">
                        </a>

                        <a class="col-md-3 d-block" href="https://avivart.net/images/galleries/IMG-20210723-WA0015.jpg" data-caption="Image 2">
                            <img src="https://avivart.net/images/galleries/IMG-20210723-WA0015.jpg" alt="Image" class="w-100">
                        </a>

                        <a class="col-md-3 d-block" href="https://avivart.net/images/galleries/IMG-20210723-WA0016.jpg" data-caption="Image 3">
                            <img src="https://avivart.net/images/galleries/IMG-20210723-WA0016.jpg" alt="Image" class="w-100">
                        </a>

                        <a class="col-md-3 d-block" href="https://avivart.net/images/galleries/IMG-20210723-WA0017.jpg" data-caption="Image 4">
                            <img src="https://avivart.net/images/galleries/IMG-20210723-WA0017.jpg" alt="Image" class="w-100">
                        </a>
                    </div>

                  </div>

                  <div class="tab-pane fade border p-3 bg-light" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">

                    <div class="row">
                        <div class="col-md-3">
                            <video class="w-100 p-0" id="video1">
                                <source src="{{ asset('public/videos/splashscreen0.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-3">
                            <video class="w-100 p-0" id="video2">
                                <source src="{{ asset('public/videos/v0.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-3">
                            <video class="w-100 p-0" id="video3">
                                <source src="{{ asset('public/videos/v1.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-3">
                            <video class="w-100 p-0" id="video4">
                                <source src="{{ asset('public/videos/v2.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-3">
                            <video class="w-100 p-0" id="video5">
                                <source src="{{ asset('public/videos/v4.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>

                  </div>

                  <div class="tab-pane fade border p-3 bg-light" id="pills-audio" role="tabpanel" aria-labelledby="pills-audio-tab">
                    
                    <div class="row">
                        <div class="col-md-3 audios">
                          <audio crossorigin class="w-100 audio">
                            <source src="{{ asset('public/audios/a1.mp3') }}" type="audio/mpeg">
                          </audio>
                        </div>
                    </div>

                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('public/plugins/baguetteBox.js-master/css/baguetteBox.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/plugins/moovie.js-main/css/moovie.css') }}" />
<link rel="stylesheet" href="{{ asset('public/plugins/green-audio-player-master/css/green-audio-player.min.css') }}" />
@endpush

@push('scripts')
<script src="{{ asset('public/plugins/baguetteBox.js-master/js/baguetteBox.min.js') }}" async></script>
<script src="{{ asset('public/plugins/moovie.js-main/js/moovie.js') }}"></script>
<script src="{{ asset('public/plugins/green-audio-player-master/js/green-audio-player.min.js') }}"></script>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {

    baguetteBox.run('.images', {
      captions: true, // display image captions.
      buttons: 'auto', // arrows navigation
      fullScreen: false,
      noScrollbars: false,
      bodyClass: 'baguetteBox-open',
      titleTag: false,
      async: false,
      preload: 2,
      animation: 'slideIn', // fadeIn or slideIn
      verlayBackgroundColor: 'rgba(0,0,0,.8)'
    });
      
    let player1 = new Moovie({
        selector: "#video1"
    });

    let player2 = new Moovie({
        selector: "#video2"
    });

    let player3 = new Moovie({
        selector: "#video3"
    });

    let player4 = new Moovie({
        selector: "#video4"
    });

    let player5 = new Moovie({
        selector: "#video5"
    });

    new GreenAudioPlayer('.audios',{
        selector: '.audio',
        stopOthersOnPlay: true,
        enableKeystrokes: true
    });

});

</script>
@endpush