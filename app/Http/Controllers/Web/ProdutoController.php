<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function search(Request $request)
    {
        $termoPesquisa = $request->input('q');

        $response = Http::withToken(''.session('token'))->get('http://127.0.0.1:8000/api/produto/search?q=' . $termoPesquisa);

        $resultados = $response->json()['resultados'];

        Http::withToken(''.session('token'))->post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>7
        ]);
        return view('pages.client.product-list', ['resultados' => $resultados]);
    }

    public function productCart()
    {
        Http::withToken(''.session('token'))->post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>2
        ]);
        return view('pages.client.cart');
    }

    public function addProductToCart($id)
    {
        $product = Http::withToken(''.session('token'))->get('http://127.0.0.1:8000/api/produtos/' . $id);

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
                /*$this->updateCart($request);*/
            }
            session()->flash('success', 'Product successfully deleted.');
        }
    }



    public function show(string $id)
    {
        $produto = Http::get('http://127.0.0.1:8000/api/produtos/' . $id);

        Http::withToken(''.session('token'))->post('http://127.0.0.1:8000/api/data-analytics/save',[
            'id'=>6
        ]);
        return view('pages.client.product-details', ['produto' => $produto]);
    }
}
