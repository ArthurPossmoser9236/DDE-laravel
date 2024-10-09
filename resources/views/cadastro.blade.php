<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/cadastro.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Cadastro</title>
    <link rel="shortcut icon" href="/imgs/login.svg" type="image/x-icon">
</head>
<body>
    <div class="cadastro-page">
        <div class="cadastro-container">
            <form class="form-cadastro" action="{{ route('register') }}" method="POST">
                @csrf
                <h2 class="cadastro-title">Cadastro</h2>
                <input class="input-username" type="text" name="username" placeholder="Username" required>
                <input class="input-email" type="email" name="email" placeholder="Email" required autofocus="true"/>
                <input type="password" class="input-password" name="password" placeholder="Senha" required/>
                <input type="password" class="input-passwordConfirmation" name="password_confirmation" placeholder="Confirme sua senha" required/>
                <input type="submit" class="input-submit" value="Fazer cadastro" class="btn"/>
                <div class="option-login">
                    <p class="login-text">Já tem uma conta?</p>
                    <a class="link-login" href="/login">Fazer Login!</a>
                </div>
            </form>
        </div>
        <div class="logo-container">
            <div class="div-logo">
                <img class="logo-img" src="/imgs/Diário do Estudante.svg" alt="logo">
                <h1 class="logo-title">Diário<br>do<br>Estudante</h1>
            </div>
        </div>
    </div>
</body>
</html>
