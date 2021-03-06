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

//Route::get('/', function () {
//    return view('welcome');
//    Route::match(['post','get'],'/index','IndexController@index');
//});

Route::group(['namespace' => 'Web', 'middleware' => 'web'], function () {
    Route::match(['post', 'get'], '/index', 'IndexController@index');

});
