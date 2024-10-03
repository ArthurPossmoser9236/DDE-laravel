<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/welcome.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">
    <!-- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- favicon -->
    <link rel="shortcut icon" href="/imgs/login.svg" type="image/x-icon">
    <title>Home</title>
</head>

<body>
    <!-- header -->
    <header class="header-container">
        <div class="header-logo">
            <img src="/imgs/Diário do Estudante.svg" alt="logo">
            <h2>Diário do Estudante</h2>
        </div>
        <div class="header-conteudo">
            <ul class="header-lista">
                <li class="item-lista">
                    <a href="/login" class="item-link item-link-login">
                        <p>Login</p>
                    </a>
                </li>
                <li class="item-lista">
                    <a href="/cadastro" class="item-link item-link-cadastro">
                        <p>Cadastre-se</p>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- navbar mobile -->
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/imgs/Diário do Estudante.svg" alt="logo">
                <p>Diário do Estudante</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- about -->
    <section class="about-container">
        <div class="about-title">
            <h1>O Diário do Estudante é uma plataforma de estudos gratuita que oferece ferramentas para organizar a sua vida acadêmica, melhore suas notas e maximize a eficiência.</h1>
        </div>
        <div class="about-links">
            <div class="about-div-link">
                <a href="/login">Login</a>
            </div>
            <div class="about-div-link">
                <a href="/cadastro">Cadastre-se!</a>
            </div>
        </div>
        <div class="about-subtitle">
            <p>Cadastre-se e transforme seu potencial de aprendizado!</p>
        </div>
    </section>
</body>
<!-- botstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>