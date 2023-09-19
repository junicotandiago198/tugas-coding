<?php

use App\Http\Controllers\backsite\PenjualanBarangController;
use Illuminate\Support\Facades\Route;

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
    Route::resource('dashboard-penjualan', PenjualanBarangController::class);
});
