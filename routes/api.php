<?php
use App\Http\Controllers\Api\V1\ApiOrderController;
use App\Http\Controllers\Api\V1\ApiCategoryController;
use App\Http\Controllers\Api\V1\ApiProductController;
use App\Http\Controllers\Api\V1\ApiManufacturerController;
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
    Route::prefix('orders')->group(function () {
        Route::get('', [ApiOrderController::class,'index']);
        Route::get('{order_id}', [ApiOrderController::class,'show']);
    });
    Route::prefix('categories')->group(function () {
        Route::get('', [ApiCategoryController::class,'index']);
        Route::get('{uid}', [ApiCategoryController::class,'show']);
        Route::post('',[ApiCategoryController::class,'store']);
        Route::patch('{uid}',[ApiCategoryController::class,'update']);
        Route::delete('{uid}',[ApiCategoryController::class,'destroy']);
    });
    Route::prefix('products')->group(function () {
        Route::get('', [ApiProductController::class,'index']);
        Route::get('{article_number}', [ApiProductController::class,'show']); // TODO: change product to artikelnummer
        Route::post('',[ApiProductController::class,'store']);
        Route::patch('{article_number}',[ApiProductController::class,'update']);
        Route::delete('{article_number}',[ApiProductController::class,'destroy']);
    });
    Route::prefix('manufacturers')->group(function () {
        Route::post('',[ApiManufacturerController::class,'store']);
    });
});
