<?php

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

// route change pages
Route::get('/', 'App\Http\Controllers\UserController@Index');
Route::get('/product', 'App\Http\Controllers\UserController@Product');
Route::get('/checkout', 'App\Http\Controllers\UserController@Checkout');
Route::get('/login', 'App\Http\Controllers\UserController@Login');
