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

Auth::routes();

Route::get('/Admin', 'AdminController@index')->name('Admin_Index');
Route::post('/Admin/Company/Insert', 'CompanyController@create')->name('Admin_Company_Insert');


Route::get('/Company', 'VacancyController@index')->name('Company_index');
Route::post('/Company/Insert', 'VacancyController@store')->name('Company_Insert');
Route::post('/Company/Update', 'VacancyController@update')->name('Company_Update');
Route::get('/Company/Delete', 'VacancyController@destroy')->name('Company_Delete');
