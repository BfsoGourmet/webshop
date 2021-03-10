<?php

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
})->name('welcome');;
Route::get('/shop', [\App\Http\Controllers\ProductController::class, "index"]
)->name('shop_index');;

Route::resources(
    [
        'categories' => CategoryController::class,
    ]
);

