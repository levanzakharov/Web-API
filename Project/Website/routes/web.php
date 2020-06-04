<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'Pages\ProductController@Index')->name('Index');

Route::get('about', function () {
    return view('Pages.about');
})->name('about');;

Auth::routes();
Route::get('/Checkout', function () {
    return view('Pages.Checkout');
})->name('Checkout');;

Route::get('/Admin', 'Pages\AdminPanel@Index')->name('AdminPanel');

Route::get('/Admin/Brand', 'Pages\BrandController@index')->name('AdminPanel_Brand');
Route::post('/Admin/Brand/store', 'Pages\BrandController@store')->name('BrandController_Insert');
Route::get('/Admin/Brand/show', 'Pages\BrandController@show')->name('BrandController_Find');
Route::post('/Admin/Brand/edit', 'Pages\BrandController@edit')->name('BrandController_Update');
Route::post('/Admin/Brand/edit', 'Pages\BrandController@destroy')->name('BrandController_Delete');

Route::get('/Admin/Product', 'Pages\ProductController@indexAdmin')->name('ProductController_Brand');
Route::post('/Admin/Product/store', 'Pages\ProductController@store')->name('ProductController_Insert');
Route::get('/Admin/Product/show', 'Pages\ProductController@show')->name('ProductController_Find');
Route::post('/Admin/Product/edit', 'Pages\ProductController@edit')->name('ProductController_Update');
