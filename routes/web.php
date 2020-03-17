<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('index');
Route::get('/hygiene', 'SiteController@hygiene')->name('hygiene');
Route::get('/faq', 'SiteController@faq')->name('faq');
Route::get('/thanks', 'SiteController@thanks')->name('thanks');
Route::get('/donate', 'SiteController@donate')->name('donate');

Route::post('/thanks', 'AppreciationController@store')->name('thanks.store');
