<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function getCategorias()
    {
        $categorias = Categoria::all();
        return response()->json(['categorias' => $categorias]);
    }

    public function getProdutos()
    {
        $produtos = Produto::all();
        return response()->json(['produtos' => $produtos]);
    }

    public function getProdutosComImagens()
    {
        $produtosComImagens = Produto::with('imagens')->get();

        return response()->json(['produtosComImagens' => $produtosComImagens]);
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
