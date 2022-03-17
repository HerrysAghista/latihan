<?php

use App\Http\Controllers\Dashboard_Index;
use App\Http\Controllers\Maps;
use App\Http\Controllers\Notifications;
use App\Http\Controllers\Tables;
use App\Http\Controllers\User_Profile;
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

Route::get('/', [Dashboard_Index::class, 'index']);
Route::get('/map', [Maps::class, 'index']);
Route::get('/notifications', [Notifications::class, 'index']);
Route::get('/tables-makanan', [Tables::class, 'index']);
Route::get('/user', [User_Profile::class, 'index']);
