<?php

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('preguntas','PreguntasController@mandarAVista')->name('preguntas');
Route::get("index", "PreguntasController@mandaraInicio")->name("index");
