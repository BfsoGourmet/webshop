<?php

use App\Http\Controllers\CheckoutController;
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
})->name('welcome');

Route::get('/checkout', [CheckoutController::class, 'create']);

Route::post('/checkout', [CheckoutController::class, 'store']);

Route::get('/shop', [\App\Http\Controllers\ProductController::class, "index"]
)->name('shop_index');;

Route::post("/addToCart",'SessionController@insert');
Route::post("/addToCart",'SessionController@insert');
