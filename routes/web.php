<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
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



Route::get('/','AnimeController@index')->name('welcome');
Route::get('/details','AnimeController@details')->name('details');
