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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::view('contact', 'contact');
Route::view('a-propos', 'a-propos');
Route::view('home', 'home');
Route::view('basket', 'basket');
Route::view('login', 'login');
Route::view('register','register');

use App\Http\Controllers\ClientsController;

Route::get('/login', [ClientsController::class, 'view']);
Route::post('/login',[ClientsController::class, 'login']);

use App\Http\Controllers\RegistersController;

Route::get('/register', [RegistersController::class, 'create']);
Route::post('/register',[RegistersController::class, 'store']);
