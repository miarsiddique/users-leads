<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('/login', ['as' => 'authenticate', 'uses' => 'AuthController@authenticate']);
Route::get('/register', ['as' => 'register', 'uses' => 'UserController@register']);
Route::post('/register', ['as' => 'registered', 'uses' => 'UserController@store']);

Route::group(['prefix' => 'dash-board', 'middleware' => ['user-authenticate', 'cache.headers']], function() {

	Route::get('/', ['as' => 'users-leads', 'uses' => 'UserLeadsController@index']);
	Route::get('/home', ['as' => 'dashboard', 'uses' => 'DashboardController@board']);
	Route::get('/users-lists', ['as' => 'users-list', 'uses' => 'UserController@index']);

	# logout
	Route::get('/logout', ['as' => 'users-logout', 'uses' => 'AuthController@logout']);
});