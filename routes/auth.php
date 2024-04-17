<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'auth'])->name('auth');
    Route::get('/reg', [RegisterController::class, 'index'])->name('reg');
    Route::post('/reg', [RegisterController::class, 'create'])->name('reg');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});
