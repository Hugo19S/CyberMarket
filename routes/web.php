<?php

use App\Http\Controllers\Web\{AccessController,
    AdminController,
    CategoriaController,
    ClienteController,
    HomePageController,
    PedidoController,
    ProdutoController};
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

/************************************** Routes Client *************************************/

Route::get('/register', [ClienteController::class, 'register'])->name('register');
Route::post('/register', [AccessController::class, 'register'])->name('registerSave');
Route::get('/login', [ClienteController::class, 'login'])->name('login');

Route::get('/', [HomePageController::class, 'index'])->name('home'); // Defina a rota raiz e atribua o nome 'home'
Route::get('/produtos/pesquisar', [ProdutoController::class, 'search'])->name('product.search');
Route::get('/categoria/{id}/produtos', [CategoriaController::class, 'produtosPorCategoria'])->name('categories.search');
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);


Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/produtos/add/{id}', [ProdutoController::class, 'addProductToCart'])->name('addproduct.to.cart');
    Route::patch('/update-shopping-cart', [ProdutoController::class, 'updateCart'])->name('update.sopping.cart');
    Route::delete('/delete-cart-product', [ProdutoController::class, 'deleteProduct'])->name('delete.cart.product');
    Route::get('/cliente/{id}', [ClienteController::class, 'detalhesConta'])->name('cliente.detalhes');
    Route::get('/carrinho', [ProdutoController::class, 'productCart'])->name('shopping.cart');
    Route::put('/cliente/{id}', [ClienteController::class, 'atualizar'])->name('cliente.atualizar');
    Route::get('/checkout', [PedidoController::class, 'checkout'])->name('checkout');
    Route::post('/checkout', [PedidoController::class, 'processCheckout'])->name('checkout.process');
    Route::get('/resumo-encomenda', [PedidoController::class, 'resumoEncomenda'])->name('cliente.pedido');
    Route::get('/logout', [AccessController::class, 'logout'])->name('logout.client');
});


/****************************** Routes Admin *************************************/

Route::middleware(['auth.admin'])->group(function () {

    Route::get('/secret/home', [AdminController::class, 'index']);
    /**Lgação parcialmente feito*/
    Route::get('/secret/product/add', [AdminController::class, 'addProduct']);
    /**Lgação feito*/
    Route::get('/secret/product/edit/{id}', [AdminController::class, 'editProduct']);
    Route::get('/secret/product/delete/{id}', [AdminController::class, 'deleteProduct']);
    /**Lgação feito*/
    Route::post('/secret/product/addProduct/store', [AdminController::class, 'store']);
    /**Lgação feito*/
    Route::put('/secret/product/addProduct/saveChanges/{id}', [AdminController::class, 'saveChanges']);
    /**Lgação feito*/
    Route::get('/secret/management/analytics', [AdminController::class, 'showAnalytics']);
    Route::get('/secret/management/products', [AdminController::class, 'showProducts']);
    /**Lgação feito*/
    Route::get('/secret/management/product/details/{id}', [AdminController::class, 'showProductDetails']);
    /**Lgação feito*/
    Route::get('/secret/management/order', [AdminController::class, 'showOrder']);
    Route::put('/secret/management/order/saveForm', [AdminController::class, 'saveChangesOrder']);
    Route::get('/secret/management/order/{id}', [AdminController::class, 'orderDetails']);
    /**Falta fazer a responsividade!*/
    Route::get('/secret/logout', [AccessController::class, 'logout'])->name('logout.admin');
    /**Não é preciso fazer*/

});

Route::get('/secret/login', [AdminController::class, 'login'])->name('secret.login');
/**Não é preciso fazer*/
Route::post('/secret/login/verify', [AccessController::class, 'login'])->name('login.verify'); /**Não é preciso fazer*/
