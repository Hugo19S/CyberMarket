<?php

use App\Http\Controllers\Api\AnalyticsDataController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\HomePageController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\ProdutoController;
use App\Http\Controllers\Api\TipoProdutoController;
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



Route::get('/categorias', [HomePageController::class, 'getCategorias']);
Route::get('/produtos', [HomePageController::class, 'getProdutos']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
Route::get('/produto/search', [ProdutoController::class, 'search'])->name('api.produto.search');
Route::get('/categoria/{categoriaId}/produtos', [CategoriaController::class, 'produtosPorCategoria'])
    ->name('categoria.produtos');
Route::get('/fabricante', [HomePageController::class, 'getFabricante']);
Route::get('/tipoproduto/{id}', [TipoProdutoController::class, 'productTypeByCategoryId']);
Route::get('logout', [AuthController::class, 'logout'])->name('api.logout');


Route::middleware('auth.token')->group(function (){

    Route::put('/cliente/{id}', [ClienteController::class, 'atualizarCliente']);   /*******Feito********/
    Route::post('/checkout', [PedidoController::class, 'processCheckout']);   /*******Feito********/

    /******************* Consulta do administrador *******************/

    Route::get('/added/{id}', [ProdutoController::class, 'allAddedProduct']);   /*******Feito********/
    Route::get('/added/last5/{id}', [ProdutoController::class, 'returnLast5AddedProduct']);   /*******Feito********/
    Route::post('/addProduct', [ProdutoController::class, 'store']);   /*******Feito********/
    Route::put('/changeProduct', [ProdutoController::class, 'saveChanges']);   /*******Feito********/
    Route::get('/produto/delete/{id}', [ProdutoController::class, 'destroy']);   /*******Feito********/
    Route::get('/orders', [PedidoController::class, 'showAll']);   /*******Feito********/
    Route::get('/order/{id}', [PedidoController::class, 'show']);   /*******Feito********/
    Route::put('/order/status', [PedidoController::class, 'updateStatus']);   /*******Feito********/
    Route::get('/orders/last5', [PedidoController::class, 'returnLast5Orders']);   /*******Feito********/
    Route::get('/data-analytics', [AnalyticsDataController::class, 'index']);   /*******Feito********/
    Route::post('/data-analytics/save', [AnalyticsDataController::class, 'update']);
});

Route::post('login', [AuthController::class, 'signin'])->name('api.login');
Route::post('register', [AuthController::class, 'signup'])->name('api.register');

