<?php

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/voorbeeld-email', static function () {
	return view('preview');
})->name('preview');

Route::post('/complaint', 'ComplaintController@store')->name('complaint');

Route::get('/webshop/toevoegen', 'WebshopController@create')->name('webshop.create');
Route::post('/webshop/toevoegen', 'WebshopController@store')->name('webshop.store');
