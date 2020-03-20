<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('index');
Route::get(trans('routes.hygiene'), 'SiteController@hygiene')->name('hygiene');
Route::get(trans('routes.donate'), 'SiteController@donate')->name('donate');

Route::post(trans('routes.thanks'), 'AppreciationController@store')->name('thanks.store');

