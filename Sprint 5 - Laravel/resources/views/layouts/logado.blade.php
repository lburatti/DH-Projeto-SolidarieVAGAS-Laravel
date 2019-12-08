<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- ADOBE -->
    <link rel="stylesheet" href="https://use.typekit.net/bbn7xbn.css">

    <!-- LINK FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div id="app">
        <!-- HEADER -->
        <header class="container-fluid p-0 m-0" id="adm">
            <nav class="navbar fixed-top navbar-expand-lg">
                <a class="navbar-brand my-auto" href="home">
                    <img src="/img/logo.png" alt="Logo" height="60" width="90" class="mr-3">
                    SolidarieVAGAS
                </a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-1">
                            <a class="nav-link" style="color:#FF6347" href="{{ route('adm.usuarios.index') }}">Usuários(1)</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" style="color:#FF6347" href="{{ route('adm.niveis-acesso.index') }}">Níveis de acesso(1)</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" style="color:#FF6347" href="{{ route('adm.servicos.index') }}">Serviços(1)</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" style="color:#FF6347" href="{{ route('adm.meu-cadastro') }}">Meu cadastro(2,3)</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" style="color:#FF6347" href="{{ route('adm.profissionais.index') }}">Profissionais(2)</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" style="color:#FF6347" href="{{ route('adm.pedidos-recebidos.index') }}">Pedidos Recebidos(2)</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" style="color:#FF6347" href="{{ route('adm.pedidos-enviados.index') }}">Pedidos enviados(3)</a>
                        </li>
                        <button type="submit" class="btn btn-light" id="botao-sair">
                            <a class="text-white text-decoration-none" href="home.php">Sair</a>
                        </button>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="container-fluid d-flex flex-column justify-content-center m-0 p-0">
            <div>
                <h1 class="py-1 my-0">SolidarieVAGAS</h1>
                <p class="py-1 my-0">e-mail@e-mail.com.br</p>
                <p class="py-1 my-0">Telefone: (11) 0000-0000</p>
            </div>
            <div class="my-1 py-1">
                <a href="" title="Facebook">
                    <i class="fab fa-facebook-square mx-1"></i>
                </a>
                <a href="" title="Twitter" target="_blank">
                    <i class="fab fa-twitter-square mx-1"></i>
                </a>
                <a href="" title="LinkedIn" target="_blank">
                    <i class="fab fa-linkedin mx-1"></i>
                </a>
            </div>
        </footer>
    </div>
</body>

</html> 