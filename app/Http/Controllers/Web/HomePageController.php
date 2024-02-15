<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomePageController extends Controller
{
    public function index()
    {

       Http::post('http://127.0.0.1:8000/api/data-analytics/save',[
           'id'=>1
       ]);

        $categoriasResponse = Http::get('http://127.0.0.1:8000/api/categorias');
        $categorias = $categoriasResponse->json();

        $produtosResponse = Http::get('http://127.0.0.1:8000/api/produtos');
        $produtos = $produtosResponse->json();
        ;

        return view('pages.client.home', ['categorias' => $categorias,
            'produtos' => $produtos]);
    }
}
