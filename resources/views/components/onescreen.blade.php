<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/page.css">
        <title>
            {{ $title or '' }}
        </title>
        <style>
            body {
                background-color: black !important;
            }
            .bg-img {
                background: url("{{ $bg or '' }}") no-repeat;
                background-size: cover;
            }
            .bg-overlay {
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                height: 100%;
                min-height: 100%;
            }
            .bg-form {
                background-color: rgba(0, 0, 0, 0.5);
                border-radius: .25rem;
            }
        </style>
        {{ $google_analytics or '' }}
        {{ $lptracker or '' }}
    </head>
    <body>
        <div class="bg-img sw">
            <div class="bg-overlay">
                <div class="container font">
                    <div class="row pt-4">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                            <span class="h1 w-3">{{ $brand or '' }}</span><br>
                            <span class="w-4">{{ $description or '' }}</span>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center w-4">
                            <div class="hidden-md-up">
                                <br>
                            </div>
                            <a href="tel:{{ $phone or '' }}" class="text-info a">{{ $phone_view or '' }}</a><br>
                            <a href="mailto:{{ $email or '' }}" class="text-info a">{{ $email or '' }}</a><br>
                            {{ $address or '' }}
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1">
                            <h1 class="my-0 w-5">
                                {{ $offer or '' }}
                            </h1>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 offset-xl-1 my-0">
                            <h4>
                                <ul class="w-3">
                                    {{ $bullets or '' }}
                                </ul>
                            </h4>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-xl-8 col-lg-8">
                            <div class="embed-responsive embed-responsive-16by9 sw" id="video">
                                <iframe class="embed-responsive-item" src="{{ $video or '' }}?rel=0&showinfo=0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 offset-xl-0 offset-lg-0 offset-md-3">
                            <div class="container">
                                <div class="hidden-lg-up">
                                    <br>
                                </div>
                                <div class="p-3 bg-form">
                                    <h4 class="pb-2 text-center w-5">
                                        {{ $lead_magnet or '' }}
                                    </h4>
                                    {{ $form or '' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-12">
                            <small>{{ $legal or '' }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        {{ $yandex or '' }}
    </body>
</html>
