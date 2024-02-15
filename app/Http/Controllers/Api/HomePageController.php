<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Fabricante;
use App\Models\Produto;

class HomePageController extends Controller
{

    public function getCategorias()
    {
        $categorias = Categoria::all();
        return response()->json(['categorias' => $categorias]);
    }

    public function getFabricante()
    {
        $fabricante = Fabricante::all();
        return response()->json(['produtos' => $fabricante]);
    }

    public function getProdutos()
    {
        $produtosComImagens = Produto::with('imagens')->get();

        return response()->json(['produtosComImagens' => $produtosComImagens]);
    }
}
