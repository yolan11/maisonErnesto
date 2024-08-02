<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdvertisementController;
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
    Route::get('/',  [AdvertisementController::class, 'index'])->name('Home');
    Route::get('/Brands', [BrandsController::class, 'index'])->name('Brands');
    Route::get('/brands/categorie/entreprise', [BrandsController::class, 'showBrandCompagny'])
        ->name('brandsPageCompagny');
    Route::get('/brands/categorie/particulier', [BrandsController::class, 'showBrandCustomer'])
        ->name('brandsPageCustomer');
    Route::get('/Showroom', function(){return view('Showroom');})
        ->name('Showroom');
});

Route::middleware('auth')->group(function () {
    //Dashboard routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard');
    Route::get('/dashboard/user', [DashboardController::class, 'showAdminUser'])->name('DashboardUser');
    Route::get('/dashboard/brand', [DashboardController::class, 'showAdminBrand'])
        ->name('DashboardBrand');
    Route::get('/dashboard/advertisement', [DashboardController::class, 'showAdminAdvertisement'])
        ->name('DashboardAdvertisement');
    Route::get('/dashboard/brand/error', [DashboardController::class, 'showAdminBrandError'])
        ->name('DashboardBrandError');
    Route::get('/dashboard/ad/error', [DashboardController::class, 'showAdminAdvertisementError'])
        ->name('DashboardAdvertisementError');


    //Brand routes
    Route::post('/brands/store', [BrandsController::class, 'store'])->name('Brand.store');
    Route::delete('/brands/destroy/{id}', [BrandsController::class, 'destroy'])->name('Brand.destroy');
    Route::put('/brands/update/{id}', [BrandsController::class, 'update'])->name('Brand.update');

    //Ad routes
    Route::post('/Advertisements/store', [AdvertisementController::class, 'store'])->name('Advertisement.store');
    Route::delete('/Advertisement/destroy/{id}', [AdvertisementController::class, 'destroy'])->name('Advertisement.destroy');


    //User routes
    Route::delete('/user/destroy/{id}', [LoginController::class, 'destroy'])->name('User.destroy');
    Route::put('/user/update/{id}', [LoginController::class, 'update'])->name('User.update');

});
require __DIR__.'/auth.php';
