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

Auth::routes([
    'register' => false,
    'logout' => false
    ]);
Route::post('/signout', ['as' => 'auth.signout', 'uses' => 'App\Http\Controllers\Auth\LoginController@signout']);

// route change pages
// user

Route::get('/', 'App\Http\Controllers\FrontController@Index');
Route::get('/product', 'App\Http\Controllers\FrontController@Product');
Route::get('/productcategory/{id}', 'App\Http\Controllers\FrontController@ProductBy');
Route::get('/product/{id}', 'App\Http\Controllers\FrontController@CategoryProduct');
Route::get('/search', 'App\Http\Controllers\FrontController@Search');
Route::get('/checkout', 'App\Http\Controllers\FrontController@cart');

// Route::get('/checkout/{id}', 'App\Http\Controllers\FrontController@cart')
Route::get('/checkout/plus', 'App\Http\Controllers\FrontController@plus');
Route::get('/checkout/minus', 'App\Http\Controllers\FrontController@minus');
Route::get('/checkout/delete', 'App\Http\Controllers\FrontController@delete');
Route::post('/order', 'App\Http\Controllers\FrontController@checkout')->name('order');
// Route::get('/login', 'App\Http\Controllers\UserController@Login');

// admin
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

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
Route::delete('/dashboard/category/hapus/{id}', 'App\Http\Controllers\KategoriController@CategoryDelete')->name('category.delete');

// transaction
Route::get('/dashboard/history', 'App\Http\Controllers\HistoryController@History');
Route::delete('/dashboard/history/hapus/{id}', 'App\Http\Controllers\HistoryController@HistoryDelete')->name('history.delete');

// user
Route::get('/dashboard/user', 'App\Http\Controllers\UserController@User');
Route::get('/dashboard/user/add', 'App\Http\Controllers\UserController@UserAdd');
Route::post('/dashboard/user/addvalidation', 'App\Http\Controllers\UserController@UserAddValidation');
// Route::get('/dashboard/user/edit/{id}', 'App\Http\Controllers\UserController@UserEdit');
// Route::put('/dashboard/user/editvalidation/{id}', 'App\Http\Controllers\UserController@UserEditValidation');
Route::delete('/dashboard/user/hapus/{id}', 'App\Http\Controllers\UserController@UserDelete')->name('user.delete');

// dite settings
Route::get('/dashboard/settings', 'App\Http\Controllers\SiteSettingsController@index');
Route::get('/dashboard/settings/edit/{id}', 'App\Http\Controllers\SiteSettingsController@SiteSettings');
Route::put('/dashboard/settings/editvalidation/{id}', 'App\Http\Controllers\SiteSettingsController@SiteEditValidation');


