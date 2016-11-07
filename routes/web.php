<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.home', ['title' => 'Accueil']);
});
Route::get('contact', function(){
	return view('pages.contact', ['title' => 'contact']);
});
Route::get('horaires', function(){
	return view('pages.horaires', ['title' => 'Horaires']);
});