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
    return view('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/buat','buatController@index');
Route::get('/login','LoginController@login');
Route::get('/register','LoginController@register');

Route::get('/home','HomeController@home');
Route::get('/pertama','HomeController@pertama');
Route::get('/kedua','HomeController@kedua');
Route::get('/ketiga','HomeController@ketiga');