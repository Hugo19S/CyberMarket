@extends('layouts.admin.main')

@section('title', 'Gerir compras')

@section('content')

    <div>
        <div class="last_additions">
            <h1>Gestão de Compras</h1>

            <table class="table">
                <thead>
                <tr>
                    <th>ID da encomenda</th>
                    <th>Data</th>
                    <th>Proprietário</th>
                    <th>Status</th>
                    <th>Itens</th>
                    <th>Pagamento</th>
                    <th>Total</th>
                </tr>
                </thead>

                <tbody>
                @for ($i = 1; $i <= 50; $i++)
                    <tr class="row_order_table">
                        <td class="destaque"><a href="/secret/management/order/2">#67226</a></td>
                        <td class="geral">24/10/2023</td>
                        <td class="geral">Hana Milne</td>
                        <td >
                            <div  class="status">
                                <p>Completo</p>
                            </div>

                        </td>
                        <td class="geral">2</td>
                        <td class="geral">Cartão visa</td>
                        <td class="destaque">€50.99</td>
                    </tr>
                @endfor
                </tbody>

            </table>

        </div>
    </div>

@endsection
