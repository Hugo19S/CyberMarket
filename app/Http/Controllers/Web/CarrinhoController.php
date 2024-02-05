<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function verCarrinho()
    {
        $carrinhoItens = [];
        return view('pages.client.checkout', ['carrinhoItens' => $carrinhoItens]);
    }

    public function procederParaPagamento()
    {
        return view('pages.client.metodo-pagamento');
    }

    public function adicionarProdutoAoCarrinho($produtoId)
    {
        // Obtenha o carrinho atual ou crie um novo
        $carrinho = json_decode(request()->cookie('carrinho', '[]'), true);

        // Adicione o produto ao carrinho
        // (aqui você precisa implementar sua própria lógica)
        $produto = ['id' => $produtoId, 'quantidade' => 1];
        $carrinho[] = $produto;

        // Armazene o carrinho atualizado no cookie
        return response()
            ->view('sua.view', ['carrinho' => $carrinho])
            ->cookie('carrinho', json_encode($carrinho), 60 * 24 * 7); // 7 dias de expiração
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
