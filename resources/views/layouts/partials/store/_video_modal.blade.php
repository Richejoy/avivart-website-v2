<div class="videoIcon">
        <video muted autoplay loop data-toggle="tooltip" title="Publicités" data-placement="right">
            <source src="{{ asset('videos/v3.mp4') }}" type="video/mp4">
        </video>
    </div>
    <div class="videoPopup">
        <div class="card border-secondary">
            <div class="card-header bg-secondary text-white py-2"><i class="fa fa-bell fa-pulse mr-2 text-warning"></i> Publicités<span data-toggle="tooltip" title="Fermer"
                    class="closeVideoPopup pull-right"><i class="fa fa-close"></i></span></div>
            <video controls class="w-100 p-0">
                <source src="{{ asset('videos/v3.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>