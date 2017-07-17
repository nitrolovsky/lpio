<div class="col-xl-4 col-lg-4">
    <img src="{{ $image }}" class="img-fluid mx-auto d-block sw" alt="{{ $description }}">
    <div class="pt-4 px-4">
        @if(isset($button))
            <button class="btn btn-primary font w-4 float-right" role="button"  data-toggle="modal" data-target="#priceModal">
                {{ $button }}
            </button>
        @endif
        <h4 class="black w-5">
            {{ $title }}
        </h4>
        <div class="s-17">
            {{ $details }}
        </div>
    </div>
    <div class="hidden-lg-up">
        <br>
        <br>
        <br>
    </div>
</div>
