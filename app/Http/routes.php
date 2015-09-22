<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('user', 'UserController@index');
Route::post('user', 'UserController@index');
Route::get('userEdit/{id}', 'UserController@findById');
Route::post('userUpdate', 'UserController@update');
Route::get('userAdd', function ()    {
	return view('userAdd');
});
Route::post('userAdd', 'UserController@add');
Route::get('userDelete/{id}', 'UserController@deleteById');