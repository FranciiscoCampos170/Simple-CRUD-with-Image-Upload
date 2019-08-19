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


Route::get('/','ProductsController@index')->name('product-index');
Route::get('/create', 'ProductsController@create')->name('product-create');
Route::post('/store', 'ProductsController@store')->name('product-store');
Route::get('/show/{id}', 'ProductsController@show')->name('product-show');
Route::get('/edit/{id}/', 'ProductsController@edit')->name('product-edit');
Route::put('/update/{id}/', 'ProductsController@update')->name('product-update');
Route::delete('/destroy/{id}/', 'ProductsController@destroy')->name('product-destroy');