<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    header('Location: /rede/inicio'); die;
});

Route::prefix('rede')->name('rede/')->group(static function() {
    Route::prefix('inicio')->name('inicio/')->group(static function() {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/cadastro', [UserController::class, 'create'])->name('create');
        Route::get('/logout', [UserController::class, 'logout'])->name('logout');
        Route::post('/', [UserController::class, 'auth'])->name('auth.user');
        Route::post('/cadastro', [UserController::class, 'store'])->name('store');
    });
});

Route::prefix('rede')->name('rede/')->group(static function() {
    Route::prefix('home')->name('home/')->group(static function() {
        Route::get('/', [PublicacoesController::class, 'index'])->name('indexPubli')->middleware('auth');
        Route::post('/salvar', [PublicacoesController::class, 'store'])->name('store');
    });
});