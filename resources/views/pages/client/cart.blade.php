@extends('layouts.client.layout')

@section('content')
    <div class="justify-center flex-1 px-1 py-6 mx-auto max-w-7xl lg:py-4 md:px-6">
        <h2 class="mb-10 text-4xl font-bold ml-8 mt-3 dark:text-gray-400 pl-2"
            style="border-left: solid 4px #9FC5F8;">Carrinho de Compras</h2>
        <div class="lg:flex lg:gap-4 sm:mt-10">
            <div class="w-full lg:w-8/12">
                <div class="px-10 ">

                    {{--BEGIN PRODUCT DIV--}}

                    @php $total = 0 @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="custom-border bg-white relative flex flex-wrap items-center pb-4 mb-4 -mx-4
                                  dark:border-gray-700 xl:justify-between border-opacity-40"
                                 rowId="{{ $id }}">
                                <div class="w-full h-full mb-2 lg:mb-0 h-96 md:h-44 md:w-44">
                                    <a href="/produtos/{{$details['product_id']}}">
                                        <img src="{{$details['image']['imagem_url']}}"
                                             alt=""
                                             class="object-cover w-full h-full">
                                    </a>
                                </div>

                                <div class="w-full px-4 mb-6 md:w-auto xl:mb-0">
                                    <a class="block mb-5 text-xl font-medium dark:text-gray-400 hover:underline"
                                       href="/produtos/{{$details['product_id']}}">
                                        {{ $details['name'] }}</a>
                                    <div class="flex flex-wrap">
                                        <p class="mr-4 text-sm font-medium">
                                            <span class="dark:text-gray-400">{{ $details['sku'] }}</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="w-full px-4 xl:w-auto">
                                    <span class="text-xl font-medium text-cyan-500 dark:text-gray-400 ">
                                        <span>{{ $details['price'] }}</span><span class="text-sm"> €</span>
                                    </span>
                                </div>

                                <button class="absolute top-2 right-2 text-gray-300 lg:mt-2 lg:mr-2 hover:text-gray-600
                                dark:text-gray-400
                                        dark:hover:text-red-500 delete-product" onclick="deleteProduct($(this))">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor"
                                         class="w-6 h-6 bi bi-x-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647
                                        2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293
                                        8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </button>

                            </div>
                            @php $total = $total + $details['price'] @endphp
                        @endforeach
                    @endif

                    {{--END PRODUCT DIV--}}
                </div>
            </div>

            <div class="w-full lg:w-4/12 custom-border bg-white mt-5 lg:mt-0" style="height: fit-content">
                <div class="px-6 mb-14">
                    <div>
                        <h2 class="mb-6 text-3xl font-bold dark:text-gray-400">Sumário</h2>
                        <div
                            class="flex items-center justify-between px-10 py-4 mb-3 font-medium leading-8 bg-gray-100
                                bg-opacity-50 border dark:text-gray-400 dark:border-gray-800 rounded-xl">
                            <span>Subtotal</span>
                            <span class="flex items-center text-xl">
                                    <span>{{$total}}</span>
                                    <span class="mr-2 text-base">€</span>
                                </span>
                        </div>
                        <div
                            class="flex items-center justify-between px-10 py-4 mb-3 font-medium leading-8 bg-gray-100 bg-opacity-50
                                border dark:text-gray-400 dark:border-gray-800 rounded-xl">
                            <span>Envio</span>
                            <span class="flex items-center text-xl">
                                    <span>0,00</span>
                                <span class="mr-2 text-base"> €</span>
                                </span>
                        </div>
                        <div
                            class="flex items-center justify-between px-10 py-4 mb-6 font-medium leading-8 bg-gray-100 border
                                dark:text-gray-400 dark:border-gray-800 rounded-xl">
                            <span>Total</span>
                            <span class="flex items-center text-xl text-cyan-500 dark:text-cyan-400">
                                    <span>{{$total}}</span>
                                    <span class="mr-2 text-base"> €</span>
                                </span>
                        </div>
                        <a class="inline-block w-full px-6 py-4 text-lg font-medium leading-6 tracking-tighter text-center text-white
                            bg-cyan-500 lg:w-auto hover:bg-cyan-600 focus:ring-2 focus:ring-cyan-500 focus:ring-opacity-50 rounded-xl"
                           href="/checkout">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">

        $(".edit-cart-info").change(function (e) {
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '{{ route('update.sopping.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("div").attr("rowId"),
                },
                success: function (response) {
                    deleteProduct(ele);
                }
            });
        });

        $(document).on("click", ".delete-product", function (e) {
            e.preventDefault();
            var ele = $(this);

            if (confirm("Do you really want to delete?")) {
                deleteProduct(ele);
            }
        });

        function deleteProduct(ele) {
            var rowId = ele.parents("div").attr("rowId");

            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: rowId
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }

    </script>

@endsection
