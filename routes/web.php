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
Auth::routes();

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('cors');
Route::get('/', 'HomeController@main')->middleware('cors');

//Route::get('/articles', 'ArticlesController@indexAll');
Route::get('/articles', 'ArticlesController@indexSpec')->middleware('cors');
//Route::get('/articles/{type}', 'ArticlesController@indexSpec');
Route::get('/article/{id}', 'ArticlesController@show')->middleware('cors');
Route::post('/article/store', 'ArticlesController@store')->middleware('cors');

Route::get('/customers', 'CustomersController@index')->middleware('cors');
Route::get('/customer/{id}', 'CustomersController@show')->middleware('cors');
Route::get('/customer/{id}/order_details', 'CustomersController@order_details')->middleware('cors');

Route::get('/orders', 'OrdersController@index')->middleware('cors');
Route::get('/order/{id}', 'OrdersController@show')->middleware('cors');

Route::get('/order_details', 'Order_detailsController@index')->middleware('cors');
Route::get('/order_detail/{id}', 'Order_detailsController@show')->middleware('cors');

Route::get('/order_detail/{id}/order_details', 'Order_detailsController@order_details')->middleware('cors');

