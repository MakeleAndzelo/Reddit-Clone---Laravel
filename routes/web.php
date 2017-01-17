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

Route::get('/', 'LinksController@index');

Route::resource('links', 'LinksController');

Auth::routes();

Route::post('links/{link}/comments', 'CommentsController@store');

Route::get('/logout', 'UsersController@logout');
