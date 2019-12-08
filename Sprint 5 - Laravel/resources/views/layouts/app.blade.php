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

                 <a class="navbar-brand my-auto" href="{{ route('welcome') }}">
                     <img src="/img/logo.png" alt="Logo" height="60" width="90" class="mr-3">
                     SolidarieVAGAS
                 </a>

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ml-auto">
                         <!-- Authentication Links -->
                         @guest
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('busca.index') }}" title="Busca">Buscas</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('servicos') }}">Serviços</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('cadastro') }}">Cadastros</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link " style="color:#FF6347" href="{{ route('login') }}">{{ __('Login') }}</a>
                         </li>
                         @else

                         @if(Auth::user()->nivel_acesso == 1)
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('adm.usuarios.index') }}">Usuários</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('adm.niveis-acesso.index') }}">Níveis de acesso</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('adm.servicos.index') }}">Serviços</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('adm.cadastro-admin.index') }}">Cadastro de Admin</a>
                         </li>
                         @elseif(Auth::user()->nivel_acesso == 2)
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('adm.meu-cadastro.index') }}">Meu cadastro</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('adm.pedidos-recebidos.index') }}">Pedidos Recebidos</a>
                         </li>
                         @elseif(Auth::user()->nivel_acesso == 3)
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('adm.meu-cadastro.index') }}">Meu cadastro</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('adm.profissionais.index') }}">Profissionais</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('adm.pedidos-enviados.index') }}">Pedidos enviados</a>
                         </li>
                         @endif
                         <li class="nav-item dropdown">
                             <a id="navbarDropdown" style="color:#FF6347" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 {{ Auth::user()->name }} <span class="caret"></span>
                             </a>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                             </div>
                         </li>
                         @endguest
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

 {{-- <!doctype html>
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

         <!-- Authentication Links -->
         @guest
         <!-- HEADER não logado-->
         <header class="container-fluid p-0 m-0">
             <nav class="navbar fixed-top navbar-expand-lg">
                 <a class="navbar-brand my-auto" href="{{ sroute('welcome') }}">
                     <img src="/img/logo.png" alt="Logo" height="60" width="90" class="mr-3">
                     SolidarieVAGAS
                 </a>
                 <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="fas fa-bars"></i>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('busca.index') }}" title="Busca">Buscas</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('servicos') }}">Serviços</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('cadastro') }}">Cadastros</a>
                         </li>
                         <button type="button" class="btn btn-light" data-toggle="modal" id="modalLogin" data-target="#exampleModal">
                             Login</button>
                     </ul>
                 </div>
             </nav>
             <!-- Modal  login -->
             <div class="modal fade aling-intens-center" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="login">Login</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <form>
                                 <div class="form-group col-md-12" id="texto-login-cadastro">
                                     <label for="email">E-mail </label>
                                     <input type="email" name="email" class="form-control login-cadastro-input" id="email" aria-describedby="emailHelp" placeholder="email@email.com.br">
                                     <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                 </div>
                                 <div class="form-group col-md-12" id="texto-login-cadastro">
                                     <label for="senha">Senha</label>
                                     <input type="password" name="senha" class="form-control login-cadastro-input" id="senha" placeholder="Digite uma senha">
                                 </div>
                                 <div class="form-group col-md-12 ml-4" id="texto-login-cadastro form-check">
                                     <input type="checkbox" class="form-check-input login-casastro-input" id="exampleCheck1">
                                     <label class="form-check-label" for="exampleCheck1">Manter conectado</label>
                                 </div>
                                 <button type="submit" class="btn btn-primary ml-3" id="botao-login" href="adm_usuarios.php">Entrar</button>
                             </form>
                         </div>
                         <div class="modal-footer">

                         </div>
                     </div>
                 </div>
             </div>
         </header>
         <div></div>
         <li class="nav-item">
             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
         </li>
         @if (Route::has('register'))
         <li class="nav-item">
             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
         </li>
         @endif



         @else
         <!-- HEADER Logado -->
         <header class="container-fluid p-0 m-0" id="adm">
             <nav class="navbar fixed-top navbar-expand-lg">
                 <a class="navbar-brand my-auto" href="home.php">
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

         <div>
             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </div>
             </li>
         </div>
         @endguest
         <!-- HEADER -->
         <header class="container-fluid p-0 m-0">
             <nav class="navbar fixed-top navbar-expand-lg">
                 <a class="navbar-brand my-auto" href="{{ route('welcome') }}">
                     <img src="/img/logo.png" alt="Logo" height="60" width="90" class="mr-3">
                     SolidarieVAGAS
                 </a>
                 <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="fas fa-bars"></i>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('busca.index') }}" title="Busca">Buscas</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('servicos') }}">Serviços</a>
                         </li>
                         <li class="nav-item mx-1">
                             <a class="nav-link" style="color:#FF6347" href="{{ route('cadastro') }}">Cadastros</a>
                         </li>
                         <button type="button" class="btn btn-light" data-toggle="modal" id="modalLogin" data-target="#exampleModal">
                             Login</button>
                     </ul>
                 </div>
             </nav>
             <!-- Modal  login -->
             <div class="modal fade aling-intens-center" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h5 class="modal-title" id="login">Login</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <form>
                                 <div class="form-group col-md-12" id="texto-login-cadastro">
                                     <label for="email">E-mail </label>
                                     <input type="email" name="email" class="form-control login-cadastro-input" id="email" aria-describedby="emailHelp" placeholder="email@email.com.br">
                                     <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                 </div>
                                 <div class="form-group col-md-12" id="texto-login-cadastro">
                                     <label for="senha">Senha</label>
                                     <input type="password" name="senha" class="form-control login-cadastro-input" id="senha" placeholder="Digite uma senha">
                                 </div>
                                 <div class="form-group col-md-12 ml-4" id="texto-login-cadastro form-check">
                                     <input type="checkbox" class="form-check-input login-casastro-input" id="exampleCheck1">
                                     <label class="form-check-label" for="exampleCheck1">Manter conectado</label>
                                 </div>
                                 <button type="submit" class="btn btn-primary ml-3" id="botao-login" href="adm_usuarios.php">Entrar</button>
                             </form>
                         </div>
                         <div class="modal-footer">

                         </div>
                     </div>
                 </div>
             </div>
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

 </html> --}}