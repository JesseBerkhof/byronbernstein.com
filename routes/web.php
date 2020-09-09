<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'SiteController@index')->name('index');

Route::post('/message', 'MessageController@store')->name('thanks.store');

Route::get('/reckh', 'PetitionController@index')->name('petitions.index');
Route::post('/reckh', 'PetitionController@store')->name('petitions.store');
Route::get('/reckh/vote', 'PetitionController@vote')->name('petitions.vote');

Route::middleware(['auth'])->group(static function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::delete('/message/{message}', 'MessageController@delete')->name('message.delete');
    Route::put('/approve/{message}', 'MessageController@approve')->name('message.approve');
    Route::post('/block', 'BlacklistController@store')->name('ip.store');
    Route::delete('/block', 'BlacklistController@delete')->name('ip.delete');
});
