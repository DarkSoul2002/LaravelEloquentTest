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
    $container = new \App\Models\Container();

    $container->bind('example', function () {
       return new \App\Models\Example();
    });

    $example = $container->resolve('example');

    $example->go();
});

Route::get('users', 'App\Http\Controllers\UserController@index');
Route::post('users', 'App\Http\Controllers\UserController@store');


Route::resource('posts', 'App\Http\Controllers\PostController');
