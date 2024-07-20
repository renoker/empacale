<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ParticipationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',                         [UserController::class, 'home'])->name('user.home');
Route::get('/registro',                 [UserController::class, 'registro'])->name('user.registro');
Route::post('/registro',                [UserController::class, 'sign_in'])->name('user.sign_in');
Route::get('/login',                    [UserController::class, 'login_form'])->name('login');
Route::post('/login',                   [UserController::class, 'login'])->name('user.login');
Route::get('/recuperar_contrasenia',    [UserController::class, 'olvideMiContrasenia'])->name('user.olvide_contrasenia');
Route::post('/recuperar_contrasenia',   [UserController::class, 'password_reset_request'])->name('user.password_reset_request');
Route::get('/ganadores',                [UserController::class, 'ganadores'])->name('user.ganadores');
Route::get('/faqs',                     [UserController::class, 'faqs'])->name('user.faqs');
Route::get('/bases',                    [UserController::class, 'bases'])->name('user.bases');
Route::get('/password_reset/{token}',   [UserController::class, 'password_reset'])->name('user.password_reset');
Route::post('/password_reset',          [UserController::class, 'password_reset_complete'])->name('user.password_reset_complete');

Route::group(['middleware' => ['auth:user']], function () {
    Route::get('/thank_you_page',       [UserController::class, 'thank_you_page'])->name('user.thank_you_page');
    Route::get('/gracias_por_participar', [UserController::class, 'gracias_por_participar'])->name('user.gracias_por_participar');
    Route::get('/logout',               [UserController::class, 'logout'])->name('user.logout');
    Route::get('/mi_perfil',            [UserController::class, 'profile'])->name('user.profile');
    Route::get('/codigo_lote',          [ParticipationController::class, 'create'])->name('participation.create');
    Route::post('/codigo_lote',         [ParticipationController::class, 'store'])->name('participation.store');
    Route::get('/game',                 [GameController::class, 'index'])->name('game.index');
    // API
    Route::post('/start',                   [GameController::class, 'game_store_start']);
    Route::post('/end',                     [GameController::class, 'game_store_end']);
    Route::post('/prod',                    [GameController::class, 'addProductos']);
    Route::get('/images',                   [ImagesController::class, 'getImages']);
});


/*
|--------------------------------------------------------------------------
| PANEL DE ADMNISTRACION
|--------------------------------------------------------------------------
*/
Route::get('/backoffice',           [AdminController::class, 'index'])->name('admin.index');
Route::post('/backoffice/login',    [AdminController::class, 'login'])->name('admin.login');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/backoffice/logout',                                                [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/backoffice/participation/participation_day/{participation_day}',   [ParticipationController::class, 'index'])->name('participation.index');
    Route::get('/backoffice/participation/{participation}',                         [ParticipationController::class, 'show'])->name('participation.show');
    Route::get('/backoffice/participation/{participation_day}/export',              [ParticipationController::class, 'export'])->name('participation.export');

    Route::get('/backoffice/users/{week}',                                          [UserController::class, 'index'])->name('users.index');
    Route::get('/backoffice/users/{week}/export',                                   [UserController::class, 'export'])->name('users.export');
});
