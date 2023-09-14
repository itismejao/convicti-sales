<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BranchsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SellersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [ AuthController::class, 'login' ]);

Route::middleware('auth:sanctum')->group(function() {
    Route::prefix('sales')->controller(SalesController::class)->group(function () {
        Route::get('/', [ SalesController::class, 'index' ]);
        Route::post('/', [ SalesController::class, 'store' ]);
        Route::get('/{id}', [ SalesController::class, 'show' ]);
    });

    Route::prefix('branchs')->controller(BranchsController::class)->group(function () {
        Route::get('/map', [ BranchsController::class, 'map']);
    });

    Route::prefix('sellers')->controller(SellersController::class)->group(function () {
        Route::get('/', [ SellersController::class, 'index']);
    });

    

});