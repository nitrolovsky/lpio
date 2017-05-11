@extends('layouts.thanks')
@section('content')
    <style>
        html {
            background: url(/files/{{ $page->id }}/{{ $page->background_image }}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: multiply;
        }
        body {
            background-color: rgba(0, 0, 0, 0);
        }
        .form-control {
            border: 1px solid rgb(200, 202, 203);
        }
        .a-dark {
            color: #4da6f3 !important;
        }
        .a-dark:hover {
            color: #4e89bb !important;
            text-decoration: none;
        }

        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .parent {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            overflow: auto;
        }

        .tableC {
            width: 100%;
            height: 100%;
            display: table;
        }

        .cell {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }

        .block {
            display: inline-block;
        }

        .in-center {
            display: block;
            border: none;
        }
    </style>

    <div class="parent">
        <div class="tableC">
            <div class="cell">
                <div class="block">
                    <div class="container">
                        <h1 class="display-4 text-white in-center">
                            Спасибо за вашу заявку. Мы свяжемся с вами в ближайшее время.
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
