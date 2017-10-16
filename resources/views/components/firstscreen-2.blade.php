        <div class="container-fluid font">
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

            <div class="row py-5">
                <div class="col-xl-6">
                    <div class="embed-responsive embed-responsive-16by9 sw" id="video">
                        <iframe class="embed-responsive-item" src="{{ $video }}?rel=0&showinfo=0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="container bg-faded p-5 sw">
                        <div class="hidden-lg-up">
                            <br>
                        </div>
                        <h1 class="my-0 w-7">
                            {{ $offer }}
                        </h1>
                        <h4 class="pb-2 pt-4 w-5">
                            {{ $leadmagnet }}
                        </h4>
                        <div class="col-lg-6 px-0">

                            {{ $form or '' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
