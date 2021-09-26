<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/places','PlacesContoller@index')->name('places.index');
Route::POST('/places/create','PlacesContoller@store')->name('places.store');

Route::get('/cities','PlacesContoller@cities')->name('cities.index');
Route::get('/districts/create','PlacesContoller@districts')->name('districts.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
