<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function produtosPorCategoria($id)
    {
        $response = Http::get('http://127.0.0.1:8000/api/categoria/' . $id . '/produtos');

        if ($response->successful()) {
            $data = $response->json();
            $categoria = $data['categoria'];
            $produtos = $data['produtos'];

            return view('pages.client.product-list', [
                'categoria' => $categoria,
                'produtos' => $produtos,
                'tipo' => 'categoria'
            ]);
        } else {
            return redirect()->route('pagina-de-erro');
        }
    }
}
