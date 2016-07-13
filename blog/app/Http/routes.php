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

Route::group(['middleware' => ['web']], function () {
    // your routes here
		Route::get('/', 'BlogController@index');
		Route::get('blog/show/{id}', 'BlogController@showBlog');
		Route::post('/login', 'Auth\AuthController@postLogin');
		//Route::get('/blog/delete/{id}', 'BlogController@destroy');

});	
	
	

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/delete/{id}', 'BlogController@destroy');
Route::get('/edit/{id}', 'BlogController@edit');
Route::get('/show/{id}', 'BlogController@show');
Route::get('/add', 'BlogController@create');
//Route::post('/add', 'BlogController@save');
Route::post('/add', [
    'as' => 'blog.save', 'uses' => 'BlogController@save'
]);

Route::post('/edit/{id}', [
    'as' => 'blog.update', 'uses' => 'BlogController@update'
]);






