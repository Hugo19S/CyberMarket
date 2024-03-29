@extends('layouts.client.layout')

@section('content')

    <section class="flex items-center py-16 font-poppins ">
        <div
            class="justify-center flex-1 max-w-4xl px-6 py-6 mx-auto bg-gray-100 rounded-md shadow-md dark:border-gray-900
            lg:py-10 lg:px-10 bg-white">
            <div class="mb-16 text-center">
                <h1
                    class="mb-6 text-2xl font-semibold leading-7 tracking-wide lg:text-4xl lg:leading-9">
                    Obrigado pela encomenda {{$nome_cliente}}!!</h1>
                <p class="text-lg">O numero da tua encomenda é: {{$pedido_id['pedido_id']}}</p>
            </div>
            <div class="max-w-4xl mx-auto mb-10">
                <h2 class="mb-4 text-xl font-medium">A tua encomenda:</h2>

                @foreach($cart as $item)
                    <div
                        class="p-10 mb-8 bg-gray-50 rounded-md shadow sm:flex sm:items-center xl:py-5 xl:px-12">
                        <a href="#" class="mr-6 md:mr-12">
                            <img class=" w-full lg:w-[80px] h-[200px] lg:h-[80px]  object-cover  mx-auto mb-6 sm:mb-0 "
                                 src=" {{$item['image']['imagem_url']}}"
                                 alt="dress">
                        </a>
                        <div>
                            <a class="inline-block mb-1 text-lg font-medium hover:underline dark:text-gray-400"
                               href="#">
                                {{$item['name']}}</a>
                            <div class="flex flex-wrap">

                                <p class="text-sm font-medium dark:text-gray-400">
                                    <span>Qtd:</span>
                                    <span class="ml-2 text-gray-400">{{$item['quantity']}}</span>
                                </p>

                                <p class="text-sm font-medium dark:text-gray-400">
                                    <span class="ml-2 text-gray-400">Preço:</span>
                                    <span class="ml-2 text-gray-400">{{$item['price']}}€</span>
                                </p>

                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
            <div class="max-w-4xl mx-auto ">
                <h2 class="mb-4 text-xl font-medium dark:text-gray-400 ">Detalhes da encomenda:</h2>
                <div class="grid grid-cols-1 gap-8 mb-10 lg:grid-cols-3">
                    <div
                        class="flex items-center justify-between px-10 py-3 font-medium leading-8 bg-gray-50 bg-opacity-50
                        rounded-md shadow dark:text-gray-400  font-heading ">
                        <span>Envio</span>
                        <span class="flex items-center">
                            <span class="text-xl">0,00</span>
                        <span class="ml-3 mr-1 text-sm">€</span>
                        </span>
                    </div>
                    <div
                        class="relative flex items-center justify-between px-10 py-3 font-medium leading-8 bg-gray-50
                        bg-opacity-50 rounded-md shadow dark:text-gray-400">
                        <div
                            class="absolute right-0 flex items-center justify-center">
                            <div
                                class="flex items-center justify-center text-lg font-bold text-blue-500 w-11 h-11">
                                @php $totalQuantity = count($cart) @endphp
                                {{$totalQuantity}}
                            </div>
                        </div>
                        <span class="mr-16">Produtos</span>
                    </div>
                    <div
                        class="flex items-center justify-between px-10 py-3 font-medium leading-8 bg-gray-50
                        rounded-md shadow font-heading">
                        <span>Total</span>
                        <span class="flex items-center text-blue-500 dark:text-blue-400">
                            <span class="text-xl">{{$totalPrice}}</span>
                            <span class="ml-3 mr-1 text-sm">€</span>
                        </span>
                    </div>
                </div>
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <button onclick="window.location.href = '{{ route('home') }}';"
                            class="w-full px-6 py-3 text-white border border-blue-500 rounded-md md:w-auto hover:text-gray-100
            bg-blue-600 dark:border-gray-800 dark:hover:bg-gray-800">
                        Voltar a comprar
                    </button>
                </div>

            </div>

        </div>
    </section>

@endsection
