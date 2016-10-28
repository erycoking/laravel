<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['middleware'=>'guest','uses'=>'BookController@getIndex']);
Route::get('auth/register','AuthAuthController@getRegister');
Route::get('auth/register', 'AuthAuthController@postRegister');
Route::get('auth/login', 'AuthAuthController@getLogin');
Route::get('auth/login', 'AuthAuthController@postLogin');
Route::get('auth/logout', 'AuthAuthController@getLogout');

Route::get('/cart', array('before'=>'auth.basic', 'as'=>'cart','uses'=>'CartController@getIndex'));
Route::post('/cart/add', array('before'=>'auth.basic','uses'=>'CartController@postAddToCart'));
Route::get('/cart/delete/{id}', array('before'=>'auth.basic', 'as'=>'delete_book_from_cart', 'uses'=>'CartController@getDelete'));

Route::post('/order', array('before'=>'auth.basic', 'uses'=>'OrderController@postOrder'));
Route::get('/user/order', array('before'=>'auth.basic', 'uses'=>'OrderController@getIndex'));
