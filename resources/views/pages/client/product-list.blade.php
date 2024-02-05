@extends('layouts.client.layout')

@section('content')

    <div class="product-list-main-container justify-center items-center">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4
             xl:grid-cols-5 gap-8">

            {{-- @foreach($resultados as $produto)
                 <x-product-card :produto="$produto"></x-product-card>
             @endforeach--}}

            @php
                $tipo = isset($tipo) ? $tipo : 'pesquisa';
            @endphp

            @if ($tipo === 'categoria')
                @foreach($produtos as $produto)
                    <x-product-card :produto="$produto"/>
                @endforeach
            @else
                @foreach($resultados as $produto)
                    <x-product-card :produto="$produto"/>
                @endforeach
            @endif

        </div>
    </div>

@endsection
