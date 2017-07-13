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

Route::get('/user','UserController@login');
Route::get('/restaurants','RestaurantController@list');
Route::get('/foods/{restaurantId}','FoodController@list');
Route::get('/orders/{userId}','OrderController@list');
Route::post('/orders/{userId}/create', 'OrderController@create');