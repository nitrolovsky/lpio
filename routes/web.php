<?php

Route::get('/', function () {
    $env = explode(".", Request::server("HTTP_HOST"));
    $subdomain = array_shift($env);
    if (file_exists("../resources/views/pages/$subdomain.blade.php") == true) {
        return view("pages.$subdomain");
    }
});

Route::get('pages/{url}', function ($url) {
    if (file_exists("../resources/views/pages/$url.blade.php") == true) {
        return view("pages.$url");
    }
});

Route::get('pages/thanks', function() {
    return view('pages.thanks');
});
