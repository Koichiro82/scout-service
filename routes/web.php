<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function() {

/**
* プレー動画表示(movies.blade.php)
*/
Route::get('/', 'MoviesController@index');

/**
* 個別ページ表示(users.blade.php)
*/
Route::get('/users/{id}', 'UsersController@show');

/**
* 個別ページ編集画面(usersedit.blade.php)
*/
Route::get('/usersedit/{id}','UsersController@edit');

/**
* 個別ページ編集処理
*/
Route::post('/usersedit/{id}','UsersController@update');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

});

Auth::routes();
