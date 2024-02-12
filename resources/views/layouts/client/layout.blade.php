<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>
    <link rel="icon" href="images/favicon.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('/css/client_style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>

    <script src="{{asset('js/scripts.js')}}"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: '#9FC5F8',
                    },
                },
            },
        }
    </script>
    <title>Cybermarket | Encontra os melhores produtos</title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<body>
<div id="overlay" class="overlay hidden"></div>

{{-- CART BADGE --}}
<div id="carrinho-icon"
     class="absolute top-0 end-0 mt-1 mr-1 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center"
     style="display: none;">
    <span id="quantidade-carrinho" class="flex items-center justify-center h-full">
        0
    </span>
</div>


<nav style="background: #9FC5F8; width: 100%">


    {{-- MAIN CONTAINER NAVBAR --}}
    <div class="{{--max-w-screen-xl--}} flex flex-wrap items-center justify-between
    mx-auto p-4" style=" flex-grow: 1">

        {{-- MENU HAMBURGER e LOGO --}}
        <div class="flex items-center">
            <div class="order-2 ml-[10px]">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{asset('/images/cybermarket_logo.png')}}" class="h-8" alt="Cybermarket Logo"/>
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black">Cybermarket</span>
                </a>
            </div>

            <div class="order-1">
                <button data-sidebar-toggle="sidebar" type="button"
                        class="inline-flex items-center justify-center p-2
                        w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100
                        focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400
                        dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="sidebar" aria-expanded="false">
                    <span class="sr-only">Open sidebar menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- SEARCH BAR --}}
        <div class="search-custom-width">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar"
                       class="block w-full p-2 ps-10 text-sm text-gray-900 border
                        border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500
                        focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                        dark:focus:border-blue-500"
                       placeholder="O que está á procura?">

                <!-- Adicione um evento de submit ao formulário -->
                <form id="search-form" action="{{ route('product.search') }}" method="GET" class="hidden">
                    <input type="hidden" id="search-query" name="q" value="">
                </form>

            </div>
        </div>

        {{-- LOGIN + CARRINHO --}}
        <div class="login-cart-custom-order flex items-center space-x-3">

            @if(Auth::check())
                <form action="{{ route('api.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M3 10a7 7 0 1 1 14 0 7 7 0 0 1-14 0zm7-6a1 1 0 0 1 1 1v4a1 1 0 1 1-2 0V5a1 1 0 0 1 1-1zm1 9v1a1 1 0 0 1-2 0v-1a1 1 0 0 1 2 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                        Logout
                    </button>
                </form>
            @endif

            @auth
                {{ session('name') }}
            @endauth

            @auth
                <a href="/cliente/{{ session('id') }}" class="text-gray-900 relative">
                    <i class="fa-solid fa-user"></i>
                </a>
            @else
                <a href="/login" class="text-gray-900 relative">
                    <i class="fa-solid fa-user"></i>
                </a>
            @endauth

            <a href="{{ route('shopping.cart') }}" class="text-gray-900 relative">
                <i class="fa-solid fa-cart-shopping"></i>
                @auth
                    <span
                        class="badge text-bg-danger absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2">
                        @if(count((array) session('cart')) > 0)
                            {{ count((array) session('cart')) }}
                        @endif
                    </span>
                @endauth
            </a>
        </div>


    </div>
    {{-- END MAIN CONTAINER NAVBAR --}}
</nav>


{{-- SIDEBAR --}}
<div class="sidebar hidden" id="sidebar">
    <button data-sidebar-toggle="sidebar" type="button"
            class="ml-[10px] mt-[5px] inline-flex items-center justify-center p-2 w-10 h-10 text-sm
            text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200
            dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="sidebar" aria-expanded="false">
        <span class="sr-only">Close sidebar menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>

    <button data-collapse-toggle="navbar-hamburger" type="button"
            class="ml-[15px] mt-[15px] text-lg font-semibold whitespace-nowrap text-black"
            aria-controls="navbar-hamburger" aria-expanded="false"> Categorias
        <span class="sr-only">Open main menu</span>

    </button>

    {{-- Categories Menu --}}

    <div class="hidden w-full p-[5px]" id="navbar-hamburger">
        <ul class="flex flex-col font-medium mt-4 rounded-lg bg-[#6E8DC9] dark:border-gray-700">
            <li>
                <a href="{{--{{ route('categories.search', ['id' => $categoria['categoria_id']]) }}--}}"
                   class="block py-2 px-3 text-white bg-blue-700 rounded dark:bg-blue-600"
                   aria-current="page">Monitores</a>
            </li>
            <li>
                <a href="{{--{{ route('categories.search', ['id' => $categoria['categoria_id']]) }}--}}"
                   class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100
                   dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Impressoras</a>
            </li>
            <li>
                <a href="{{--{{ route('categories.search', ['id' => $categoria['categoria_id']]) }}--}}"
                   class="block py-2 px-3 text-gray-900 rounded
                   hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white
                   dark:hover:bg-gray-700 dark:hover:text-white">Desktops</a>
            </li>
            <li>
                <a href="{{--{{ route('categories.search', ['id' => $categoria['categoria_id']]) }}--}}"
                   class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100
                   dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Laptops</a>
            </li>

            {{--@foreach ($categorias['categorias'] as $categoria)
                <li>
                    <a href="{{ route('categories.search', ['id' => $categoria['categoria_id']]) }}"
                       class="block py-2 px-3 text-gray-900 rounded
                   hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white
                   dark:hover:bg-gray-700 dark:hover:text-white">{{$categoria['nome_categoria']}}</a>
                </li>
            @endforeach--}}
        </ul>
    </div>

    {{-- END Categories Menu --}}

</div>
{{-- END SIDEBAR --}}

<main>
    @yield('content')
</main>

<footer class="overflow-hidden w-full">
    <div class="mx-auto w-full {{--max-w-screen-xl--}} p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0 md:w-1/2">
                <a href="#" class="flex items-center">
                    <img src="{{asset('images/cybermarket_logo.png')}}" class="h-8 me-3" alt="Cybermarket Logo"/>
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black">Cybermarket</span>
                </a>
            </div>

            <div class="secondary-container-footer gap-8">
                <div class="footer-display-divs">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-black">Sobre Nós</h2>
                    </div>
                    <div>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Cybermarket</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer-display-divs">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-black">Siga-nos</h2>
                    </div>
                    <div>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://facebook.com" class="hover:underline ">Facebook</a>
                            </li>
                            <li>
                                <a href="https://x.com" class="hover:underline">Twitter</a>
                            </li>
                            <li style="margin-top: 15px">
                                <a href="https://instagram.com" class="hover:underline">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"/>

        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-black">© 2024
                <a href="#" class="hover:underline">Cybermarket™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="https://facebook.com" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <i class="fa-lg fa-brands fa-facebook-f"></i>
                    <span class="sr-only">Facebook page</span>
                </a>

                <a href="https://x.com" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <i class="fa-lg fa-brands fa-twitter"></i>
                    <span class="sr-only">Twitter page</span>
                </a>

                <a href="https://instagram.com" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <i class="m-0 fa-lg fa-brands fa-instagram"></i>
                    <span class="sr-only">Instagram account</span>
                </a>
            </div>
        </div>
    </div>
</footer>


<script> sideMenu() </script>
<script> sideBar() </script>
<script> swiper()</script>

<script>
    document.getElementById('search-navbar').addEventListener('keydown', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            var query = document.getElementById('search-navbar').value;
            document.getElementById('search-query').value = query;
            document.getElementById('search-form').submit();
        }
    });
</script>

@yield('scripts')
</body>

</html>
