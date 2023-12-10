<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/** Route Client */
//Route::get('/home/admin',[AdminController::class, 'index']);


/** Route Admin */

Route::get('/top/secret/home',[AdminController::class, 'index']);
Route::get('/top/secret/product/register',[AdminController::class, 'register']);
Route::post('/top/secret/product/register/store',[AdminController::class, 'store']);
Route::get('/top/secret/login',[AdminController::class, 'login']);
Route::post('/top/secret/login/verify',[AdminController::class, 'verify']);