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

Route::group(['middleware'=>'web'],function(){


// Home Page

Route::get('/', function () {
    return view('welcome');
});

//Create a new user View 
Route::get('/createuser','CreateUserController@index')->name('createuser');

//Create a new user
Route::post('/createuser','CreateUserController@create');






});