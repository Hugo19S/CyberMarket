<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TipoProduto;

class TipoProdutoController extends Controller
{
    /**
     * param $id of category
     * Return the product types
     */
    public function productTypeByCategoryId($id)
    {
        $types = TipoProduto::all()->where('categoria_id', $id);
        return response()->json($types);
    }
}
