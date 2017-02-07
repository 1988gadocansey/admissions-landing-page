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
    })->middleware('guest');
    
     Route::get('/send', function () {
        return view('code');
    })->middleware('guest');
    
   Route::post('foreign/validate/code', 'HomeController@index');
   