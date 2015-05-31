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

/* Routes for front end pages */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/testimonials', 'HomeController@testimonials');
Route::get('/latestnews', 'HomeController@latestnews');