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

Route::get('/', function () {
    return view('/layouts/app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/orders', 'OrderController');
Route::resource('/products', 'ProductsController');
Route::resource('/transactions', 'TransactionsController');
Route::resource('/user', 'UserController');
Route::resource('/suppliers', 'SuppliersController');
Route::resource('/companies', 'CompanyController');
