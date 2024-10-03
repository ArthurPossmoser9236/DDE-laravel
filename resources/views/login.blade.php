<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/login.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Login</title>
    <link rel="shortcut icon" href="/imgs/login.svg" type="image/x-icon">
</head>

<body>
    <div class="login-page">
        <div class="logo-container">
            <div class="div-logo">
                <img class="logo-img" src="/imgs/Diário do Estudante.svg" alt="logo">
                <h1 class="logo-title">Diário<br>do<br>Estudante</h1>
            </div>
        </div>
        <div class="login-container">
            <form class="form-login" action="{{ route('login') }}" method="POST">
                @csrf
                <h2 class="login-title">Login</h2>

                @if ($errors->has('loginError'))
                <div class="alert alert-danger">
                    {{ $errors->first('loginError') }}
                </div>
                @endif


                <div class="email-div">
                    <input type="email" name="email" placeholder="Email" required autofocus />
                    <ion-icon name="mail-outline"></ion-icon>
                </div>
                <div class="password-div">
                    <input type="password" name="password" placeholder="Password" required />
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </div>
                <a class="link-senha" href="#">Esqueci minha senha</a>
                <input class="btn-submit" type="submit" value="Fazer login" />
                <div class="option-cadastrar">
                    <p class="cadastrar-text">Não tem uma conta?</p>
                    <a class="link-cadastrar" href="/cadastro">Cadastrar-se!</a>
                </div>
            </form>
        </div>
    </div>

    <!-- ion icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>