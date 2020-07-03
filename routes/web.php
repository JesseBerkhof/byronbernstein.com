<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('index');

Route::post('/message', 'MessageController@store')->name('thanks.store');

Route::middleware(['admin'])->group(static function () {
    Route::delete('/message', 'MessageController@delete')->name('message.delete');
    Route::put('/approve/{message}', 'MessageController@approve')->name('message.approve');
    Route::post('/block', 'BlacklistController@store')->name('ip.store');
    Route::delete('/block', 'BlacklistController@delete')->name('ip.delete');
});
