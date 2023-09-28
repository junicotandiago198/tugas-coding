<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backsite\CategoryController;
use App\Http\Controllers\backsite\ProductController;
use App\Http\Controllers\backsite\PenjualanBarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'backsite', 'as' => 'backsite.'], 
    function() {
    // dashboard role = admin
    Route::resource('dashboard-jenis-barang', CategoryController::class);
    Route::resource('dashboard-barang', ProductController::class);
    Route::resource('dashboard-penjualan', PenjualanBarangController::class);
});
