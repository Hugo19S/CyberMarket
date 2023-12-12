<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can addProduct web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/** Route Client */
//Route::get('/home/admin',[AdminController::class, 'index']);



/** Route Admin */
Route::get('/secret/home',[AdminController::class, 'index']);
Route::get('/secret/product/add',[AdminController::class, 'addProduct']);
Route::get('/secret/product/edit/{id}',[AdminController::class, 'editProduct']);
Route::post('/secret/product/addProduct/store',[AdminController::class, 'store']);
Route::get('/secret/login',[AdminController::class, 'login']);
Route::post('/secret/login/verify',[AdminController::class, 'verify']);
Route::get('/secret/management/products',[AdminController::class, 'showProduct']);
Route::get('/secret/management/order',[AdminController::class, 'showOrder']);
