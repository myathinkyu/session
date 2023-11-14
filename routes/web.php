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

Route::get('/', 'App\Http\Controllers\SessionController@index');

Route::get('setSingle', 'App\Http\Controllers\SessionController@setSingle');
Route::get('getSingle', 'App\Http\Controllers\SessionController@getSingle');

Route::get('setMultiple', 'App\Http\Controllers\SessionController@setMultiple');
Route::get('getMultiple', 'App\Http\Controllers\SessionController@getMultiple');

Route::get('deleteSession', 'App\Http\Controllers\SessionController@deletesession');