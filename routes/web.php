<?php

Route::get('/', function () {
    return view('index');
});

Auth::routes();

<<<<<<< HEAD
// Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/home', 'HomeController@index')->name('home');


>>>>>>> c98f693c18f8fe31ad5728e3fade5d32530b45fc
Route::get('preguntas','PreguntasController@mandarAVista')->name('preguntas');
