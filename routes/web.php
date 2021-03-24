<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CategoryController;
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

Route::get('/cart', [\App\Http\Controllers\CartController::class, "cart"])->name('cart');;
Route::post("/cart",[SessionController::class, 'getCart'])->name('getCart');
Route::post("/cart/add",[SessionController::class, 'add'])->name('addOne');
Route::post("/cart/remove",[SessionController::class, 'remove'])->name('removeOne');
Route::post("/cart/delete",[SessionController::class, 'delete'])->name('delete');
Route::post("/cart/empty",[SessionController::class, 'removeAll'])->name('empty');
Route::post("/cart/empty",[SessionController::class, 'removeAll'])->name('empty');


Route::resources(
    [
        'categories' => CategoryController::class,
    ]
);

