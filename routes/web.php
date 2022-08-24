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

Route::get('/','IndexController@awal');
Route::get('/register','AuthController@register');
Route::post('/kirim','AuthController@proses');

Route::get('/data-tables','IndexController@tabel');

//UNTUK DATA CAST
Route::get('/cast','CastController@index');
Route::get('/cast/create','CastController@create');
Route::post('/cast/store','CastController@store');
Route::get('/cast/{cast_id}','CastController@show');
Route::get('/cast/{cast_id}/edit','CastController@edit');
Route::put('/cast/{cast_id}','CastController@update');
Route::delete('/cast/{cast_id}','CastController@destroy');