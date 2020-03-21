<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('index');
Route::get('/maatregelen', 'SiteController@measures')->name('measures');
Route::post('/bedankt', 'AppreciationController@store')->name('thanks.store');
