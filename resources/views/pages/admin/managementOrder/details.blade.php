@extends('layouts.admin.main')

@section('title', 'Gerir compras')

@section('content')

    <div>
        <div class="orderDetailsPage">
            <div class="containerOrder">
                <div class="orderDetails">
                    <h3>Pedido número #{{$id}}</h3>
                    <p>Pagamento feito via {{$orders[0]['pagamento'][0]['tipo_pagamento']['nome_tipo_pagamento']}}</p>

                    <div class="dataGeneral">
                        <div class="orderData">
                            <h4>Dados de entrega</h4>
                            <div class="form-group">
                                <label>Proprietário:</label>
                                <input type="text" name="orderKey" value="{{$orders[0]['cliente']['nome_cliente']}}"
                                       class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Email: </label>
                                <input type="text" name="orderKey" value="{{$orders[0]['cliente']['email']}}"
                                       class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Morada: </label>
                                <input type="text" name="orderKey" value="{{$orders[0]['cliente']['morada']}}"
                                       class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Contacto: </label>
                                <input type="text" name="orderKey" value="{{$orders[0]['cliente']['telemovel']}}"
                                       class="form-control" readonly>
                            </div>
                        </div>

                        <div class="deliveryAddress">
                            <h4>Geral</h4>
                            <form action="/secret/management/order/saveForm" id="myForm" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="DateCreated">Data de criação</label><br>
                                    <input type="datetime-local" name="DateCreated"
                                           value="{{$orders[0]['data_pedido']}}"
                                           class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label><br>
                                    <select name="status" class="form-control">
                                        <option
                                            value="Completo" <?php echo ($orders[0]['status'] == 'Completo') ? 'selected' : ''; ?>>
                                            Completo
                                        </option>
                                        <option
                                            value="Pendente" <?php echo ($orders[0]['status'] == 'Pendente') ? 'selected' : ''; ?>>
                                            Pendente
                                        </option>
                                        <option
                                            value="Cancelado" <?php echo ($orders[0]['status'] == 'Cancelado') ? 'selected' : ''; ?>>
                                            Cancelado
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="orderKey">Código de encomenda</label><br>
                                    <input type="text" name="orderKey" value="{{$id}}"
                                           class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="total">Total</label><br>
                                    <input type="text" name="total" value="{{$orders[0]['preco_total']}}"
                                           class="form-control" readonly>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="publish">
                    <div class="h4">
                        <h4>Publicar</h4>
                    </div>

                    <div class="buttons">
                        <button class="btn btn-success" id="saveChangesBtn">Gravar alteração</button>
                    </div>
                </div>
            </div>

            <div class="selectedProduct">

                <table class="table">
                    <thead>
                    <tr>
                        <th>Sku</th>
                        <th>Produto</th>
                        <th>Modelo</th>
                        <th>Vendedor</th>
                        <th>Itens</th>
                        <th>Preço</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($orders[0]['pedido_produto'] as $products)
                        <tr class="row_order_table">
                            <td class="destaque">{{$products['produto']['sku']}}</td>
                            <td class="geral"><a href="#">
                                    <div class="span">
                                        <a href="/secret/management/product/details/{{$products['produto']['produto_id']}}">
                                            {{$products['produto']['nome_produto']}}
                                        </a>
                                    </div>
                                </a>
                            </td>
                            <th>{{$products['produto']['modelo']}}</th>
                            <th>{{$products['produto']['vendedor']}}</th>
                            <td class="geral">1</td>
                            <td class="destaque">{{$products['produto']['preco']}}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <script src="/js/admin/submitForm.js"></script>
@endsection
