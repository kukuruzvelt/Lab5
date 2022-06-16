<?php

Route::get('/', 'HomeController@showHome');

Route::get('/getItem/{id}', function ($id) {
    $b = new BaseController();
    $b->getItem($id);
})->where('id', '[0-9]+');

Route::post('/postMessage', 'BaseController@postMessage');

Route::get('/blade', function () {
    return View::make('child', ['message' => 'MESSAGE', 'mas' => [1, 2, 3], 'bool' => 1]);
});
