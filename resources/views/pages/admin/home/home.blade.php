@extends('layouts.admin.main')

@section('title', 'Home')

@section('content')

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        //variavel usado pelo arquivo js para criar os graficos
        let dataFromContr = {!! json_encode($dataVegaChart) !!};
    </script>
    <script type="text/javascript" src="/js/vegaChart.js"></script>

    <div class="group-all">

        <div class="last_additions">
            <h3>Últimos 5 produtos adicionados</h3>
            <div class="additions">
                @for ($i = 1; $i <= 5; $i++)
                    <x-product-box
                        image="/images/laptops.png"
                        first_button="btn btn-primary"
                        second_button="btn btn-danger"
                        text_btn1="Editar"
                        text_btn2="Eliminar"
                        btn1_href="/secret/product/edit/1"
                        btn2_href="#"
                    />
                @endfor
            </div>
        </div>
        <div class="last_orders">
            <h3>Últimos 5 pedidos</h3>
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
                @for ($i = 1; $i <= 5; $i++)
                    <tr class="row_order_table">
                        <td class="destaque" data-title="ID do pedido"><a href="/secret/management/order/2">#67226</a>
                        </td>
                        <td class="geral" data-title="Data">24/10/2023</td>
                        <td class="geral" data-title="Proprietário">Hana Milne</td>
                        <td data-title="Status">
                            <div class="status">
                                <p>Completo</p>
                            </div>
                        </td>
                        <td class="geral" data-title="Itens">2</td>
                        <td class="geral" data-title="Pagamento">Cartão visa</td>
                        <td class="destaque" data-title="Total">€50.99</td>
                    </tr>
                @endfor
                </tbody>
            </table>
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
                            @for($i = 0; $i < 80; $i++)
                                <tr>
                                    <td>HomePage</td>
                                    <td>10</td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                    <div id="vegachart" class="vega-chart"></div>
                </div>

        </div>


    </div>

@endsection
