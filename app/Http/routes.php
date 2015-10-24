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

Route::get('/', 'Page\QuatationController@index');

Route::get('home', 'Page\QuationController@index');

Route::get('box-rental', 'Page\BoxRentalController@index');

Route::resource('classified-ad', 'Page\ClassifiedAdController');

Route::get('blog', 'Blog\IndexController@index');

Route::get('about', 'Page\AboutController@index');

// api
Route::group(['prefix' => 'api'], function()
{
	// version 1 (v1)
	Route::group(['prefix' => 'v1'], function()
	{
		Route::resource('quation', 'Api\v1\QuatationController');
		Route::resource('box-rental', 'Api\v1\BoxRentalController');
		Route::resource('classified-ad', 'Api\v1\ClassifiedAdController');
	});	
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
