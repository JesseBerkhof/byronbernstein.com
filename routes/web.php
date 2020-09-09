<?php

use App\Http\Controllers\BlacklistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::post('/message', [MessageController::class, 'store'])->name('thanks.store');

Route::get('/reckh', [PetitionController::class, 'index'])->name('petitions.index');
Route::get('/reckh/vote', [PetitionController::class, 'vote'])->name('petitions.vote');
Route::post('/reckh', [PetitionController::class, 'store'])->name('petitions.store');

Route::middleware(['auth'])->group(static function () {
    Route::delete('/block', [BlacklistController::class, 'delete'])->name('ip.delete');
    Route::delete('/message/{message}', [MessageController::class, 'delete'])->name('message.delete');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/block', [BlacklistController::class, 'store'])->name('ip.store');
    Route::put('/approve/{message}', [MessageController::class, 'approve'])->name('message.approve');
});
