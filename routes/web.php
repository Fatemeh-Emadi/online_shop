<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('all', [ProductController::class, 'show_all']);
//Route::get('show-product', [HomeController::class, 'show_product']);
Route::post('/product-info',[ProductController::class, "product_info"]);
Route::get('/product/{id}',[ProductController::class, "index"] );
//Route::get('/product/{id}',[InformationController::class, "index"] );
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/cities', [CityController::class, 'get_all']);

Route::get('/admin/products', [ProductController::class, 'get_all']);

Route::get('/admin/users', [UserController::class, 'get_all']);

Route::get('/admin/comments', [CommentController::class, 'get_all']);

Route::get('/admin/orders', [OrderController::class, 'get_all']);

Route::get('/admin/cities/add', [CityController::class, 'add_get']);
Route::post('/admin/cities/add', [CityController::class, 'add_post']);

Route::get('admin/cities/edit/{id}', [CityController::class, 'edit_get']);
Route::post('admin/cities/edit', [CityController::class, 'edit_post']);

Route::get('admin/products/edit/{id}', [ProductController::class, 'edit_get']);
Route::post('admin/products/edit', [ProductController::class, 'edit_post']);

Route::get('admin/cities/delete/{id}', [CityController::class, 'delete']);
Route::get('admin/users/delete/{id}', [UserController::class, 'delete']);
Route::get('admin/products/delete/{id}', [ProductController::class, 'delete']);
Route::get('admin/comments/delete/{id}', [CommentController::class, 'delete']);

Route::get('/admin/products/add', [ProductController::class, 'add_get']);
Route::post('/admin/products/add', [ProductController::class, 'add_post']);

Route::get('/login', [UserController::class, 'login_get']);
Route::post('/login', [UserController::class, 'login_post']);

Route::get('/register', [UserController::class, 'register_get']);
Route::post('/register', [UserController::class, 'register_post']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/profile', [UserController::class, 'profile'])->middleware("auth");
Route::get('/login-admin', [AdminController::class, 'admin_login_get']);
Route::post('/login-admin', [AdminController::class, 'admin_login_post']);