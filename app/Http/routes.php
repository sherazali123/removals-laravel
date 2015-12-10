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


Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/quotation', 'Page\QuatationController@index');

Route::get('box-rental', 'Page\BoxRentalController@index');

Route::resource('classified-ad', 'Page\ClassifiedAdController');

Route::get('classified-ad/view/{classic_ad_slug}/{user_classic_ad_slug}', 'Page\ClassifiedAdController@showSingleAd');

Route::get('blog', 'Blog\IndexController@index');

Route::get('about', 'Page\AboutController@index');

Route::get('/footer', function () {
    return view('application.footer');
});

// api
Route::group(['prefix' => 'api'], function()
{
	// version 1 (v1)
	Route::group(['prefix' => 'v1'], function()
	{
		Route::resource('quotation', 'Api\v1\QuatationController');
		Route::resource('box-rental', 'Api\v1\BoxRentalController');
		Route::post('box-rental-email', 'Api\v1\BoxRentalController@email');

		Route::resource('classified-ad', 'Api\v1\ClassifiedAdController');
	});
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
