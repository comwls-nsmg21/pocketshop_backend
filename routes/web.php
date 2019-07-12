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

Route::middleware(['auth'])->group(function (){
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/minor', 'HomeController@minor');
    Route::resource('customers', 'CustomersController');
    Route::resource('system', 'SystemController');

//    Route::get('products', 'ProductsController');
//    Route::get('orders', 'OrdersController');

});

//Route::get('logout', 'LoginController@logout');

//Route::resource('order', 'ProductController');
//Route::resource('product', 'ProductController');
//Route::resource('product', 'ProductController');



