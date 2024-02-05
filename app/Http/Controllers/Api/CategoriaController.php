<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function produtosPorCategoria($categoriaId)
    {
        $categoria = Categoria::find($categoriaId);

        if (!$categoria) {
            return redirect()->route('pagina-de-erro');
        }

        $tipoProdutos = $categoria->tipoProduto;

        $produtoIds = $tipoProdutos->pluck('tipo_produto_id');

        $produtos = Produto::with('imagens')->whereIn('tipo_produto_id', $produtoIds)->get();


        return response()->json(['categoria' => $categoria, 'produtos' => $produtos]);
    }

    public function index()
    {
        //
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
