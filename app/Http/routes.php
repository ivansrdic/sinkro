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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/onama', ['as' => 'aboutus', 'uses' => 'AboutusController@index']);

Route::get('/ponuda', ['as' => 'search', 'uses' => 'SearchController@index']);
Route::post('/ponuda', ['as' => 'searchPost', 'uses' => 'SearchController@searchPost']);

Route::get('/proizvod/{id}/{name}', ['as' => 'product', 'uses' => 'ProductController@index']);

Route::get('/kontakt', ['as' => 'contact', 'uses' => 'ContactController@index']);
Route::post('/kontakt', ['as' => 'sendMail', 'uses' => 'ContactController@sendMail']);