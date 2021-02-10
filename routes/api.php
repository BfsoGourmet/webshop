<?php

use App\Http\Controllers\Api\V1\ApiCategoryController;
use App\Http\Controllers\Api\V1\ApiProductController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('', [ApiCategoryController::class,'index']);
        Route::get('{category}', [ApiCategoryController::class,'show']);
        Route::post('',[ApiCategoryController::class,'store']);
        Route::patch('{category}',[ApiCategoryController::class,'update']);
        Route::delete('{category}',[ApiCategoryController::class,'destroy']);
    });
    Route::prefix('products')->group(function () {
        Route::get('', [ApiProductController::class,'index']);
        Route::get('{product}', [ApiProductController::class,'show']);
        Route::post('',[ApiProductController::class,'store']);
        Route::patch('{product}',[ApiProductController::class,'update']);
        Route::delete('{product}',[ApiProductController::class,'destroy']);
    });
//    Route::prefix('manufacturers')->group(function () {
//        Route::get('', [ApiManufacturerController::class,'index']);
//        Route::get('{manufacturer}', [ApiManufacturerController::class,'show']);
//        Route::post('',[ApiManufacturerController::class,'store']);
//        Route::patch('{manufacturer}',[ApiManufacturerController::class,'update']);
//        Route::delete('{manufacturer}',[ApiManufacturerController::class,'destroy']);
//    });
});


