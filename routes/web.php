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

Route::get('/home', function () {
    echo("halo semua!");
});

Route::get('/weather', 'WeatherController@home');
Route::get('/weather/forecast', 'WeatherController@forecast');
Route::get('/weather/recent', 'WeatherController@recent');

Route::post('/weather/get_forecast', 'WeatherController@get_forecast');
