<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SeasonsController;

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

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/register', [ProductsController::class, 'register']);
Route::get('/products/{productId}', [ProductsController::class, 'detail']);
Route::post('/products/register', [ProductsController::class, 'create']);
Route::post('/products/{productId}/update', [ProductsController::class, 'update']);
Route::post('/products/{productId}/delete', [ProductsController::class, 'delete']);
Route::post('/products/search', [ProductsController::class, 'search']);

Route::prefix('season')->group(function () {
    Route::post('/products/register', [SeasonsController::class, 'create']);
    Route::post('/products/{productId}/update', [SeasonsController::class, 'update']);
    Route::post('/products/{productId}/delete', [SeasonsController::class, 'delete']);
});