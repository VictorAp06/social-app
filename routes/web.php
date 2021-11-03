<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::prefix('rede')->name('rede/')->group(static function() {
    Route::prefix('inicio')->name('inicio/')->group(static function() {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/cadastro', [UserController::class, 'create'])->name('create');
        Route::post('/auth', [UserController::class, 'auth'])->name('auth.user');
        Route::post('/cadastro', [UserController::class, 'store'])->name('store');
    });
});