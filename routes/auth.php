<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BrandsController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::post('/register/store', [RegisterController::class, 'store'])->name('Register.store');

    Route::get('/register', [RegisterController::class, 'create'])->name('Register.create');

    Route::get('/login', [LoginController::class, 'create'])->name('Login.create');

    Route::post('/login/store', [LoginController::class, 'store'])->name('Login.store')->middleware('throttle:5,1');


});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('Logout');

    Route::delete('/brands/{id}', [BrandsController::class, 'destroy'])->name('Brands.destroy');
    Route::put('/brands/{id}', [BrandsController::class, 'update'])->name('Brands.update');
});
