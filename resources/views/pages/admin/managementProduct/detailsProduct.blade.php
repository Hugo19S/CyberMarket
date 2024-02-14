@extends('layouts.admin.main')

@section('title', 'Gerir compras')

@section('content')

    <div class="containerProductDetails">
        <h1>Detalhes do produto</h1>
        <div class="compartment1">
            <div class="compartmentImage">
                <img src="{{$allAddedProduct['produto']['imagens'][0]['imagem_url']}}" alt="{{$allAddedProduct['produto']['nome_produto']}}">
            </div>
            <div class="compartmentData">
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">Nome do produto</th>
                        <td>{{$allAddedProduct['produto']['nome_produto']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Categoria</th>
                        <td>{{$allAddedProduct['produto']['tipo_produto']['categoria']['nome_categoria']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tipo de produto</th>
                        <td>{{$allAddedProduct['produto']['tipo_produto']['nome_tipo_produto']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">SKU</th>
                        <td>{{$allAddedProduct['produto']['sku']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Vendedor</th>
                        <td>{{$allAddedProduct['produto']['vendedor']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Fabricante</th>
                        <td>Por adicionar</td>
                    </tr>
                    <tr>
                        <th scope="row">Modelo</th>
                        <td>{{$allAddedProduct['produto']['modelo']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Preço</th>
                        <td>{{$allAddedProduct['produto']['preco']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Quantidade</th>
                        <td>{{$allAddedProduct['produto']['quantidade']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Data de criação</th>
                        <td>{{$allAddedProduct['produto']['data_criacao']}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="product-description">Descrição</label>
            <textarea class="form-control textareaDetails" id="description" rows="3">{{$allAddedProduct['produto']['descricao']}}</textarea>
        </div>

    </div>

@endsection
