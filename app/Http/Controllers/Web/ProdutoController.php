<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function checkout()
    {

        return view('pages.client.checkout');

    }

    public function search(Request $request)
    {
        $termoPesquisa = $request->input('q');

        $response = Http::get('http://127.0.0.1:8000/api/produto/search?q=' . $termoPesquisa);

        $resultados = $response->json()['resultados'];

        return view('pages.client.product-list', ['resultados' => $resultados]);
    }

    public function productCart()
    {

        return view('pages.client.cart');
    }

    public function addProductToCart($id)
    {
        $product = Http::get('http://127.0.0.1:8000/api/produtos/' . $id);

        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "product_id" => $product['produto']['produto_id'],
                "name" => $product['produto']['nome_produto'],
                "quantity" => 1,
                "price" => $product['produto']['preco'],
                "image" => $product['produto']['imagens'][0],
                "sku" => $product['produto']['sku']
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product has been added to cart!');
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Product added to cart.');
        }
    }

    public function deleteProduct(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Book successfully deleted.');
        }
    }


    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Http::get('http://127.0.0.1:8000/api/produtos/' . $id);

        return view('pages.client.product-details', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
