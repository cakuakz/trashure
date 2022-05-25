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

<<<<<<< Updated upstream
Route::get('/layout/layout','HomeController@index');
=======

Route::get('/dashboard/pengguna','HomeController@index');

Route::get('dbmitra', 'DBMitraController@displaydb');

>>>>>>> Stashed changes
