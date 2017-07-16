<?php

Route::get('/', function(){return  0; });
Route::post('/adduser', 'UserController@addNewUser');
Route::get('/restaurant/all', 'RestaurantController@getRestaurantsAll');
Route::post('/restaurant/new', 'RestaurantController@createNewRestaurant');
Route::post('/restaurant/foods', 'RestaurantController@getRestaurantFood');
Route::get('/food/all' , 'FoodController@getAllFoods');
Route::post('/addnewfood', 'FoodController@createNewFood');
Route::get('/orders', 'OrderController@getOrdersAll');
Route::get('/orders/myorders', 'OrderController@getMyOrders');
Route::post('/neworder', 'OrderController@newOrder');

