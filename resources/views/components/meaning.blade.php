<div class="col-xl-4 col-lg-4">
    <img src="{{ $image }}" class="img-fluid mx-auto d-block" alt="{{ $description }}">
    <div class="pt-4 px-4">

        <h4 class="black w-5">
            {{ $title }}
        </h4>
        <div class="s-17">
            {{ $details }}
        </div>
        @if(isset($button))
            <div class="pt-3">
                <button class="btn btn-primary font w-4" role="button"  data-toggle="modal" data-target="#priceModal">
                    {{ $button }}
                </button>
            </div>
        @endif
    </div>
    <div class="d-lg-none">
        <br>
        <br>
        <br>
    </div>
</div>
