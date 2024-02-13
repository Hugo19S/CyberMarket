@extends('layouts.client.layout')

@section('content')
    <div class="bg-white">
        <div class="max-lg:max-w-xl mx-auto w-full">
            <div class="grid lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 max-lg:order-1 p-6 max-w-4xl mx-auto w-full">
                    <div class="text-center max-lg:hidden">
                        <h2 class="text-3xl font-extrabold text-[#333] inline-block border-b-4 border-[#333] pb-1">
                            Checkout</h2>
                    </div>

                    <form class="lg:mt-12" id="checkoutForm" action="{{ route('checkout.process') }}" method="POST">
                        @csrf

                        <input type="hidden" name="tipo_pagamento" id="tipo_pagamento" value="1">

                        <div>
                            <h2 class="text-2xl font-extrabold text-[#333]">Detalhe de envio</h2>

                            <div class="grid grid-cols-2 gap-6 mt-8">

                                <input type="text" placeholder="Nome" value="{{$cliente->nome_cliente}}"
                                       name="nome_cliente"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>

                                <input type="email" placeholder="Email" value="{{$cliente->email}}" name="email"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                <input type="text" placeholder="Morada" value="{{$cliente->morada}}" name="morada"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                <input type="number" placeholder="Número de contribuinte" value="{{$cliente->nif}}"
                                       name="nif"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                <input type="number" placeholder="Telemovel" value="{{$cliente->telemovel}}"
                                       name="telemovel"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                            </div>
                        </div>
                        <div class="mt-12">
                            <h2 class="text-2xl font-extrabold text-[#333]">Métodos de Pagamento</h2>

                            <div class="grid gap-4 sm:grid-cols-2 mt-8">
                                <div class="flex items-center">
                                    <input type="radio" name="payment_method" id="card" class="w-5 h-5 cursor-pointer"
                                    />
                                    <label for="card" class="ml-4 flex gap-2 cursor-pointer">
                                        <img src="https://readymadeui.com/images/visa.webp" class="w-12" alt="card1"/>
                                        <img src="https://readymadeui.com/images/american-express.webp" class="w-12"
                                             alt="card2"/>
                                        <img src="https://readymadeui.com/images/master.webp" class="w-12" alt="card3"/>
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="payment_method" id="mbway"
                                           class="w-5 h-5 cursor-pointer"/>
                                    <label for="mbway" class="ml-4 flex gap-2 cursor-pointer">
                                        <img src="{{asset('images/mbway.png')}}" class="w-12" alt="mbway"/>
                                    </label>
                                </div>
                            </div>

                            <!-- Inputs para Cartão de Crédito / Débito -->
                            <div class="grid gap-6 mt-8 hidden" id="cardDetails">
                                <input type="text" placeholder="Titutal do cartão" id="titular_cartao"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                <div class="flex bg-white border-b-2 focus-within:border-[#333] overflow-hidden">
                                    <input type="number" placeholder="Número do cartão" id="numero_cartao"
                                           class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                </div>
                                <div class="grid grid-cols-2 gap-6">
                                    <input type="number" placeholder="EXP." id="expiracao"
                                           class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                    <input type="number" placeholder="CVV" id="cvv"
                                           class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                </div>
                                <div class="flex items-center">
                                    <input id="remember-me" name="remember-me" type="checkbox"
                                           class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"/>
                                    <label for="remember-me" class="ml-3 block text-sm">
                                        I accept the <a href="javascript:void(0);"
                                                        class="text-blue-600 font-semibold hover:underline ml-1">Terms
                                            and Conditions</a>
                                    </label>
                                </div>
                            </div>

                            <!-- Input para MBWAY -->
                            <div id="mbwayDetails" class="mt-8 hidden">
                                <input type="number" placeholder="Número de Telemóvel" id="numero_telemovel"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                            </div>

                        </div>
                        <div class="flex flex-wrap gap-4 mt-8">
                            <button type="button"
                                    onclick="window.location.href = '{{ route('shopping.cart') }}'"
                                    class="min-w-[150px] px-6 py-3.5 text-sm bg-gray-100 text-[#333] rounded-md hover:bg-gray-200">
                                Voltar
                            </button>

                            <button type="submit" onclick="return checkPaymentAndForm()"
                                    class="min-w-[150px] px-6 py-3.5 text-sm bg-green-500 text-white rounded-md hover:bg-[#111]">
                                Efetuar Pagamento
                            </button>

                        </div>
                    </form>
                </div>

                <div class="bg-gray-100 lg:h-screen lg:sticky lg:top-0">
                    <div class="relative h-full">
                        <div class="p-8 lg:overflow-auto lg:h-[calc(100vh-60px)] max-lg:mb-8">
                            <h2 class="text-2xl font-extrabold text-[#333]">Detalhes da Encomenda</h2>
                            <div class="space-y-6 mt-10">

                                @php $total = 0 @endphp
                                @foreach(session('cart') as $item)
                                    <div class="grid sm:grid-cols-2 items-start gap-6">
                                        <div class="max-w-[190px] px-4 py-6 shrink-0 bg-gray-200 rounded-md">
                                            <img src="{{asset($item['image']['imagem_url'])}}"
                                                 class="w-full object-contain"/>
                                        </div>
                                        <div>
                                            <h3 class="text-base text-[#333]">{{$item['name']}}</h3>
                                            <ul class="text-xs text-[#333] space-y-2 mt-2">
                                                <li>Quantidade <span class="float-right">{{$item['quantity']}}</span>
                                                </li>
                                                <li>Preço<span class="float-right">{{$item['price']}} €</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{$total = $total + $item['price']}}
                                @endforeach
                                @php session()->put('total', $total); @endphp
                            </div>
                        </div>
                        <div class="absolute left-0 bottom-0 bg-gray-200 w-full p-4">
                            <h4 class="flex flex-wrap gap-4 text-base text-[#333] font-bold">Total <span
                                    class="ml-auto">{{$total}}€</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cardDetails = document.getElementById('cardDetails');
            const mbwayDetails = document.getElementById('mbwayDetails');

            document.querySelectorAll('input[name="payment_method"]').forEach(function (radio) {
                radio.addEventListener('change', function () {
                    if (this.id === 'card') {
                        cardDetails.classList.remove('hidden');
                        mbwayDetails.classList.add('hidden');
                        // Atualizar o tipo de pagamento para cartão (valor 3)
                        document.getElementById('tipo_pagamento').value = 3;
                    } else if (this.id === 'mbway') {
                        cardDetails.classList.add('hidden');
                        mbwayDetails.classList.remove('hidden');
                        // Atualizar o tipo de pagamento para MBWay (valor 2)
                        document.getElementById('tipo_pagamento').value = 2;
                    }
                });
            });
        });
    </script>

    <script>
        function checkPaymentAndForm() {

            let nome_cliente = document.forms["checkoutForm"]["nome_cliente"].value;
            let email = document.forms["checkoutForm"]["email"].value;
            let morada = document.forms["checkoutForm"]["morada"].value;
            let nif = document.forms["checkoutForm"]["nif"].value;
            let telemovel = document.forms["checkoutForm"]["telemovel"].value;

            if (nome_cliente === "" || email === "" || morada === "" || nif === "" || telemovel === "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Falta informação',
                    text: 'Preencha todos os campos obrigatórios para efetuar o pagamento.',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                });
                return false;
            }

            let payment_method = document.querySelector('input[name="payment_method"]:checked');

            if (!payment_method) {
                Swal.fire({
                    icon: 'error',
                    title: 'Método de pagamento inválido',
                    text: 'Selecione um método de pagamento para continuar.',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                });
                return false;
            }

            if (payment_method.id === 'card') {
                let titular_cartao = document.getElementById("titular_cartao").value;
                let numero_cartao = document.getElementById("numero_cartao").value;
                let expiracao = document.getElementById("expiracao").value;
                let cvv = document.getElementById("cvv").value;

                if (titular_cartao === "" || numero_cartao === "" || expiracao === "" || cvv === "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Informação do cartão inválida',
                        text: 'Preencha todos os campos do cartão para continuar.',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    });
                    return false;
                }
            } else if (payment_method.id === 'mbway') {
                let numero_telemovel = document.getElementById("numero_telemovel").value;

                if (numero_telemovel === "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Número de telemóvel inválido',
                        text: 'Preencha o número de telemóvel para continuar.',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    });
                    return false;
                }
            }

            return true;
        }
    </script>

@endsection
