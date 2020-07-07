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

Route::group(['namespace' => 'Admin'], function (){
    Route::group(['prefix' => 'login'], function (){
        Route::get('login', 'LoginController@getLogin');
    });
});

Route::resource('products', 'Backend\ProductController');


Route::get('news', 'Admin\NewsController@insert');
Route::get('news/select', 'Admin\NewsController@select');
Route::get('news/delete', 'Admin\NewsController@delete');
