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

Route::get('/', 'GroupController@index');
Route::get('/post', 'PostController@index');
Route::get('/groups', 'GroupController@index');
Route::get('/spy/{id}', 'Auth\LoginController@spy')->name('spy');
Route::post('/groups/{id}/notify', 'GroupController@notify')->name('notify');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
