<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Pagamento;
use App\Models\Pedido;
use App\Models\PedidoProduto;
use Illuminate\Http\Request;

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

        return response()->json(['pedido_id' => $pedido->pedido_id], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pedido = Pedido::with('cliente')
            ->with('pagamento.tipoPagamento')
            ->with('pedidoProduto.produto')
            ->where('pedido_id', $id)->get();

        return response()->json($pedido);
    }

    public function showAll()
    {
        $pedidos = Pedido::with('cliente')
            ->with(['pagamento' => function ($query) {
                $query->select('pedido_id', 'pagamento_id', 'data_pagamento', 'tipo_pagamento_id')
                    ->with(['tipoPagamento' => function ($query) {
                        $query->select('tipo_pagamento_id', 'nome_tipo_pagamento');
                    }]);
            }])
            ->with(['pedidoProduto.produto' => function ($query) {
                $query->select('produto_id', 'tipo_produto_id', 'fabricante_id', 'admin_id', 'nome_produto', 'sku', 'descricao', 'preco', 'vendedor', 'quantidade', 'data_criacao', 'modelo', 'created_at', 'updated_at');
            }])
            ->select('pedido_id', 'cliente_id', 'data_pedido', 'preco_total', 'status')->orderBy('data_pedido', 'desc')->get();

        return response()->json(['results' => $pedidos]);
    }

    public function returnLast5Orders()
    {
        $pedidos = Pedido::with(['cliente' => function ($query) {
            $query->select('cliente_id', 'nome_cliente');
        }])
            ->with(['pagamento' => function ($query) {
                $query->select('pedido_id', 'pagamento_id', 'data_pagamento', 'tipo_pagamento_id')
                    ->with(['tipoPagamento' => function ($query) {
                        $query->select('tipo_pagamento_id', 'nome_tipo_pagamento');
                    }]);
            }])
            ->with('pedidoProduto')
            ->select('pedido_id', 'cliente_id', 'data_pedido', 'preco_total', 'status')
            ->take(5)->orderBy('data_pedido', 'desc')->get();

        return response()->json(['results' => $pedidos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request)
    {
        $pedido = Pedido::findOrFail($request->id);
        $pedido->update([
            'status' => $request->status
        ]);
    }
}
