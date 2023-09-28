<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('Accueil');

Route::get('/brands', function(){
    return view('Brands');
})->name('Brands');

Route::get('/showroom', function(){
    return view('Showroom');
})->name('Showroom');

Route::get('/dashboard', function () {
    return view('adminView.dashboard');
})->name('dashboard')->middleware('auth');



require __DIR__.'/auth.php';
