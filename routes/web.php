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
    return view('welcome');
});

Route::view('/nocreate', 'nocreate');
Route::view('/posthelp', 'posthelp');
Route::view('/oauth2', 'oauth2');

Route::view('/ok', 'ok')->middleware(['checkage']);
Route::view('/bad', 'bad');
