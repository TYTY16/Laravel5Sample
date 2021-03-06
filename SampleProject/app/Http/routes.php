<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('login', function (){
   return view('login');
});

Route::get('register', function (){
    return view('register');
});

Route::post('register', 'UserController@register')->name('register');
Route::post('login', 'UserController@login')->name('login');
