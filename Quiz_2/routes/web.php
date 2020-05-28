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

Route::get('/Flights', 'FlightsController@index')->name('Flightshome');
Route::get('/Flights/insertpage',function(){
    return view("Flights.insert");
});
Route::get('/Flights/Updatepage',function(){
    return view("Flights.Update");
});
Route::get('/Flights/Deletepage',function(){
    return view("Flights.Delete");
});
Route::get('/Flights/insert', 'FlightsController@store');
Route::get('/Flights/Update', 'FlightsController@update');
Route::get('/Flights/Delete', 'FlightsController@destroy');


Route::get('/Airports', 'AirportController@index')->name('Airportshome');
Route::get('/Airports/insertpage',function(){
    return view("Airports.insert");
});
Route::get('/Airports/Updatepage',function(){
    return view("Airports.Update");
});
Route::get('/Airports/Deletepage',function(){
    return view("Airports.Delete");
});
Route::get('/Airports/insert', 'AirportController@store');
Route::get('/Airports/Update', 'AirportController@update');
Route::get('/Airports/Delete', 'AirportController@destroy');
