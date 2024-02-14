<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Pagamento;
use App\Models\Pedido;
use App\Models\PedidoProduto;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function processCheckout(Request $request)
    {
        $formData = $request->input('formData');
        $cartData = $request->input('cartData');

        $userId = $request->id;

        $clientId = Cliente::where('user_id', $userId)->first();


        $precoTotal = $request->input('total');

        $pedido = Pedido::create([
            'cliente_id' => $clientId->cliente_id,
            'data_pedido' => now(),
            'preco_total' => $precoTotal,
            'status' => 'Pendente',
        ]);

        $pedido->save();

        foreach ($cartData as $item) {
            PedidoProduto::create([
                'pedido_id' => $pedido->pedido_id,
                'produto_id' => $item['product_id'],
                'quantidade' => $item['quantity'],
            ]);
        }

        Pagamento::create([
            'tipo_pagamento_id' => $formData['tipo_pagamento'],
            'pedido_id' => $pedido->pedido_id,
            'data_pagamento' => now(),
        ]);

        return response()->json(['message' => 'Pedido criado com sucesso'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function showAll()
    {
        $pedidos = Pedido::with(['cliente' => function ($query) {
            $query->select('cliente_id', 'nome_cliente');
        }])
            ->with(['pagamento' => function ($query) {
                $query->select('pedido_id', 'pagamento_id', 'data_pagamento', 'tipo_pagamento_id')
                ->with(['tipoPagamento' => function($query){
                    $query->select('tipo_pagamento_id', 'nome_tipo_pagamento');
                }]);
            }])
            ->with('pedidoProduto')
            ->select('pedido_id', 'cliente_id', 'data_pedido', 'preco_total', 'status')
            ->get();

        return response()->json(['results' => $pedidos]);
    }

    public function returnLast5Orders(){
        $pedidos = Pedido::with(['cliente' => function ($query) {
            $query->select('cliente_id', 'nome_cliente');
        }])
            ->with(['pagamento' => function ($query) {
                $query->select('pedido_id', 'pagamento_id', 'data_pagamento', 'tipo_pagamento_id')
                    ->with(['tipoPagamento' => function($query){
                        $query->select('tipo_pagamento_id', 'nome_tipo_pagamento');
                    }]);
            }])
            ->with('pedidoProduto')
            ->select('pedido_id', 'cliente_id', 'data_pedido', 'preco_total', 'status')
            ->take(5)->get();

        return response()->json(['results' => $pedidos]);
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
