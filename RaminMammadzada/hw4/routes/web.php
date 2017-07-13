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


Route::get('/addUser', 'UserController@addUser');
Route::get('/listUser', 'UserController@listUser');

Route::get('/addRestaurant', 'RestaurantController@addRestaurant');
Route::get('/listRestaurant', 'RestaurantController@listRestaurant');

Route::get('/addFood', 'FoodController@addFood');
Route::get('/listFood', 'FoodController@listFood');

Route::get('/addOrder', 'OrderController@addOrder');
Route::get('/orderUser', 'OrderController@orderUser');
Route::get('/listOrder', 'OrderController@listOrder');