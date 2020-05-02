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

Route::get('/', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::post('/product/save', 'ProductController@store');
Route::get('/product/all', 'ProductController@index');
Route::get('/product/show/{id}', 'ProductController@show');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::post('/product/update/{id}', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@destroy');