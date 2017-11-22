<?php

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('preguntas','PreguntasController@mandarAVista')->name('preguntas');
