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
    return view('index');
});

Route::get('/tentang', 'AboutController@index');
Route::get('/daftar', 'RegistrationController@index');
Route::get('/jaminan', 'GuaranteeController@index');
Route::get('/kontak', 'ContactController@index');
Route::get('/feluni-ui', 'FeluniController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
