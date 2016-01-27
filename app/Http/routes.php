<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */



/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'HomeController@index');

    Route::get('kategoriat', 'CategoriesController@index');

    Route::get('kategoriat/uusi', 'CategoriesController@create');

    Route::post('kategoriat', 'CategoriesController@store');

    Route::get('kategoriat/{id}', 'CategoriesController@show');




    Route::get('kohteet', 'BusinessesController@index');

    Route::get('kohteet/uusi', 'BusinessesController@create');

    Route::post('kohteet', 'BusinessesController@store');

    Route::get('kohteet/{id}', 'BusinessesController@show');

    Route::get('kohteet/{id}/edit', 'BusinessesController@edit');

    Route::patch('kohteet/{id}', 'BusinessesController@update');
});
