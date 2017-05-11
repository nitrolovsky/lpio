<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $domain = Request::server("HTTP_HOST");
    $page = App\Page::where('domain', $domain)->first();
    if ($page) {
        return view('pages.show')
            ->with('page', $page);
    }

    $env = explode(".", Request::server("HTTP_HOST"));
    $subdomain = array_shift($env);
    $page = App\Page::where('subdomain', $subdomain)->first();
    if ($page) {
        return view('pages.show')
            ->with('page', $page);
    }

    if (file_exists("../resources/views/lp/$subdomain.blade.php") == true) {
        return View("lp.$subdomain");
    }
});
