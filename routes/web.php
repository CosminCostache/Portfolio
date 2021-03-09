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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/terms', 'App\Http\Controllers\PagesController@terms');
Route::get('/privacy', 'App\Http\Controllers\PagesController@policy');
Route::get('/cookies', 'App\Http\Controllers\PagesController@cookies');
Route::post('/submit', 'App\Http\Controllers\ContactFormController@submit');
