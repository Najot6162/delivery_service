<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  \App\Http\Controllers\OrdersController;

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
Route::put('/update-product-status/{id}',[OrdersController::class,'updateOrderStatus']);
Route::get('/show-delivery-orders', [OrdersController::class, 'showDeliveryOrders']);
Route::get('/show-courier', [OrdersController::class, 'showCourier']);
Route::get('/sold-product-count', [OrdersController::class, 'soldProductCount']);
Route::get('/sold-country-count', [OrdersController::class, 'soldCountryCount']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

