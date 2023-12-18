@extends('layouts.admin.main')

@section('title', 'Gerir compras')

@section('content')

    <div>
        <div class="orderDetailsPage">
            <div class="containerOrder">
                <div class="orderDetails">
                    <h3>Pedido número #21546</h3>
                    <p>Pagamento feito via MBWay</p>

                    <div class="dataGeneral">
                        <div class="orderData">
                            <h4>Geral</h4>
                            <form action="#">
                                <div class="form-group">
                                    <label for="DateCreated">Data de criação</label><br>
                                    <input type="datetime-local" name="DateCreated" value="2022-10-20T00:00"
                                           class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label><br>
                                    <select name="status" id="" class="form-control">
                                        <option value="complete">Completo</option>
                                        <option value="pendent">Pendente</option>
                                        <option value="canceled">Cancelado</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="orderKey">Código de encomenda</label><br>
                                    <input type="text" name="orderKey" value="a6rh1sr6b0rt4st4r7861zb1s"
                                           class="form-control" readonly>
                                </div>
                            </form>
                        </div>
                        <div class="deliveryAddress">
                            <h4>Dados de entrega</h4>
                            <label>Proprietário:</label><span> sfwrer</span><br>
                            <label>Email: </label><span> sfwrer</span><br>
                            <label>Nome da Rua: </label><span> sfwrer</span><br>
                            <label>Número: </label><span> sfwrer</span><br>
                            <label>Código Postal: </label><span> sfwrer</span><br>
                            <label>Cidade: </label><span> sfwrer</span><br>
                            <label>País: </label><span> sfwrer</span><br>
                        </div>
                    </div>

                </div>
                <div class="publish">
                    <div class="h4">
                        <h4>Publicar</h4>
                    </div>

                    <div class="buttons">
                        <a href="#" class="btn btn-success">Salvar alteração</a><br>
                        <a href="#" class="btn btn-danger">Eliminar pedido</a>
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
                    @for ($i = 1; $i <= 5; $i++)
                        <tr class="row_order_table">
                            <td class="destaque">515</td>
                            <td class="geral"><a href="#">
                                    <div class="span">
                                        <a href="/secret/management/product/1">
                                            Lenovo Newest Flagship Chromebook, 14''
                                            FHD Lenovo Newest Flagship Chromebook
                                        </a>
                                    </div></a>
                            </td>
                            <th>Lenovo ThinkPad X1</th>
                            <th>Fulano</th>
                            <td class="geral">2</td>
                            <td class="destaque">€50.99</td>
                        </tr>
                    @endfor
                    </tbody>

                </table>

            </div>
        </div>
    </div>

@endsection
