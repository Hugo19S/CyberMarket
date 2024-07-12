@extends('layouts.admin.main')

@section('title', 'Add Product')

@section('content')

    <div class="productRegister">
        <div id="register" class="col-md-6 offset-md-3">
            <h2>Adicionar produto</h2>
            <form id="productForm" action="/secret/product/addProduct/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="categoria">Categoria</label><br/>
                    <select name="categoria" id="categorySelect" class="form-control">
                        @foreach($allCategory['categorias'] as $category)
                            <option value="{{$category['categoria_id']}}">
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
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sku">Sku</label><br/>
                    <input type="text" id="sku" name="sku" class="form-control">
                </div>
                <div class="form-group">
                    <label for="fabricante">Fabricante</label><br/>
                    <select name="fabricante" class="form-control">
                        @foreach($allFabricante['produtos'] as $fabricante)
                            <option value="{{$fabricante['fabricante_id']}}">
                                {{$fabricante['nome_fabricante']}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="vendedor">Vendedor</label><br/>
                    <input type="text" id="vendedor" name="vendedor" class="form-control">
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo</label><br/>
                    <input type="text" id="modelo" name="modelo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="preco">Preço</label><br/>
                    <input type="number" id="preco" name="preco" class="form-control">
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label><br/>
                    <input type="number" id="quantidade" name="quantidade" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descricao">Descriçao</label><br/>
                    <textarea name="descricao" id="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Imagem</label><br/>
                    <input type="file" id="image" name="image" accept="image/*" class="form-control-file">
                </div>
                <input type="submit" class="btn btn-success" value="Adicionar">
            </form>
        </div>
    </div>
    <script src="/js/admin/productTipe.js"></script>
    <script>

    </script>


@endsection
