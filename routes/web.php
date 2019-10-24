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

Route::get('/', 'HomeController@getIndex');
Route::get('/detail/{id}', 'HomeController@geDetail');
Route::get('store/{id}/{name}', 'HomeController@getStore');
Route::get('category/{name}', 'HomeController@getProductBycat');

