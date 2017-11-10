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
    return view('welcome');
});
Route::get('/alvaro', function () {
    /*return 'oy una ruta creada alvaro';*/
    return view('login');
});
Route::get('/vista', function () {
    /*return 'oy una ruta creada alvaro';*/
    return view('login');
});
Route::get('/resultado', function () {
    /*return 'oy una ruta creada alvaro';*/
    return view('tabla');
});
