<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $categoriasResponse = Http::get('http://127.0.0.1:8000/api/categorias');
        $categorias = $categoriasResponse->json();

        $produtosResponse = Http::get('http://127.0.0.1:8000/api/produtos');
        $produtos = $produtosResponse->json();

        $produtosComImagemResponse = Http::get('http://127.0.0.1:8000/api/produtos-com-imagens');
        $produtosComImagem = $produtosComImagemResponse->json();
        ;

        return view('pages.client.home', ['categorias' => $categorias,
            'produtos' => $produtos, 'produtosComImagem' => $produtosComImagem]);
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
        //
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
