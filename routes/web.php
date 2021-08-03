<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CoinSearchController;
use App\Http\Controllers\CoinShowController;

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

Route::get('/', IndexController::class);

Route::get('/user/create', [UserController::class, "create"]);
Route::get('/user/login', [UserController::class, "login"]);
Route::get('/user/delete', [UserController::class, "delete"]);
Route::get('search/coins', [CoinSearchController::class, 'coins'])->name('search.coins');
Route::get('show/coins', [CoinShowController::class, 'showcoin'])->name('show.coins');
