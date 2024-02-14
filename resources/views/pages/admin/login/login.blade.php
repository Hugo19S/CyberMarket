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
            <img src="/images/cybermarket_logo.png" alt="Logo Cybermarket">
            <h2>CyberMarket</h2>
        </div>
        <div class="mainBox">
            @if(session('msg'))
                <div id="alert-container" class="alert alert-danger">
                    {{ session('msg') }}
                </div>
            @endif
            <form action="/secret/login/verify" method="post">
                @csrf
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email"><br/>
                @error('email')
                <spa>{{ $message }}</spa><br>
                @enderror
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password"><br>
                @error('password')
                <spa>{{ $message }}</spa><br>
                @enderror
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>
