<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 px-2">
    @if (isset($link_primer))
        <a href="{{ $link_primer }}" target="_blank">
            <img src="{{ $image }}" class="img-fluid mx-auto d-block sw" alt="{{ $description or '' }}">
        </a>
    @else
        <img src="{{ $image }}" class="img-fluid mx-auto d-block sw" alt="{{ $description or '' }}">
    @endif
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
