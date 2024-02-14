@extends('layouts.admin.main')

@section('title', 'Edit Product')

@section('content')

    <div class="productRegister">
        <div id="register" class="col-md-6 offset-md-3">
            <h2>Editar produto</h2>
            <form action="/secret/product/addProduct/saveChanges/{{$id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="categoria">Categoria</label><br/>
                    <select name="categoria" id="categorySelect" class="form-control">
                        @foreach($allCategory['categorias'] as $category)
                            <option
                                value="{{$category['categoria_id']}}" {{$category['categoria_id'] == $product['produto']['tipo_produto']['categoria_id'] ? 'selected' : ''}}>
                                {{$category['nome_categoria']}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tipo_de_produto">Tipo de produto</label><br/>
                    <select name="tipo_de_produto" class="form-control" id="productTypeSelect">
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Nome do produto</label><br/>
                    <input type="text" id="name" name="name" class="form-control"
                           value="{{$product['produto']['nome_produto']}}">
                </div>
                <div class="form-group">
                    <label for="sku">Sku</label><br/>
                    <input type="text" id="sku" name="sku" class="form-control" value="{{$product['produto']['sku']}}">
                </div>
                <div class="form-group">
                    <label for="fabricante">Fabricante</label><br/>
                    <select name="fabricante" class="form-control">
                        @foreach($allFabricante['produtos'] as $fabricante)
                            <option value="{{$fabricante['fabricante_id']}}" {{$fabricante['fabricante_id'] == $product['produto']['fabricante_id'] ? 'selected' : ''}}>
                                {{$fabricante['nome_fabricante']}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="vendedor">Vendedor</label><br/>
                    <input type="text" id="vendedor" name="vendedor" class="form-control"
                           value="{{$product['produto']['vendedor']}}">
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo</label><br/>
                    <input type="text" id="modelo" name="modelo" class="form-control"
                           value="{{$product['produto']['modelo']}}">
                </div>
                <div class="form-group">
                    <label for="preco">Preço</label><br/>
                    <input type="number" id="preco" name="preco" class="form-control"
                           value="{{$product['produto']['preco']}}">
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label><br/>
                    <input type="number" id="quantidade" name="quantidade" class="form-control"
                           value="{{$product['produto']['quantidade']}}">
                </div>
                <div class="form-group">
                    <label for="descricao">Descriçao</label><br/>
                    <textarea name="descricao" id="description"
                              class="form-control">{{$product['produto']['descricao']}}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Imagem</label><br/>
                    <input type="file" id="image" name="image" accept="image/*" class="form-control-file"><br>
                    @if($product['produto']['imagens'][0]['imagem_url'])
                        <img src="{{ $product['produto']['imagens'][0]['imagem_url'] }}" alt="Imagem"
                             class="img-thumbnail"
                             style="max-width: 100px">
                    @endif
                </div>
                <input type="submit" class="btn btn-success" value="Gravar Alteração" style="right: 0">
            </form>
        </div>
    </div>
    <script src="/js/admin/productTipe.js"></script>
@endsection
