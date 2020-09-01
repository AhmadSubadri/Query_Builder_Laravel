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

Route::get('/','MenuController@index');
Route::get('/portfolio','MenuController@portfolio');
Route::get('/about','MenuController@about');
Route::get('/contact','MenuController@contact');