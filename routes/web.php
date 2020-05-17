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
Route::get('/', 'IndexController@index');
Route::get('/product', 'ProductController@index');
Route::get('/product/detail/{id}', 'ProductController@detail');
Route::get('/contact', 'ContactController@index');
Route::get('/aboutus', 'AboutusController@index');
Route::get('/articles', 'ArticleController@index');
Route::get('/bankdetails', 'BankdetailController@index');
Route::get('/certificates', 'CertificateController@index');
Route::get('/admin/product', 'Admin\ProductController@index')->name('product.index');
Route::get('/admin/product/create', 'Admin\ProductController@create');
Route::post('/admin/product/save', 'Admin\ProductController@store');
Route::get('/admin/product/all', 'Admin\ProductController@index');
Route::get('/admin/product/show/{id}', 'Admin\ProductController@show');
Route::get('/admin/product/edit/{id}', 'Admin\ProductController@edit');
Route::post('/admin/product/update/{id}', 'Admin\ProductController@update');
Route::get('/admin/product/delete/{id}', 'Admin\ProductController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
