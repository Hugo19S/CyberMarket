<?php

use App\Http\Controllers\Web\{AdminController,
    CategoriaController,
    ClienteController,
    HomePageController,
    ProdutoController};
use App\Http\Controllers\Api\AuthController;
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
Route::get('/register',[ClienteController::class,'register'])->name('register');
Route::get('/login',[ClienteController::class,'login'])->name('login');

Route::get('/', [HomePageController::class, 'index'])->name('home'); // Defina a rota raiz e atribua o nome 'home'
Route::get('/produtos/pesquisar', [ProdutoController::class, 'search'])->name('product.search');
Route::get('/categoria/{id}/produtos', [CategoriaController::class, 'produtosPorCategoria'])->name('categories.search');
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
Route::middleware('web')->get('/carrinho', [ProdutoController::class, 'productCart'])->name('shopping.cart');
Route::get('/detalhes-conta', [ClienteController::class, 'detalhesConta'])->middleware('auth');
Route::get('/produtos/add/{id}', [ProdutoController::class, 'addProductToCart'])->name('addproduct.to.cart');
Route::patch('/update-shopping-cart', [ProdutoController::class, 'updateCart'])->name('update.sopping.cart');
Route::delete('/delete-cart-product', [ProdutoController::class, 'deleteProduct'])->name('delete.cart.product');

/*Route::get('/produtos/pedido',[PedidoController::class,'index']);
Route::get('/carrinho',[CarrinhoController::class,'verCarrinho']);
Route::get('/metodo-pagamento', [CarrinhoController::class, 'procederParaPagamento'])->name('metodo-pagamento');*/


/** Routes Admin */
Route::get('/secret/home', [AdminController::class, 'index']);
Route::get('/secret/product/add', [AdminController::class, 'addProduct']);
Route::get('/secret/product/edit/{id}', [AdminController::class, 'editProduct']);
Route::post('/secret/product/addProduct/store', [AdminController::class, 'store']);
Route::get('/secret/login', [AdminController::class, 'login']);
Route::post('/secret/login/verify', [AdminController::class, 'verify']);
Route::get('/secret/management/analytics', [AdminController::class, 'showAnalytics']);
/**Responsive*/
Route::get('/secret/management/products', [AdminController::class, 'showProducts']);
Route::get('/secret/management/product/details/{id}', [AdminController::class, 'showProduct']);
/**Responsive*/
Route::get('/secret/management/order', [AdminController::class, 'showOrder']);
/**Responsive*/
Route::get('/secret/management/order/{id}', [AdminController::class, 'orderDetails']);
