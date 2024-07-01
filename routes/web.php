<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [GameController::class, 'index']);
Route::post('/save-score', [GameController::class, 'saveScore']);
Route::get('/images', [ImagesController::class, 'getImages']);
