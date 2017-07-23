<?php

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
    return view('welcome');
});

Route::get('/users', 'UserController@listAllUser');
Route::get('/user/{id?}','UserController@getSpecificUser');
Route::get('/user/{id?}/orders','UserController@getUserOrder');

Route::get('/restaurants','RestaurantController@viewRestaurants');
Route::get('/restaurants/{id?}','RestaurantController@getRestaurant');
Route::get('/restaurants/{id?}/foods','RestaurantController@getRestaurantFood');

Route::get('/order/{orderId?}','OrderController@orderItem');
Route::get('/order/{orderId?}/user','OrderController@orderUser');


Route::post('/order/new','OrderController@createOrder');
