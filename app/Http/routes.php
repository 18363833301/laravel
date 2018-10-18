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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('index/index','IndexController@index');
Route::get('about','AboutController@index');
Route::group(['prefix'=>'index'],function(){
	Route::get('index','IndexController@index');
	Route::get('create','IndexController@create');
	Route::get('store','IndexController@store');
	Route::get('show','IndexController@show');
	Route::get('edit','IndexController@edit');
	Route::get('update','IndexController@update');
	Route::get('destroy','IndexController@destroy');
	
});