<div class="sw" data-vide-bg="../files/beton/beton.mp4" data-vide-options="loop: true, muted: true, position: 0% 0%">
    <div class="bg-overlay">
        <div class="container font">
            <div class="row pt-5 pb-5">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                    @if (isset($brand))
                        <span class="h1 w-3">{{ $brand }}</span><br>
                    @endif
                    @if (isset($logotype))
                        <img src="{{ $logotype }}" class="img-fluid col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 px-0"><br>
                    @endif
                    <span class="w-4">{{ $description }}</span>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center w-4">
                    <div class="hidden-md-up">
                        <br>
                    </div>
                    <a href="tel:{{ $phone }}" class="text-info a">{{ $phone_view }}</a><br>
                    <a href="mailto:{{ $email }}" class="text-info a">{{ $email }}</a><br>
                    {{ $region }}
                </div>
            </div>

            <div class="row pt-5 pb-5 mt-5">
                <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1">
                    <h1 class="my-0 w-5 text-center">
                        {{ $offer }}
                    </h1>
                </div>
            </div>
            <div class="row pt-5 pb-5">
                <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1">
                    <h4>
                        <ul class="w-3">
                            {{ $bullets }}
                        </ul>
                    </h4>
                </div>
            </div>
            <div class="row pt-5 pb-5 mb-5">
                <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1 text-center">
                    <button class="btn btn-primary btn-lg font" role="button">Рассчитать с доставкой</button>
                </div>
            </div>

        </div>
    </div>
</div>
