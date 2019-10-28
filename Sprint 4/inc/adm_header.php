<?php include_once('head.php'); ?>

<!-- HEADER COM TODAS AS OPÇÕES-->
<header class="container-fluid p-0 m-0" id="adm">
        <nav class="navbar fixed-top navbar-expand-lg">
            <a class="navbar-brand my-auto" href="home.php">
                <img src="img/logo.png" alt="Logo" height="60" width="90" class="mr-3">
                SolidarieVAGAS
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-1">
                        <a class="nav-link" style="color:#FF6347" href="adm_usuarios.php">Usuários(1)</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" style="color:#FF6347" href="adm_niveis_acesso.php">Níveis de acesso(1)</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" style="color:#FF6347" href="adm_meu_cadastro.php">Meu cadastro(2,3)</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" style="color:#FF6347" href="adm_profissionais.php">Profissionais(2)</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" style="color:#FF6347" href="adm_pedidos_recebidos.php">Pedidos Recebidos(2)</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" style="color:#FF6347" href="adm_pedidos_enviados.php">Pedidos enviados(3)</a>
                    </li>
                    <button type="submit" class="btn btn-light" id="botao-sair">
                        <a class="text-white text-decoration-none" href="home.php">Sair</a>
                    </button>
                </ul>
            </div>
        </nav>
    </header>