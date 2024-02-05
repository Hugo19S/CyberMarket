<!-- resources/views/pages/client/metodo-pagamento.blade.php -->

@extends('layouts.client.layout')

@section('content')

    <div class="py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Conteúdo da Página do Método de Pagamento -->

            <div class="flex flex-col -mx-4 p-[10px]">
                <div class="bg-white custom-margins custom-border md:flex-1 px-4">
                    <!-- Seção de Informações sobre o Método de Pagamento -->
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-black mb-2">Método de Pagamento</h2>
                    <p class="text-black-600 dark:text-black-300 text-sm mb-4">
                        Escolha o método de pagamento desejado.
                    </p>

                    <!-- Formulário para Selecionar o Método de Pagamento -->
                    <form action="{{--{{ route('finalizar-pedido') }}--}}" method="POST">
                        @csrf

                        <!-- Opção Cartão Débito/Crédito Visa -->
                        <label class="flex items-center mb-4">
                            <input type="radio" name="metodo_pagamento" value="cartao_visa" required>
                            <span class="ml-2">Cartão Débito/Crédito Visa</span>
                        </label>

                        <!-- Opção PayPal -->
                        <label class="flex items-center mb-4">
                            <input type="radio" name="metodo_pagamento" value="paypal" required>
                            <span class="ml-2">PayPal</span>
                        </label>

                        <!-- Opção Transferência Bancária -->
                        <label class="flex items-center mb-4">
                            <input type="radio" name="metodo_pagamento" value="transferencia_bancaria" required>
                            <span class="ml-2">Transferência Bancária</span>
                        </label>

                        <!-- Opção MBWAY -->
                        <label class="flex items-center mb-4">
                            <input type="radio" name="metodo_pagamento" value="mbway" required>
                            <span class="ml-2">MBWAY</span>
                        </label>

                        <button type="submit" class="w-full bg-green-900-900 dark:bg-green-600
                                    text-white py-2 px-4 rounded-full font-bold
                                    hover:bg-gray-800 dark:hover:bg-gray-700">
                            Finalizar Pedido
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
