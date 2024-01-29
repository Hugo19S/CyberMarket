<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin_style.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Login page</title>
</head>

<body>
    <div class="contentLogin">
        <div class="loginPage">
            <div class="logotype">
                <img src="/images/cybermarket_logo.png" alt="">
                <h2>CyberMarket</h2>
            </div>
            <div class="mainBox">
                @if(session('msg'))
                <div id="alert-container" class="alert alert-danger">
                    {{ session('msg') }}
                </div>
                @endif
                <form action="/top/secret/login/verify" method="post">
                    @csrf
                    <label for="email">Email</label><br>
                    <input type="email" id="email" required><br />
                    <label for="password">Password</label><br>
                    <input type="password" id="password" required><br>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
