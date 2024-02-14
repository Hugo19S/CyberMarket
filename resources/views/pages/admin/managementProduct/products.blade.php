@extends('layouts.admin.main')

@section('title', 'Management Product')

@section('content')

    <div>

        <div class="content-data">
            <h1>Gestão de Produtos</h1>
            <a class="btn btn-success btn-add-product" href="/secret/product/add">Adicionar Produto</a>
            <div class="management">
                @foreach ($allAddedProduct['results'] as $product)
                    <x-product-box
                        image="{{$product['imagens'][0]['imagem_url']}}"
                        classDef="box-product"
                        price="{{$product['preco']}}"
                        name="{{$product['nome_produto']}}"
                        owner="{{$product['vendedor']}}"
                        category="{{$product['tipo_produto']['categoria']['nome_categoria']}}"
                        id="{{$product['produto_id']}}"
                    />
                @endforeach
            </div>
        </div>
    </div>

@endsection
