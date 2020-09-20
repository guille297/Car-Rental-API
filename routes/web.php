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

//Route::get('/', 'FrontendController@index');

Route::group(['prefix' => 'api'], function () {
    Route::apiResource('cars','CarController');
    Route::apiResource('bookings','BookingController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
