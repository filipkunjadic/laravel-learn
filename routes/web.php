<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/products','ProductController@index')->name('products.list');

// Example of edit product page where 'id' is a required route param
Route::get('/product/{id}/edit','ProductController@edit')->name('product.edit');

// Example of post route, example edit product action
Route::post('/product/edit/action','ProductController@editAction')->name('product.edit.action');

Route::get('/product/create','ProductController@create')->name('product.create');
Route::post('/product/create/action','ProductController@createAction')->name('product.create.action');
