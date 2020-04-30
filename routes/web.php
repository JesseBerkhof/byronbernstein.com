<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('index');
Route::get('/maatregelen', 'SiteController@measures')->name('measures');

Route::post('/bedankt', 'AppreciationController@store')->name('thanks.store');

Route::middleware(['admin'])->group(static function () {
    Route::delete('/bedankt', 'AppreciationController@delete')->name('appreciation.delete');
    Route::put('/approve/{appreciation}', 'AppreciationController@approve')->name('appreciation.approve');
    Route::post('/blokkeren', 'BlacklistController@store')->name('ip.store');
    Route::delete('/blokkeren', 'BlacklistController@delete')->name('ip.delete');
});

Route::get('/doneren', 'SiteController@donate')->name('donate');
