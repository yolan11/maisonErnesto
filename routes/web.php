<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
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

Route::middleware('guest')->group(function () {
    Route::get('/', function () {return view('welcome');})->name('Home');
    Route::get('/brands', [BrandsController::class, 'index'])->name('Brand');
    Route::get('/brands/categorie/entreprise', [BrandsController::class, 'showBrandCompagny'])
        ->name('brandsPageCompagny');
    Route::get('/brands/categorie/particulier', [BrandsController::class, 'showBrandCustomer'])
        ->name('brandsPageCustomer');
    Route::get('/showroom', function(){return view('Showroom');})
        ->name('Showroom');
});

Route::middleware('auth')->group(function () {
    //Dashboard routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard');
    Route::get('/dashboard/user', [DashboardController::class, 'showAdminUser'])->name('DashboardUser');
    Route::get('/dashboard/brand', [DashboardController::class, 'showAdminBrand'])
        ->name('DashboardBrand');

    //Brand routes
    Route::post('/brands/store', [BrandsController::class, 'store'])->name('Brand.store');
    Route::delete('/brands/destroy/{id}', [BrandsController::class, 'destroy'])->name('Brand.destroy');
    Route::put('/brands/update/{id}', [BrandsController::class, 'update'])->name('Brand.update');

    //User routes
    Route::delete('/user/destroy/{id}', [LoginController::class, 'destroy'])->name('User.destroy');

});
require __DIR__.'/auth.php';
