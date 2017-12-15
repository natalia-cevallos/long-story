<?php

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('preguntas','PreguntasController@mandarAVista')->name('preguntas');
Route::get("index", "PreguntasController@mandaraInicio")->name("index");
Route::get("menu", "PreguntasController@mandaraMenu")->name("menu");

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::resource('libros','BooksController');
Route::resource('categorias','CategoriesController');

Route::auth();
