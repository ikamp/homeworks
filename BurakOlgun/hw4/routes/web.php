<?php

Route::get('/', function(){return  0; });
Route::post('/adduser', 'UserController@addNewUser');
Route::get('/restaurants', 'RestaurantController@getRestaurantsAll');
Route::post('/addnewrestaurant', 'RestaurantController@createNewRestaurant');
Route::post('/restaurant/foods', 'RestaurantController@getRestaurantFood');
Route::post('/addnewfood', 'FoodController@createNewFood');
Route::get('/orders', 'OrderController@getOrdersAll');
Route::post('/neworder', 'OrderController@newOrder');

