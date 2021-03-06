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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','LoginController@getLogin')->name('login');
Route::post('/login','LoginController@postLogin');


Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
    Route::get('/','HomeController@getindex')->name('home');
    Route::get('/logout','HomeController@logout')->name('getlogout');
});


//Route::get('/home','HomeController@getindex');
