<?php

use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
//*/
//



Auth::routes();

//Route::get('logout', 'LoginController@logout');
Route::get('/', 'HomeController@index')->name('main');
Route::get('/home', 'HomeController@index')->name('main');
Route::get('/minor', 'HomeController@minor')->name('minor');
Route::resource('customers', 'CustomersController');
//Route::resource('order', 'ProductController')->name('product');
//Route::resource('product', 'ProductController')->name('product');
//Route::resource('product', 'ProductController')->name('product');



