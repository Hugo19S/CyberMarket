@extends('layouts.admin.main')

@section('title', 'Home')

@section('content')

<div>

    <div class="last_additions">
        <h3>Últimos 5 produtos adicionados</h3>
        <div class="additions">
            @for ($i = 1; $i <= 5; $i++) <div class="productDetails">
                <img src="/img/laptops.png" alt="">
        </div>
        @endfor
    </div>
</div>
<div class="last_orders">
    <h3>Últimos 5 pedidos</h3>
    <div class="orders">
        @for ($i = 1; $i <= 5; $i++) 
            <div class="productDetails">
                <img src="/img/laptops.png" alt="">
            </div>
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