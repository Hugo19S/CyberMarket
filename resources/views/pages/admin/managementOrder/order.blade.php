@extends('layouts.admin.main')

@section('title', 'Gerir compras')

@section('content')

    <div>
        <div class="content-data">
            <h1>Gestão de Compras</h1>

            <table class="table">
                <thead>
                <tr>
                    <th>ID do pedido</th>
                    <th>Data</th>
                    <th>Proprietário</th>
                    <th>Status</th>
                    <th>Itens</th>
                    <th>Pagamento</th>
                    <th>Total</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($orders['results'] as $orders)
                    <tr class="row_order_table">
                        <td class="destaque" data-title="ID do pedido"><a href="/secret/management/order/{{$orders['pedido_id']}}">#{{$orders['pedido_id']}}</a></td>
                        <td class="geral" data-title="Data">{{ date('Y-m-d', strtotime($orders['data_pedido'])) }}</td>
                        <td class="geral" data-title="Proprietário">{{$orders['cliente']['nome_cliente']}}</td>
                        <td data-title="Status">
                            <div  class="status">
                                <p>{{$orders['status']}}</p>
                            </div>
                        </td>
                        <td class="geral" data-title="Itens">{{count($orders['pedido_produto'])}}</td>
                        <td class="geral" data-title="Pagamento">{{$orders['pagamento'][0]['tipo_pagamento']['nome_tipo_pagamento']}}</td>
                        <td class="destaque" data-title="Total">{{$orders['preco_total']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
