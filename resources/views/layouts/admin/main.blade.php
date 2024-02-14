<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/admin_style.css">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="panel-default">
                <div class="panel-heading">
                    <div class="menu" id="menu-admin">
                        <button id="menu-button-admin">&#9776;</button>
                    </div>
                    <div class="head_items">
                        <div class="head_login_info">
                            <h2>{{ auth()->user()->name }}</h2>
                            <span class="icone-usuario"><i class="fa-regular fa-user"></i></span>
                        </div>
                        <div class="head_search">
                            <form action="#" method="get">
                                <input type="text" name="search" placeholder="&#128269 Pesquisar" class="input_search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mainfragment">
            <div id="list-menu-admin">
                <ul class="option_container">
                    <div>
                        <li class="large_icon above">
                            <a href="/secret/home">
                                <img src="/sgv_admin/house.svg" alt="house icon" title="Home">
                            </a>
                        </li>
                        <li class="large_icon above">
                            <a href="/secret/management/products">
                                <img src="/sgv_admin/product-management.svg" alt="product management icon" title="Produtos">
                            </a>
                        </li>
                        <li class="large_icon above">
                            <a href="/secret/management/order">
                                <img src="/sgv_admin/order-management.svg" alt="order management icon" title="Compras">
                            </a>
                        </li>
                        <li class="large_icon above">
                            <a href="/secret/management/analytics">
                                <img src="/sgv_admin/pie-chart.svg" alt="pie chart icon" title="Analise">
                            </a>
                        </li>
                    </div>
                    <div>
                        <li class="large_icon" id="logout">
                            <a href="{{route('logout.admin')}}">
                                <img src="/sgv_admin/logout.svg" alt="pie chart icon" title="Sair">
                            </a>
                        </li>
                    </div>

                </ul>
            </div>

            <div class="content" id="content-admin">
                @if(auth()->check())
                    @yield('content')
                @endif
            </div>

        </div>

    </div>
    <script src="/js/script_layout.js"></script>
</body>

</html>
