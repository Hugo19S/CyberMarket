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
                @foreach ($orders['results'] as $order)
                    <tr class="row_order_table">
                        <td class="destaque" data-title="ID do pedido"><a
                                href="/secret/management/order/{{$order['pedido_id']}}">#{{$order['pedido_id']}}</a>
                        </td>
                        <td class="geral" data-title="Data">{{ date('Y-m-d', strtotime($order['data_pedido'])) }}</td>
                        <td class="geral" data-title="Proprietário">{{$order['cliente']['nome_cliente']}}</td>
                        <td data-title="Status">
                            <div class="status">
                                <p id="status-text">{{$order['status']}}</p>
                            </div>
                        </td>
                        <td class="geral" data-title="Itens">{{count($order['pedido_produto'])}}</td>
                        <td class="geral" data-title="Pagamento"> @if (isset($order['pagamento'][0]))
                                {{$order['pagamento'][0]['tipo_pagamento']['nome_tipo_pagamento']}}
                            @else
                                Sem pagamento
                            @endif</td>
                        <td class="destaque" data-title="Total">{{$order['preco_total']}}€</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <script src="/js/admin/statusColor.js"></script>
@endsection
