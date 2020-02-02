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

Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/contact', 'FrontendController@contact');
Route::get('/information', 'InformationController@index');
Route::post('/information/create', 'InformationController@create')->name('information_create');
Route::get('/information/list', 'InformationController@information_list')->name('information_list');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
