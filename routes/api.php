<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\HomePageController;
use App\Http\Controllers\Api\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can addProduct API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', [AuthController::class, 'signin'])->name('api.login');
Route::post('register', [AuthController::class, 'signup'])->name('api.register');

Route::put('/cliente/{id}',[ClienteController::class,'atualizarCliente']);

Route::get('/categorias', [HomePageController::class, 'getCategorias']);
Route::get('/produtos', [HomePageController::class, 'getProdutos']);
Route::get('/produtos-com-imagens', [HomePageController::class, 'getProdutosComImagens']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
Route::get('/produto/search', [ProdutoController::class, 'search'])->name('api.produto.search');
Route::get('/categoria/{categoriaId}/produtos', [CategoriaController::class, 'produtosPorCategoria'])
    ->name('categoria.produtos');

Route::middleware('auth:sanctum')->post('/logout',[AuthController::class, 'logout'])->name('api.logout');
