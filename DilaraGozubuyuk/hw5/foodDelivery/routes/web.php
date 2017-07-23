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

Route::get('/insertRestaurant','RestaurantController@insertRestaurant');
Route::get('/insertFood','FoodController@insertFood');
Route::get('/insertUser','UserController@insertUser');
Route::get('/addOrder','OrderController@addOrder');
//Route::get('/listOrders','OrderController@listOrders');
Route::post('/insertOrder','OrderController@insertOrder');
Route::get('/listRestaurants','RestaurantController@listRestaurants');
Route::get('/listFood/{id}','FoodController@listFood');
//Route::get('/listUser','UserController@listUser');
Route::get('/listOrders','OrderController@listOrders');