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
    $user = App\Models\User::first();

    $post = $user->posts()->create([
        'user_id' => App\Models\User::factory(),
        'title' => 'foobar',
        'body' => 'lorum ipsum'
    ]);

    return view('welcome');
});

Route::get('users', 'App\Http\Controllers\UserController@index');
Route::post('users', 'App\Http\Controllers\UserController@store');
