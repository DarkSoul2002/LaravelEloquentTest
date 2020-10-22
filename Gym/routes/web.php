<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Users crud
// Controller       UserController
// route resource   users
// views            users.index, users.create, users.edit
Route::resource('users', \App\Http\Controllers\UserController::class)->middleware('auth');




// Admin CRUD

Route::get('/admin', [App\Http\Controllers\Auth\admin\AdminController::class, 'index']);
Route::get('/admin/create', [App\Http\Controllers\Auth\admin\AdminController::class, 'create']);
