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

Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/', 'HomeController@main');

//Route::get('/articles', 'ArticlesController@indexAll');
Route::get('/articles', 'ArticlesController@indexSpec');
//Route::get('/articles/{type}', 'ArticlesController@indexSpec');
Route::get('/article/{id}', 'ArticlesController@show');
Route::post('/article/store', 'ArticlesController@store');

Route::get('/customers', 'CustomersController@index');
Route::get('/customer/{id}', 'CustomersController@show');
Route::get('/customer/{id}/order_details', 'CustomersController@order_details');

Route::get('/orders', 'OrdersController@index');
Route::get('/order/{id}', 'OrdersController@show');


Route::get('/order_details', 'Order_detailsController@index');
Route::get('/order_detail/{id}', 'Order_detailsController@show');

Route::get('/order_detail/{id}/order_details', 'Order_detailsController@order_details');

Auth::routes();
