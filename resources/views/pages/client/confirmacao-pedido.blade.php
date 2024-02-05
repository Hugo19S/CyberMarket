<!-- resources/views/pages/client/confirmacao-pedido.blade.php -->

@extends('layouts.client.layout')

@section('content')

    <div class="py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Conteúdo da Página de Confirmação do Pedido -->

            <div class="bg-white custom-margins custom-border p-[10px]">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-black mb-2">Confirmação do Pedido</h2>
                <p class="text-black-600 dark:text-black-300 text-sm mb-4">
                    Obrigado por fazer o pedido! Confira os detalhes abaixo.
                </p>

                <!-- Detalhes do Pedido -->
                <div class="mb-4">
                    <span class="font-bold text-black-700 dark:text-black-300">Número do Pedido:</span>
                    <span class="text-black-600 dark:text-black-300">{{--{{ $numeroPedido }}--}}</span>
                </div>

                <div class="mb-4">
                    <span class="font-bold text-black-700 dark:text-black-300">Total do Pedido:</span>
                    <span class="text-black-600 dark:text-black-300">{{--{{ $totalPedido }}--}}€</span>
                </div>

                <div class="mb-4">
                    <span class="font-bold text-black-700 dark:text-black-300">Método de Pagamento:</span>
                    <span class="text-black-600 dark:text-black-300">{{--{{ $metodoPagamento }}--}}</span>
                </div>

                <!-- Outras informações do pedido podem ser adicionadas aqui -->

                <p class="text-black-600 dark:text-black-300 text-sm mt-4">
                    Seu pedido será processado em breve. Agradecemos por escolher nossa loja!
                </p>
            </div>

        </div>
    </div>

@endsection
