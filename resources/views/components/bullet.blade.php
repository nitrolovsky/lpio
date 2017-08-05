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
                background-color: rgba(0, 0, 0, 0.6);
                color: white;
                height: 100%;
                min-height: 100%;
            }
            #video{
                position: relative;
                background: transparent;
            }
            .ytplayer-container{
                position: fixed;
                top: 0;
                z-index: -1;
            }
            .bg-form {
                background-color: rgba(255, 255, 255, 1);
                border-radius: .25rem;
                color: black;
            }
        </style>
        {{ $google_analytics or '' }}
        {{ $lptracker or '' }}
    </head>
    <body>
        <div class="sw" data-vide-options="loop: true, muted: true, position: 0% 0%" id="video">
            <div class="bg-overlay">
                <div class="container font">
                    <div class="row py-5">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 text-xl-left text-lg-left text-md-left text-sm-center text-center">
                            <span class="h1 w-3">{{ $brand or '' }}</span><br>
                            <span class="w-4">{{ $description or '' }}</span>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 text-xl-right text-lg-right text-md-right text-sm-center text-center w-4">
                            <div class="hidden-md-up">
                                <br>
                            </div>
                            <a href="tel:{{ $phone or '' }}" class="h1 w-3 text-info a">{{ $phone_view or '' }}</a><br>
                        </div>
                    </div>

                    <div class="row py-5">
                        <div class="col-xl-8 col-lg-8">
                            <h1 class="my-0 w-5">
                                {{ $offer or '' }}
                            </h1>
                            <h4 class="py-5">
                                <ul class="w-3">
                                    {{ $bullets or '' }}
                                </ul>
                            </h4>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 offset-xl-0 offset-lg-0 offset-md-3">
                            <div class="hidden-lg-up">
                                <br>
                            </div>
                            <div class="p-4 bg-form sw">
                                <h4 class="pb-2 w-5 text-center">
                                    {{ $leadmagnet or '' }}
                                </h4>
                                {{ $form or '' }}
                            </div>
                        </div>
                    </div>

                    <div class="row py-5 my-5">
                        <div class="col-12">
                            {{ $legal or '' }}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
         <script src="../jQuery.YoutubeBackground-master/src/jquery.youtubebackground.js"></script>
         <script>
             $('#video').YTPlayer({
                 videoId: {{ $video or '' }},
                 mute: true,
             });
         </script>
        {{ $yandex or '' }}
    </body>
</html>
