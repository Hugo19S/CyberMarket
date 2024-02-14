@props([
    'image',
    'classDef',
    'price',
    'name',
    'owner',
    'category',
    'id'
])

<div class="productDetails {{$classDef}}">
    <div class="contentRelative">
        <div class="imagDiv">
            <a href="/secret/management/product/details/{{$id}}">
                <img src="{{$image}}" alt="product image">
            </a>
        </div>
        <div class="productInfos">
            <div class="price">{{$price}}</div>
            <div class="productName">
                {{$name}}
            </div>
            <div class="productCategory">
                <span>Categoria:</span>
                <div class="categoryDiv">
                    <span class="category">{{$category}}</span>
                </div>
            </div>
            <div class="productProvider">
                <span>Vendedor:</span>
                <div class="categoryDiv">
                    <span class="category">{{$owner}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="containerButtons">
        <div class="buttonsOrg">
            <a href="/secret/product/edit/{{$id}}" class="btn btn-primary">Editar</a>
            <a href="/secret/product/delete/{{$id}}" class="btn btn-danger">Eliminar</a>
        </div>
    </div>
</div>
