<?php include_once('head.php'); ?>
<!-- HEADER -->
<header class="container-fluid p-0 m-0">
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
                    <a class="nav-link" style="color:#FF6347" href="busca.php" title="Busca">Buscas</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" style="color:#FF6347" href="servicos.php">Serviços</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" style="color:#FF6347" href="cadastro.php">Cadastros</a>
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