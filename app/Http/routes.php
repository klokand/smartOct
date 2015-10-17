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

Route::get('/', 'PageController@index');
Route::get('contact-us', 'PageController@contactUs');
Route::get('watch-us', 'PageController@watchUs');
Route::get('about-us', 'PageController@aboutUs');
Route::get('privacy-policy', 'PageController@privacyPolicy');

Route::get('move/{name}','ProductController@moves');
Route::get('relax/{name}','ProductController@relaxs');

//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
