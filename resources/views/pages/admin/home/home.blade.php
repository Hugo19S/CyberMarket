@extends('layouts.admin.main')

@section('title', 'Home')

@section('content')

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        let dataFromContr = {!! json_encode($dataVegaChart) !!};
    </script>
    <script type="text/javascript" src="/js/admin/vegaChart.js"></script>


    <div class="group-all">

        <div class="last_additions">
            <h3>Últimos 5 produtos adicionados</h3>
            <div class="additions">
                @foreach ($last5Added['results'] as $product)
                    <x-product-box
                        image="{{$product['imagens'][0]['imagem_url']}}"
                        classDef="productItem"
                        price="{{$product['preco']}}"
                        name="{{$product['nome_produto']}}"
                        owner="{{$product['vendedor']}}"
                        category="{{$product['tipo_produto']['categoria']['nome_categoria']}}"
                        id="{{$product['produto_id']}}"
                    />
                @endforeach
                <button id="nextProduct">></button>
                <button id="prevProduct"><</button>
            </div>
        </div>
        <div class="last_orders">
            <h3>Últimos 5 pedidos</h3>
            <div class="orders-5">
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

                    <tbody class="tbody-orders">
                    @foreach ($last5Orders['results'] as $orders)
                        <tr class="row_order_table">
                            <td class="destaque" data-title="ID do pedido"><a
                                    href="/secret/management/order/{{$orders['pedido_id']}}">#{{$orders['pedido_id']}}</a>
                            </td>
                            <td class="geral"
                                data-title="Data">{{ date('Y-m-d', strtotime($orders['data_pedido'])) }}</td>
                            <td class="geral" data-title="Proprietário">{{$orders['cliente']['nome_cliente']}}</td>
                            <td data-title="Status">
                                <div class="status">
                                    <p id="status-text">{{$orders['status']}}</p>
                                </div>
                            </td>
                            <td class="geral" data-title="Itens">{{count($orders['pedido_produto'])}}</td>
                            <td class="geral"
                                data-title="Pagamento">{{$orders['pagamento'][0]['tipo_pagamento']['nome_tipo_pagamento']}}</td>
                            <td class="destaque" data-title="Total">{{$orders['preco_total']}}€</td>
                        </tr>
                    @endforeach
                    <button id="nextOrder">></button>
                    <button id="prevOrder"><</button>
                    </tbody>
                </table>

            </div>
        </div>
        <div class="analytics_info">
            <h3>Analise de visita as páginas</h3>

            <div class="analytics-group">
                <div class="pie-info">
                    <table>
                        <thead>
                        <tr>
                            <th>Páginas</th>
                            <th>Visitas</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($dataAnalytics as $dataAnalytic)
                            <tr>
                                <td>{{$dataAnalytic[0]}}</td>
                                <td>{{$dataAnalytic[1]}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="vegachart" class="vega-chart"></div>
            </div>
        </div>
    </div>

    <script src="/js/admin/carousel.js"></script>
    <script src="/js/admin/statusColor.js"></script>
@endsection
