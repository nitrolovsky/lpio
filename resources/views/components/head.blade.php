<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/page.css">
    <title>
        {{ $title }}
    </title>
    <style>
        body {
            background-color: white !important;
            padding-top: 54px;
        }
        .bg-img {
            background: url("{{ $bg }}") no-repeat;
            background-size: cover;
        }
        .bg-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            height: 100%;
            min-height: 100%;
        }
    </style>
    {{ $google_analytics}}
    {{ $lptracker }}
</head>
