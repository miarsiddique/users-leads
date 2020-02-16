<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'cache.headers'], function() {

	Route::get('/', ['as' => 'login', 'uses' => 'AuthController@login']);
	Route::post('/login', ['as' => 'authenticate', 'uses' => 'AuthController@authenticate']);
	Route::get('/register', ['as' => 'register', 'uses' => 'UserController@register']);
	Route::post('/register', ['as' => 'registered', 'uses' => 'UserController@store']);

	Route::group(['prefix' => 'dash-board', 'middleware' => 'user-authenticate'], function() {

		Route::group(['prefix' => 'customers'], function() {
			Route::get('/', ['as' => 'customers-list', 'uses' => 'CustomerController@index']);
			Route::get('/add', ['as' => 'customers-add', 'uses' => 'CustomerController@addCustomer']);
			Route::post('/add', [
				'as' => 'customers-store', 'uses' => 'CustomerController@storeCustomer'
			]);
		});

		Route::get('/home', ['as' => 'dashboard', 'uses' => 'DashboardController@board']);
		Route::get('/users-lists', ['as' => 'users-list', 'uses' => 'UserController@index']);

		# logout
		Route::get('/logout', ['as' => 'users-logout', 'uses' => 'AuthController@logout']);
	});
});