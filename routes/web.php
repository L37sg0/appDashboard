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

use App\Http\Controllers\FrontEndController;

// Authentication Routes
Auth::routes();

Route::get('/home', 'HomeController@index');

// Basic App Routes
Route::get('/', 'FrontEndController@index');
//Route::get('management', 'FrontEndController@management');
//Route::get('structure', 'FrontEndController@structure');

// Structure Routes
Route::resource('windparks', 'WindparksController');
Route::resource('turbines', 'TurbinesController');
Route::resource('substations', 'SubstationsController');
Route::resource('outlets', 'OutletsController');

// Management Routes

// HR Routes



