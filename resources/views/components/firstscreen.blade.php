<div class="bg-img sw">
    <div class="bg-overlay">
        <div class="container font">
            <div class="row pt-4">
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
            <div class="row pt-5">
                <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1">
                    <h1 class="my-0 w-5">
                        {{ $offer }}
                    </h1>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1 my-0">
                    <h4>
                        <ul class="w-3">
                            {{ $bullets }}
                        </ul>
                    </h4>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-xl-8 col-lg-8">
                    <div class="embed-responsive embed-responsive-16by9 sw" id="video">
                        <iframe class="embed-responsive-item" src="{{ $video }}?rel=0&showinfo=0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 offset-xl-0 offset-lg-0 offset-md-3">
                    <div class="container">
                        <div class="hidden-lg-up">
                            <br>
                        </div>
                        <div class="p-3 bg-form">
                            <h4 class="pb-2 w-5">
                                {{ $leadmagnet }}
                            </h4>
                            {{ $form or '' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
