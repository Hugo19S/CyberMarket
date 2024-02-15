<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;

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
}
