<?php

use Google\Cloud\Speech\SpeechClient;


Route::get('/', function () {
    $domain = Request::server("HTTP_HOST");
    $page = str_replace(".", "-", $domain);
    if (file_exists("../resources/views/pages/$page.blade.php") == true) {
        return view("pages.$page");
    } else {
        $env = explode(".", Request::server("HTTP_HOST"));
        $subdomain = array_shift($env);
        if (file_exists("../resources/views/pages/$subdomain.blade.php") == true) {
            return view("pages.$subdomain");
        }
    }
});

Route::get('all', function() {
    $files = scandir('../resources/views/pages');

    $key = array_search('.', $files);
    unset($files[$key]);

    $key = array_search('..', $files);
    unset($files[$key]);

    foreach($files as $key => $file) {
        $files[$key] = stristr($file, '.', true);
    }

    $key = array_search('all', $files);
    unset($files[$key]);

    return view('pages.all')
        ->with('files', $files);
});

Route::get('pages/audiototext', function() {

  $speech = new SpeechClient([
      'projectId' => 'my_project',
      'languageCode' => 'ru-RU'
  ]);

  // Recognize the speech in an audio file.
  $results = $speech->recognize(
      fopen('../public/files/audiototext/1.mp3', 'r')
  );

  foreach ($results as $result) {
      echo $result->topAlternative()['transcript'] . "\n";
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



Route::resource('leads', 'LeadController');
