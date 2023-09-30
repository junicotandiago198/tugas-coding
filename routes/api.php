<?php

use App\Http\Controllers\Api\PenjualanController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products/{id}', [ProductController::class, 'pembelian']);
Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/search', [PenjualanController::class, 'search']);