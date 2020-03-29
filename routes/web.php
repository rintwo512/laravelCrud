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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index');
Route::get('/data', 'MydataController@index');
Route::post('/data', 'MydataController@store');
Route::get('/data/delete/{id}', 'MydataController@destroy');
Route::get('/data/edit/{id}', 'MydataController@edit');
Route::post('/data/update/{id}', 'MydataController@update');
Route::get('/data/detail/{id}', 'MydataController@show');
