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

$apiRoute = "/api/";

Route::resource("$apiRoute/restaurant", 'RestaurantController');

Route::group(['middleware' => 'auth'], function() use($apiRoute) {
    Route::resource("$apiRoute/order", 'OrderController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');
