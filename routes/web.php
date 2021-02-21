<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Route
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



use App\Http\Controllers\AuthenticationController;


Route::get('/mon-espace', [\App\Http\Controllers\AuthenticationController::class, 'index']);
Route::post('/mon-espace', [\App\Http\Controllers\AuthenticationController::class, 'login']);


Route::view('contact', 'contact');
Route::view('a-propos', 'a-propos');
Route::view('basket', 'basket');

Route::view('login', 'login');
Route::view('register','register');

use App\Http\Controllers\ClientsController;

#Route::get('/login', [ClientsController::class, 'view']);
#Route::post('/login',[ClientsController::class, 'login']);

use App\Http\Controllers\RegistersController;

Route::get('/register', [RegistersController::class, 'create']);
Route::post('/register',[RegistersController::class, 'store']);

use App\Http\Controllers\ProductsController;
Route::get('/home', [ProductsController::class, 'index']);
Route::post('/home', [ProductsController::class, 'index']);

Route::get('/basket', [ProductsController::class, 'basket']);
Route::post('/basket', [ProductsController::class, 'basket']);

Route::get('/index', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/index', [\App\Http\Controllers\ProductController::class, 'index']);


