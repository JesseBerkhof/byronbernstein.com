<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('index');
})->name('home');
