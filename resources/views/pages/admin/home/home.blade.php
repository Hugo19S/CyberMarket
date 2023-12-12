@extends('layouts.admin.main')

@section('title', 'Home')

@section('content')

<div>

    <div class="last_additions">
        <h3>Últimos 5 produtos adicionados</h3>
        <div class="additions">
            @for ($i = 1; $i <= 5; $i++)
            <x-product-box
                image="/img/laptops.png"
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
    <div class="orders">
        @for ($i = 1; $i <= 5; $i++)
            <x-product-box
                image="/img/laptops.png"
                first_button="btn btn-success"
                second_button="btn btn-danger"
                text_btn1="Aceitar"
                text_btn2="Cancelar"
                btn1_href="#"
                btn2_href="#"
            />
        @endfor
    </div>
</div>
<div class="analytics_info">
    <h3>Analise de visita as páginas</h3>
    <div class="analytics">
        {{-- <div class="orderDetails">
            <img src="/img/laptops.png" alt="">
        </div>
        --}}

    </div>
</div>


</div>

@endsection
