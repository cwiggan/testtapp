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
Route::get('/admin', 'HomeController@admin');
Route::get('/approved', 'HomeController@approved');
Route::get('/unapproved', 'HomeController@unapproved');
Route::get('/user/approve/{user}', 'HomeController@approveUser');
Route::get('/user/unapprove/{user}', 'HomeController@unapproveUser');