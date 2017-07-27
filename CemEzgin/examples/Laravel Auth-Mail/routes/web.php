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


/*Route::get('/v1/test/{name?}/{phone?}', 'HomeController@index');
Route::get('/persons', 'HomeController@persons');
Route::get('/person-insert', 'HomeController@insert');
Route::get('/person-save/{id?}', 'HomeController@save');
Route::get('/person-delete/{id}', 'HomeController@delete');
Route::post('/personsave', 'HomeController@savePerson');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/restaurant/{name}', '\App\Modules\Restaurant\Controller@restaurantList');
