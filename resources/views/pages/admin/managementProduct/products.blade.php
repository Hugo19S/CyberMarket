@extends('layouts.admin.main')

@section('title', 'Management Product')

@section('content')

    <div>

        <div class="content-data">
            <h1>Gestão de Produtos</h1>
            <a class="btn btn-success btn-add-product" href="/secret/product/add">Adicionar Produto</a>
            <div class="management">
                @for ($i = 1; $i <= 16; $i++)
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
    </div>

@endsection
