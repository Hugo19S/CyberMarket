@extends('layouts.client.layout')

@section('content')

    <div class="py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class=" flex flex-col md:flex-row -mx-4 p-[10px]">
                {{-- DIV 1 --}}
                <div class="bg-white custom-margins custom-border md:flex-1 px-4">
                    <div class="h-auto sm:h-auto rounded-lg bg-white dark:bg-white mb-4">
                        <img class="w-full h-auto object-cover"
                             src="{{ asset( $produto['produto']['imagens'][0]['imagem_url']) }}"
                             alt="Product Image">
                    </div>

                    <div>
                        <span class="font-bold text-black-700 dark:text-black-300">Descrição do Produto:</span>
                        <p class="text-black-600 dark:text-black-300 text-sm mt-2">
                            {{$produto['produto']['descricao']}}
                        </p>
                    </div>
                </div>
                {{-- END DIV 1 --}}

                {{-- DIV 2 --}}
                <div class="second-div-product-detail custom-border md:flex-1 px-4 bg-white">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-black mb-2">Nome do Produto</h2>
                    <p class="text-black-600 dark:text-black-300 text-sm mb-4">
                        {{$produto['produto']['nome_produto']}}
                    </p>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-black-700 dark:text-black-300">Preço:</span>
                            <span class="text-black-600 dark:text-black-300">{{$produto['produto']['preco']}}€</span>

                        </div>

                    </div>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-black-700 dark:text-black-300">Referência:</span>
                            <span class="text-black-600 dark:text-black-300">{{$produto['produto']['sku']}}</span>

                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-black-700 dark:text-black-300">Fabricante:</span>
                            <span class="text-black-600 dark:text-black-300">{{$produto['produto']['fabricante']['nome_fabricante']}}</span>
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-black-700 dark:text-black-300">Vendido Por:</span>
                            <span class="text-black-600 dark:text-black-300">{{$produto['produto']['vendedor']}}</span>

                        </div>
                    </div>


                    <div class="flex -mx-2 mb-4">
                        <div class="quantity-btn">

                            <div class="inline-flex items-center">
                                <button class="bg-white rounded-l border text-gray-600 hover:bg-gray-100
                                            active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200"
                                        onclick="minusQuantity()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M20 12H4"/>
                                    </svg>
                                </button>
                                <div class="bg-gray-100 border-t border-b border-gray-100 text-gray-600
                                            hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none">
                                    <span id="product-quantity">1</span>
                                </div>
                                <button
                                    class="bg-white rounded-r border text-gray-600
                                            hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50
                                            inline-flex items-center px-2 py-1 border-r border-gray-200"
                                    onclick="plusQuantity()">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 4v16m8-8H4"/>
                                    </svg>
                                </button>

                            </div>

                            @auth
                                <div class="">

                                    <p class="btn-holder">
                                        <a href="{{ route('addproduct.to.cart', $produto['produto']['produto_id']) }}"
                                           class="inline-block bg-green-500 text-white py-1 px-3 rounded-full hover:bg-green-600 transition-colors">
                                            <i class="fas fa-cart-plus mr-1"></i> Adicionar
                                        </a>
                                    </p>

                                </div>
                            @else
                                <div class="">
                                    <p class="btn-holder">
                                        <a href="/login"
                                           class="inline-block bg-green-500 text-white py-1 px-3 rounded-full hover:bg-green-600 transition-colors">
                                            <i class="fas fa-cart-plus mr-1"></i> Adicionar
                                        </a>
                                    </p>
                                </div>
                            @endauth

                        </div>
                    </div>
                </div>

                {{-- END DIV 2 --}}
            </div>
        </div>
    </div>

    <script>

        function plusQuantity() {
            var productQuantity = parseInt(document.getElementById('product-quantity').innerText, 10);
            if (!isNaN(productQuantity) && productQuantity > 0) {
                document.getElementById('product-quantity').innerText = productQuantity + 1;
            }
        }

        function minusQuantity() {
            var productQuantity = parseInt(document.getElementById('product-quantity').innerText, 10);
            if (!isNaN(productQuantity) && productQuantity > 1) {
                document.getElementById('product-quantity').innerText = productQuantity - 1;
            }
        }

        function updateCartIcon() {
            var productQuantity = parseInt(document.getElementById('product-quantity').innerText, 10);
            const carrinhoIcon = document.getElementById('carrinho-icon');
            const quantidadeCarrinho = document.getElementById('quantidade-carrinho');

            if (!isNaN(productQuantity) && productQuantity >= 0) {
                quantidadeCarrinho.textContent = productQuantity;
                carrinhoIcon.style.display = 'block';
            }
        }

    </script>

@endsection

