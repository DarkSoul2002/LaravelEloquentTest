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



Route::get('users', 'App\Http\Controllers\UserController@index')->middleware('can:view');
Route::post('users', 'App\Http\Controllers\UserController@store');


Route::resource('posts', 'App\Http\Controllers\PostController');

Route::resource('payments', 'App\Http\Controllers\PaymentsController');

