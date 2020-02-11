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

/*Route::get('/', function () {
    return view('dashboard.pages.leads');
});

Route::get('/users', function () {
    return view('dashboard.pages.users');
});*/

Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('/login', ['as' => 'authenticate', 'uses' => 'AuthController@authenticate']);
Route::get('/register', ['as' => 'register', 'uses' => 'UserController@register']);
Route::post('/register', ['as' => 'registered', 'uses' => 'UserController@store']);

Route::group(['prefix' => 'board'], function() {

	Route::get('/user-leads', ['as' => 'users-leads', 'uses' => 'UserLeadsController@index']);
	Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@board']);
	Route::get('/users-lists', ['as' => 'users-list', 'uses' => 'UserController@index']);
});