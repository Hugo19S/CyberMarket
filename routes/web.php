<?php

use App\Http\Controllers\Web\{AdminController, HomePageController, PedidoController, ProdutoController};
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

/** Routes Client */
Route::get('/', [HomePageController::class, 'index']);
Route::get('/produtos/pesquisar', [ProdutoController::class, 'index']);
Route::get('/produto/{id}', [ProdutoController::class, 'show']);
Route::get('/produtos/pedido',[PedidoController::class,'index']);


/** Routes Admin */
Route::get('/secret/home', [AdminController::class, 'index']);
Route::get('/secret/product/add', [AdminController::class, 'addProduct']);
Route::get('/secret/product/edit/{id}', [AdminController::class, 'editProduct']);
Route::post('/secret/product/addProduct/store', [AdminController::class, 'store']);
Route::get('/secret/login', [AdminController::class, 'login']);
Route::post('/secret/login/verify', [AdminController::class, 'verify']);
Route::get('/secret/management/analytics', [AdminController::class, 'showAnalytics']); /**Responsive*/
Route::get('/secret/management/products', [AdminController::class, 'showProducts']);
Route::get('/secret/management/product/details/{id}', [AdminController::class, 'showProduct']); /**Responsive*/
Route::get('/secret/management/order', [AdminController::class, 'showOrder']); /**Responsive*/
Route::get('/secret/management/order/{id}', [AdminController::class, 'orderDetails']);
