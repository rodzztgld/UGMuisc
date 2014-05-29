<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

# LOGIN
Route::get('/login', array('as' => 'login', 'uses' => 'SessionsController@create'));
Route::post('/login', ['as' => 'login', 'uses' => 'SessionsController@store']);
	#Destroy
	Route::get('/logout', array('as' => 'logout', 'uses' => 'SessionsController@destroy'));

# REGISRTER
Route::get('/register', array('as' => 'register', 'uses' => 'AccountController@create'));
Route::post('/register', ['as' => 'register', 'uses' => 'AccountController@store']);

#session start
Route::get('/home', array('as' => 'home', 'uses' => 'PageController@create'));


