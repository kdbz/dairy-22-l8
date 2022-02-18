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
    return view('dashboard');
});

Route::get('home', function () {
    return view('dashboard');
});

//Role Routes
Route::get('roles','App\Http\Controllers\RoleController@all');
Route::get('role/add','App\Http\Controllers\RoleController@add');
Route::post('role/save','App\Http\Controllers\RoleController@save');
Route::get('role/delete/{id}',
'App\Http\Controllers\RoleController@delete');

//User Routes
Route::get('users','App\Http\Controllers\UserController@all');
Route::get('user/add','App\Http\Controllers\UserController@add');
Route::post('user/save','App\Http\Controllers\UserController@save');
Route::get('user/delete/{id}',
'App\Http\Controllers\UserController@delete');
//Cow Routes
Route::get('cows','App\Http\Controllers\CowController@all');
Route::get('cow/add','App\Http\Controllers\CowController@add');
Route::post('cow/save','App\Http\Controllers\CowController@save');
Route::get('cow/delete/{id}',
'App\Http\Controllers\CowController@delete');

//Produce Routes
Route::get('produce','ProduceController@all');
Route::get('produce/add','ProduceController@add');
