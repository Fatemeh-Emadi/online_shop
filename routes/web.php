<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InformationController;
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

Route::get('/', [ProductController::class, 'get_all']);
Route::get('all', [ProductController::class, 'show_all']);
//Route::get('show-product', [HomeController::class, 'show_product']);
Route::post('/product-info',[ProductController::class, "product_info"]);
Route::get('/product/{id}',[ProductController::class, "index"] );
//Route::get('/product/{id}',[InformationController::class, "index"] );