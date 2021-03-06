<?php include_once('inc/head.php'); ?>

<body>
    <!-- HEADER -->
    <?php include_once('inc/header.php'); ?>

    <main class="container-fluid m-0 p-0">

        <!-- OPÇÕES DE CADASTRO -->
        <section class="opcoes-cadastros container d-flex justify-content-around">
            <div class="row">
                <button id="botao-login" class="btn btn mr-1 mb-1 col-12" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Cadastre-se para contratar
                </button>
                <button id="botao-login" class="btn btn collapsed mr-1 mb-1 col-12" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Seja um parceiro
                </button>
                <button id="botao-login" class="btn btn collapsed mb-2 col-12" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Cadastre sua ONG
                </button>
            </div>
        </section>

        <section class="container">
            <!-- Cadastro Pessoa Física -->
            <div class="mx-auto cadastros" id="accordionExample">
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <form action="" class="form-row">
                            <div class="form-row formulario">
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="nomeCompleto">Nome Completo</label>
                                    <input type="text" class="form-control login-cadastro-input" id="nomeCompleto" placeholder="Nome Completo">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control login-cadastro-input" id="cpf" placeholder="000.000.000-00">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="dataNascimento">Data de Nascimento</label>
                                    <input type="date" class="form-control login-cadastro-input" id="dataNascimento" placeholder="00/00/0000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control login-cadastro-input" id="endereco" placeholder="Rua X de X, 30">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control login-cadastro-input" id="bairro" placeholder="Bairro">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control login-cadastro-input" id="cep" placeholder="000000-000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" class="form-control login-cadastro-input" id="cidade" placeholder="São Paulo">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="estado">Estado</label>
                                    <select id="estado" class="form-control login-cadastro-input">
                                        <option selected>Estado</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control login-cadastro-input" id="celular" placeholder="(11) 00000-0000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control login-cadastro-input" id="telefone" placeholder="(11) 0000-0000">
                                </div>
                                <div class="form-group col-md-12 ml-4" id="texto-login-cadastro form-check">
                                    <input type="checkbox" class="form-check-input login-casastro-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Tem whatsapp? (Se sim, selecionar)</label>
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control login-cadastro-input" id="email" placeholder="email@email.com.br">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control login-cadastro-input" id="senha" placeholder="Digite sua senha">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="confirmarSenha">Confirmar Senha</label>
                                    <input type="password" class="form-control login-cadastro-input" id="confirmarSenha" placeholder="Digite sua senha novamente">
                                </div>
                                <div class="form-group col-md-12 mx-4" id="texto-login-cadastro form-check">
                                    <input type="checkbox" class="form-check-input login-casastro-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Declaro que todos os dados inseridos são verdadeiros</label>
                                </div>
                            </div>
                            <button type="submit" class="ml-auto mb-1 btn btn-primary" id="botao-login">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <!-- Cadastro Parceiros -->
            <div class="mx-auto cadastros" id="accordionExample">
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <form class="form-row">
                            <div class="form-row formulario col-md-12">
                                <p class="my-3"><strong>Dados da Empresa:</strong></p>
                            </div>
                            <div class="form-row formulario">
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="nomeEmpresa">Nome da Empresa</label>
                                    <input type="text" class="form-control login-cadastro-input" id="nomeEmpresa" placeholder="Nome da Empresa">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cnpj">CNPJ</label>
                                    <input type="text" class="form-control login-cadastro-input" id="cnpj" placeholder="00.000.000/0000-00">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="razaoSocial">Razão Social</label>
                                    <input type="text" class="form-control login-cadastro-input" id="razaoSocial" placeholder="Razão Social Ltda.">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control login-cadastro-input" id="endereco" placeholder="Rua X de X, 30">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control login-cadastro-input" id="bairro" placeholder="Bairro">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control login-cadastro-input" id="cep" placeholder="000000-000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" class="form-control login-cadastro-input" id="cidade" placeholder="São Paulo">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="estado">Estado</label>
                                    <select id="estado" class="form-control login-cadastro-input">
                                        <option selected>Estado</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control login-cadastro-input" id="telefone" placeholder="(11) 0000-0000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control login-cadastro-input" id="celular" placeholder="(11) 00000-0000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="siteEmpresa">Site da Empresa</label>
                                    <input type="text" class="form-control login-cadastro-input" id="siteEmpresa" placeholder="www.empresa.com.br">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control login-cadastro-input" id="email" placeholder="email@email.com.br">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control login-cadastro-input" id="senha" placeholder="Digite sua senha">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="confirmarSenha">Confirmar Senha</label>
                                    <input type="password" class="form-control login-cadastro-input" id="confirmarSenha" placeholder="Digite sua senha novamente">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <form class="form-row">
                            <div class="form-row formulario col-md-12">
                                <p class="my-3"><strong>Dados do Representante da Empresa:</strong></p>
                            </div>
                            <div class="form-row formulario">
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="nomeRepresentanteEmp">Nome Completo</label>
                                    <input type="text" class="form-control login-cadastro-input" id="nomeRepresentanteEmp" placeholder="Nome Completo">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control login-cadastro-input" id="cpf" placeholder="000.000.000-00">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="funcao">Função na Empresa</label>
                                    <input type="text" class="form-control login-cadastro-input" id="funcao" placeholder="Gerente de RH">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control login-cadastro-input" id="telefone" placeholder="(11) 0000-0000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control login-cadastro-input" id="celular" placeholder="(11) 00000-0000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control login-cadastro-input" id="email" placeholder="email@email.com.br">
                                </div>
                                <div class="form-group col-md-12 mx-4" id="texto-login-cadastro form-check">
                                    <input type="checkbox" class="form-check-input login-casastro-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Declaro que todos os dados inseridos são verdadeiros</label>
                                </div>
                            </div>
                            <button type="submit" class="ml-auto mb-1 btn btn-primary" id="botao-login">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <!-- Cadastros ONGs -->
            <div class="mx-auto cadastros" id="accordionExample">
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <form class="form-row">
                            <div class="form-row formulario col-md-12">
                                <p class="my-3"><strong>Dados da ONG:</strong></p>
                            </div>
                            <div class="form-row formulario">
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="nomeOng">Nome da ONG</label>
                                    <input type="text" class="form-control login-cadastro-input" id="nomeOng" placeholder="Nome da ONG">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cnpj">CNPJ</label>
                                    <input type="text" class="form-control login-cadastro-input" id="cnpj" placeholder="00.000.000/0000-00">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="dataInicio">Data de Início</label>
                                    <input type="text" class="form-control login-cadastro-input" id="dataInicio" placeholder="00/00/0000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="finalidade">Finalidade Institucional (área de atuação)</label>
                                    <input type="text" class="form-control login-cadastro-input" id="finalidade" placeholder="Escreva a área de atuação da ONG">
                                </div>
                                <div id="texto-login-cadastro" class=" form-group cadastro col-md-12">
                                    <label for="textareaOng">Conte mais sobre a ONG</label>
                                    <textarea class="form-control login-cadastro-input" name="textareaOng" id="textareaOng" cols="10" rows="5" placeholder="Escreva mais sobre o serviços prestados em sua ONG.."></textarea>
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control login-cadastro-input" id="endereco" placeholder="Rua X de X, 30">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control login-cadastro-input" id="bairro" placeholder="Bairro">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control login-cadastro-input" id="cep" placeholder="000000-000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" class="form-control login-cadastro-input" id="cidade" placeholder="São Paulo">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="estado">Estado</label>
                                    <select id="estado" class="form-control login-cadastro-input">
                                        <option selected>Estado</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control login-cadastro-input" id="telefone" placeholder="(11) 0000-0000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control login-cadastro-input" id="celular" placeholder="(11) 00000-0000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="site">Site da ONG</label>
                                    <input type="text" class="form-control login-cadastro-input" id="site" placeholder="www.empresa.com.br">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control login-cadastro-input" id="email" placeholder="email@email.com.br">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control login-cadastro-input" id="senha" placeholder="Digite sua senha">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="confirmarSenha">Confirmar Senha</label>
                                    <input type="password" class="form-control login-cadastro-input" id="confirmarSenha" placeholder="Digite sua senha novamente">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <form class="form-row">
                            <div class="form-row formulario col-md-12">
                                <p class="my-3"><strong>Dados do Representante da ONG:</strong></p>
                            </div>
                            <div class="form-row formulario">
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="nomeRepresentanteOng">Nome Completo</label>
                                    <input type="text" class="form-control login-cadastro-input" id="nomeRepresentanteOng" placeholder="Nome Completo">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control login-cadastro-input" id="cpf" placeholder="000.000.000-00">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="funcao">Função na ONG</label>
                                    <input type="text" class="form-control login-cadastro-input" id="funcao" placeholder="Gerente..">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control login-cadastro-input" id="telefone" placeholder="(11) 0000-0000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control login-cadastro-input" id="celular" placeholder="(11) 00000-0000">
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control login-cadastro-input" id="email" placeholder="email@email.com.br">
                                </div>
                                <div class="form-group col-md-12 mx-4" id="texto-login-cadastro form-check">
                                    <input type="checkbox" class="form-check-input login-casastro-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Declaro que todos os dados inseridos são verdadeiros</label>
                                </div>
                            </div>
                            <button type="submit" class="ml-auto mb-1 btn btn-primary" id="botao-login">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="logo-cadastros container">
            <img src="img/logo.png" class="img-form rounded float-right" alt="logo">
        </section>
    </main>

    <!-- FOOTER -->
    <?php include_once('inc/footer.php'); ?>
</body>

</html>