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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/horses/{horse}', 'HorsesController@show')->where('horse', '[0-9]+');
Route::get('/horses/new', 'HorsesController@create')->middleware('auth');
Route::post('/horses', 'HorsesController@store')->middleware('auth')->name('horses.store');
Route::get('/horses', 'HorsesController@index')->middleware('auth')->name('horses.index');
Route::delete('/horses/{horse}', 'HorsesController@destroy')->middleware('auth');
Route::post('/horses/{horse}', 'HorsesController@update')->middleware('auth');
