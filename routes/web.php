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
Route::get('hotels','hotelController@index');
Route::get('hotels/create','hotelController@create');
Route::post('hotels','hotelController@store');
Route::get('hotels/{id}/edit','hotelController@edit');
Route::put('hotels/{id}/update','hotelController@update');
Route::delete('hotels/{id}/destroy','hotelController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
