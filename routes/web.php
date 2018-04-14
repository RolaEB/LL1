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

Route::get('/', function () {
    return view('index');
});
 Route::get('posts','PostController@index');

 Route::get('posts/create','PostController@create');
 Route::post('posts','PostController@store');
 Route::get('posts/{post}','PostController@show');
 Route::get ('posts/{post}/edit','PostController@edit');
 Route::put('posts/{post}','PostController@update');
 Route::post('posts/{post}','PostController@delete');