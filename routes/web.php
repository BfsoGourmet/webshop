<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SessionController;
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

Route::post("/cart/add",[SessionController::class, 'add'])->name('add');
//Route::post("/addToCart",'SessionController@insert');
