<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'SiteController@index')->name('index');

Route::post('/message', 'MessageController@store')->name('thanks.store');

Route::middleware(['auth'])->group(static function () {
    Route::delete('/message/{message}', 'MessageController@delete')->name('message.delete');
    Route::put('/approve/{message}', 'MessageController@approve')->name('message.approve');
    Route::post('/block', 'BlacklistController@store')->name('ip.store');
    Route::delete('/block', 'BlacklistController@delete')->name('ip.delete');
});
