<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',                         [GameController::class, 'index']);
Route::get('/registro',                 [UserController::class, 'registro'])->name('user.registro');
Route::post('/registro',                [UserController::class, 'sign_in'])->name('user.sign_in');
Route::get('/login',                    [UserController::class, 'login_form'])->name('login');
Route::post('/login',                   [UserController::class, 'login'])->name('user.login');
Route::get('/recuperar_contrasenia',    [UserController::class, 'olvideMiContrasenia'])->name('user.olvide_contrasenia');
Route::post('/recuperar_contrasenia',   [UserController::class, 'password_reset_request'])->name('user.password_reset_request');
Route::get('/ganadores',                [UserController::class, 'ganadores'])->name('user.ganadores');
Route::get('/bases',                    [UserController::class, 'bases'])->name('user.bases');
Route::get('/password_reset/{token}',   [UserController::class, 'password_reset'])->name('user.password_reset');
Route::post('/password_reset',          [UserController::class, 'password_reset_complete'])->name('user.password_reset_complete');

Route::post('/save-score', [GameController::class, 'saveScore']);
Route::get('/images', [ImagesController::class, 'getImages']);
