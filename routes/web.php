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
// user
Route::get('/', 'App\Http\Controllers\UserController@Index');
Route::get('/product', 'App\Http\Controllers\UserController@Product');
Route::get('/checkout', 'App\Http\Controllers\UserController@Checkout');
Route::get('/login', 'App\Http\Controllers\UserController@Login');

// admin
Route::get('/dashboard', 'App\Http\Controllers\AdminController@Dashboard');
// product
Route::get('/dashboard/product', 'App\Http\Controllers\AdminController@Product');
Route::get('/dashboard/product/add', 'App\Http\Controllers\AdminController@ProductAdd');
Route::get('/dashboard/product/edit', 'App\Http\Controllers\AdminController@ProductEdit');
// category
Route::get('/dashboard/category', 'App\Http\Controllers\AdminController@Category');
Route::get('/dashboard/category/add', 'App\Http\Controllers\AdminController@CategoryAdd');
Route::post('/dashboard/category/addvalidation', 'App\Http\Controllers\AdminController@CategoryAddValidation');
Route::get('/dashboard/category/edit/{id}', 'App\Http\Controllers\AdminController@CategoryEdit');
Route::put('/dashboard/category/editvalidation/{id}', 'App\Http\Controllers\AdminController@CategoryEditValidation');
Route::get('/dashboard/category/hapus/{id}', 'App\Http\Controllers\AdminController@CategoryDelete');
// transaction
Route::get('/dashboard/transaction', 'App\Http\Controllers\AdminController@Transaction');
// user
Route::get('/dashboard/user', 'App\Http\Controllers\AdminController@User');
Route::get('/dashboard/user/add', 'App\Http\Controllers\AdminController@UserAdd');
Route::get('/dashboard/user/edit', 'App\Http\Controllers\AdminController@UserEdit');
