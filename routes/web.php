<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('index');
Route::get(trans('routes.hygiene'), 'SiteController@hygiene')->name('hygiene');
Route::get(trans('routes.faq'), 'SiteController@faq')->name('faq');
Route::get(trans('routes.thanks'), 'SiteController@thanks')->name('thanks');
Route::get(trans('routes.donate'), 'SiteController@donate')->name('donate');

Route::post('/thanks', 'AppreciationController@store')->name('thanks.store');

Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});
