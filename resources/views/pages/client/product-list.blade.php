@extends('layouts.client.layout')

@section('content')

    {{--<div class="product-list-main-container justify-center items-center">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4
         xl:grid-cols-5 gap-8 ">
            <!-- Card 1 -->
            <x-product-card></x-product-card>
            <x-product-card></x-product-card>
            <x-product-card></x-product-card>
            <x-product-card></x-product-card>
            <x-product-card></x-product-card>
            <x-product-card></x-product-card>
            <x-product-card></x-product-card>
            <x-product-card></x-product-card>
            <x-product-card></x-product-card>
            <x-product-card></x-product-card>
        </div>
    </div>--}}

    @foreach ($produtos as $produto)
        <p>Produto: {{ $produto['nome_produto'] }}</p>
        <p>Descrição: {{ $produto['preco'] }}</p>
        <!-- Adicione outros campos que você deseja exibir -->
        <hr>
    @endforeach
@endsection
