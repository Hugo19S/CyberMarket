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
                    <form class="lg:mt-12">
                        <div>
                            <h2 class="text-2xl font-extrabold text-[#333]">Detalhe de envio</h2>

                            <div class="grid grid-cols-2 gap-6 mt-8">

                                <input type="text" placeholder="Nome"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>

                                <input type="email" placeholder="Email"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                <input type="text" placeholder="Morada"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                <input type="number" placeholder="Número de contribuinte"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                <input type="number" placeholder="Telemovel"
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
                                <input type="text" placeholder="Titutal do cartão"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                <div class="flex bg-white border-b-2 focus-within:border-[#333] overflow-hidden">
                                    <input type="number" placeholder="Número do cartão"
                                           class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                </div>
                                <div class="grid grid-cols-2 gap-6">
                                    <input type="number" placeholder="EXP."
                                           class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                                    <input type="number" placeholder="CVV"
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
                                <input type="number" placeholder="Número de Telemóvel"
                                       class="px-2 py-3.5 bg-white text-[#333] w-full text-sm outline-none rounded-md border bg-white ring-blue-600 focus:ring-1"/>
                            </div>


                        </div>
                        <div class="flex flex-wrap gap-4 mt-8">
                            <button type="button"
                                    onclick="window.location.href = '{{ route('shopping.cart') }}'"
                                    class="min-w-[150px] px-6 py-3.5 text-sm bg-gray-100 text-[#333] rounded-md hover:bg-gray-200">
                                Voltar
                            </button>

                            <button type="button"
                                    class="min-w-[150px] px-6 py-3.5 text-sm bg-[#333] text-white rounded-md hover:bg-[#111]">
                                Confirmar o pagamento $240
                            </button>
                        </div>
                    </form>
                </div>

                <div class="bg-gray-100 lg:h-screen lg:sticky lg:top-0">
                    <div class="relative h-full">
                        <div class="p-8 lg:overflow-auto lg:h-[calc(100vh-60px)] max-lg:mb-8">
                            <h2 class="text-2xl font-extrabold text-[#333]">Detalhes da Encomenda</h2>
                            <div class="space-y-6 mt-10">
                                <div class="grid sm:grid-cols-2 items-start gap-6">
                                    <div class="max-w-[190px] px-4 py-6 shrink-0 bg-gray-200 rounded-md">
                                        <img src='https://readymadeui.com/images/product10.webp'
                                             class="w-full object-contain"/>
                                    </div>
                                    <div>
                                        <h3 class="text-base text-[#333]">Naruto: Split Sneakers</h3>
                                        <ul class="text-xs text-[#333] space-y-2 mt-2">
                                            <li class="flex flex-wrap gap-4">Size <span class="ml-auto">37</span></li>
                                            <li class="flex flex-wrap gap-4">Quantity <span class="ml-auto">2</span>
                                            </li>
                                            <li class="flex flex-wrap gap-4">Total Price <span
                                                    class="ml-auto">$40</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid sm:grid-cols-2 items-start gap-6">
                                    <div class="max-w-[190px] px-4 py-6 shrink-0 bg-gray-200 rounded-md">
                                        <img src='https://readymadeui.com/images/product11.webp'
                                             class="w-full object-contain"/>
                                    </div>
                                    <div>
                                        <h3 class="text-base text-[#333]">VelvetGlide Boots</h3>
                                        <ul class="text-xs text-[#333] space-y-2 mt-2">
                                            <li>Size <span class="float-right">37</span></li>
                                            <li>Quantity <span class="float-right">2</span></li>
                                            <li>Total Price <span class="float-right">$40</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid sm:grid-cols-2 items-start gap-6">
                                    <div class="max-w-[190px] px-4 py-6 shrink-0 bg-gray-200 rounded-md">
                                        <img src='https://readymadeui.com/images/product14.webp'
                                             class="w-full object-contain"/>
                                    </div>
                                    <div>
                                        <h3 class="text-base text-[#333]">Echo Elegance</h3>
                                        <ul class="text-xs text-[#333] space-y-2 mt-2">
                                            <li>Size <span class="float-right">37</span></li>
                                            <li>Quantity <span class="float-right">2</span></li>
                                            <li>Total Price <span class="float-right">$40</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-0 bottom-0 bg-gray-200 w-full p-4">
                            <h4 class="flex flex-wrap gap-4 text-base text-[#333] font-bold">Total <span
                                    class="ml-auto">$240.00</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cardDetails = document.getElementById('cardDetails');
            const mbwayDetails = document.getElementById('mbwayDetails');

            document.querySelectorAll('input[name="payment_method"]').forEach(function (radio) {
                radio.addEventListener('change', function () {
                    if (this.id === 'card') {
                        cardDetails.classList.remove('hidden');
                        mbwayDetails.classList.add('hidden');
                    } else if (this.id === 'mbway') {
                        cardDetails.classList.add('hidden');
                        mbwayDetails.classList.remove('hidden');
                    }
                });
            });
        });
    </script>

@endsection
