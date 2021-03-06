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

/*Route::get('/', function () {
	//return 'helloworld!';
    return view('welcome');
});*/

/*Route::get('user/{name?}', function($name = 'lihongsheng') {
	return 'hello '.$name;
});*/

Route::get('/','ArticleController@index');
Route::get('articles/{id}','ArticleController@show');
Route::get('article/create','ArticleController@create');
Route::post('article/store','ArticleController@store');
Route::get('article/delete/{id}','ArticleController@destroy');
Route::get('article/edit/{id}','ArticleController@edit');
Route::post('article/update','ArticleController@update');