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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create','HomeController@createUser')->name('create.user');
Route::get('/user','HomeController@viewAllUser')->name('index.user');
Route::get('/user/{user}','HomeController@editUser')->name('edit.user');
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::delete('/user/{user}','HomeController@deleteUser')->name('delete.user');
Route::get('/apistatus','HomeController@apistatus')->name('api.status');
