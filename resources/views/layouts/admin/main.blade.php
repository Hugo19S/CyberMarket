<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>@yield('title')</title>
</head>

<body>


    <header>
        <div class="panel-default">
            <div class="panel-heading">
                <div class="menu">
                    <button id="menu-button">&#9776;</button>
                </div>
            </div>
        </div>

        <div id="list">
            <ul class="options">
                <li class="large_icon">
                    <a href="#">
                        <img src="/sgv_admin/house.svg" alt="house icon">
                    </a>
                </li>
                <li class="large_icon">
                    <a href="#">
                        <img src="/sgv_admin/product-management.svg" alt="product management icon">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/sgv_admin/order-management.svg" alt="order management icon">
                    </a>
                </li>
            </ul>
        </div>

    </header>

    @yield('content')
    <script src="/js/script_layout.js"></script>
</body>

</html>