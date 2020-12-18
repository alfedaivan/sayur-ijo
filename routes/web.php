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
Route::get('/dashboard/product', 'App\Http\Controllers\ProdukController@index');
Route::get('/dashboard/product/add', 'App\Http\Controllers\ProdukController@ProductAdd');
Route::post('/dashboard/product/addvalidation', 'App\Http\Controllers\ProdukController@ProductAddValidation');
Route::get('/dashboard/product/edit/{id}', 'App\Http\Controllers\ProdukController@ProductEdit');
Route::put('/dashboard/product/editvalidation/{id}', 'App\Http\Controllers\ProdukController@ProductEditValidation');
Route::delete('/dashboard/product/hapus/{id}', 'App\Http\Controllers\ProdukController@ProductDelete')->name('product.delete');
// category
Route::get('/dashboard/category', 'App\Http\Controllers\KategoriController@Category');
Route::get('/dashboard/category/add', 'App\Http\Controllers\KategoriController@CategoryAdd');
Route::post('/dashboard/category/addvalidation', 'App\Http\Controllers\KategoriController@CategoryAddValidation');
Route::get('/dashboard/category/edit/{id}', 'App\Http\Controllers\KategoriController@CategoryEdit');
Route::put('/dashboard/category/editvalidation/{id}', 'App\Http\Controllers\KategoriController@CategoryEditValidation');
// Route::get('/dashboard/category/hapus/{id}', 'App\Http\Controllers\AdminController@CategoryDelete');

Route::delete('/dashboard/category/hapus/{id}', 'App\Http\Controllers\KategoriController@CategoryDelete')->name('category.delete');

// transaction
Route::get('/dashboard/transaction', 'App\Http\Controllers\AdminController@Transaction');
// user
Route::get('/dashboard/user', 'App\Http\Controllers\AdminController@User');
Route::get('/dashboard/user/add', 'App\Http\Controllers\AdminController@UserAdd');
Route::get('/dashboard/user/edit', 'App\Http\Controllers\AdminController@UserEdit');
