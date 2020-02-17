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
// FrontendController
Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/contact', 'FrontendController@contact');
// FrontendController END

// InformationController
Route::get('/information', 'InformationController@index');
Route::post('/information/create', 'InformationController@create')->name('information_create');
Route::get('/information/list', 'InformationController@information_list')->name('information_list');
Route::get('/information/list/{user_id}', 'InformationController@individual_user')->name('individual_user');
Route::post('/information/update', 'InformationController@information_update')->name('information_update');
Route::get('/information/delete/{user_id}', 'InformationController@information_delete')->name('information_delete');
// InformationController END



// ProductController
Route::get('/product', 'ProductController@index')->name('add_product');
Route::post('/product/submit', 'ProductController@product_insert')->name('product_submit');
Route::get('/product/list', 'ProductController@product_list')->name('product_list');
Route::get('/product/list/{product_id}','ProductController@product_edit')->name('product_edit');
Route::post('/product/update', 'ProductController@product_update')->name('product_update');
Route::get('/product/delete/{product_id}', 'ProductController@product_delete')->name('product_delete');
Route::get('/product/category', 'ProductController@product_category')->name('product_category');
Route::post('/product/categoryadd', 'ProductController@add_category')->name('add_category');
Route::get('/product/categorydelete/{category_id}', 'ProductController@delete_category')->name('category_delete');
Route::get('/product/restore/{product_id}', 'ProductController@product_restore')->name('product_restore');
Route::get('/product/hardDelete/{product_id}', 'ProductController@product_hDelete')->name('product_hDelete');
//ProductController END





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
