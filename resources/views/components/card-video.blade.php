<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 px-2">

    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="{{ $video }}?rel=0&showinfo=0" allowfullscreen></iframe>
    </div>

    <div class="pt-4 px-4">
        <h5>
            {{ $title }}
        </h5>
        <p>
            {{ $details or '' }}
        </p>
    </div>

    <div class="d-lg-none">
        <br>
        <br>
        <br>
    </div>

</div>
