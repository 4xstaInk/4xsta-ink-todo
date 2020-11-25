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

Route::get('/', 'App\Http\Controllers\welcomeController@index');

Route::get('/register', 'App\Http\Controllers\UserControllerController@index');

Route::get('/profile', 'App\Http\Controllers\UserControllerController@profile');

Route::get('/login', 'App\Http\Controllers\UserloginController@index')->name('login');

Route::Post('/store', 'App\Http\Controllers\UserControllerController@store');

Route::Post('/logs', 'App\Http\Controllers\UserLoginController@logs');

Route::get('/edit', 'App\Http\Controllers\TodoController@change');

Route::resource('todo', 'App\Http\Controllers\TodoController');

Route::Post('/login', 'App\Http\Controllers\UserloginController@authenticate');
