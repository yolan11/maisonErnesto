<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BrandsController;
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

Route::get('/brands', [BrandsController::class, 'index'])->name('Brands');


Route::get('/showroom', function(){
    return view('Showroom');
})->name('Showroom');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::post('/brands/store', [BrandsController::class, 'store'])->name('Brands.store');


require __DIR__.'/auth.php';
