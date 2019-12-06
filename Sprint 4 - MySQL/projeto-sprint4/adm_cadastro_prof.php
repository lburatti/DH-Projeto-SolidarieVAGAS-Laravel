<?php include_once('inc/head.php'); ?>

<body>

    <!-- HEADER -->
    <?php include_once('inc/adm_header.php'); ?>

    <main class="container-fluid m-0 p-0">

        <section class="container my-5 py-5" id="adm">
            <div class="form-row formulario col-md-12">
                <p class="my-3"><strong>Cadastro de profissional:</strong></p>
            </div>
            <hr>
            <!-- BUSCA DE PROFISSIONAIS CADASTRADOS / CADASTRAR NOVO PROFISSIONAL -->
            <div class="mx-auto cadastros">
                <div class="card-body">
                    <form action="" class="form-row">
                        <div class="form-row formulario">
                            <div id="texto-login-cadastro" class="form-group col-md-12">
                                <label for="nome">Nome Completo</label>
                                <input type="text" name="nome" class="form-control login-cadastro-input" id="nome" placeholder="Nome Completo">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" class="form-control login-cadastro-input" id="cpf" placeholder="000.000.000-00">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="rg">RG</label>
                                <input type="text" name="rg" class="form-control login-cadastro-input" id="rg" placeholder="00.000.000-0">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="data_de_nascimento">Data de Nascimento</label>
                                <input type="date" name="data_de_nascimento" class="form-control login-cadastro-input" id="data_de_nascimento" placeholder="00/00/0000">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="foto">Foto do Profissional</label>
                                <input type="file" name="foto" class="form-control-file login-cadastro-input" id="foto">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="id_ong">ONG (automático)</label>
                                <input type="text" name="id_ong" class="form-control login-cadastro-input" id="id_ong">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="tempo_na_ong">Tempo na ONG</label>
                                <input type="text" name="tempo_na_ong" class="form-control login-cadastro-input" id="tempo_na_ong" placeholder="2 anos">
                            </div>
                            <div id="texto-login-cadastro" class=" form-group cadastro col-md-12">
                                <label for="resumo_historia">Resumo da História</label>
                                <textarea class="form-control login-cadastro-input" name="resumo_historia" id="resumo_historia" cols="10" rows="5" placeholder="Conte um pouco sobre a história do profissional"></textarea>
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="cep">CEP</label>
                                <input type="text" name="cep" class="form-control login-cadastro-input" id="cep" placeholder="000000-000">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6 my-auto pt-3">
                                <button type="submit" class="ml-auto mb-1 btn btn-primary" id="botao-login"><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" class="text-decoration-none text-white">Buscar CEP</a></button>
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="logradouro">Logradouro</label>
                                <input type="text" name="logradouro" class="form-control login-cadastro-input" id="logradouro" placeholder="Rua Sete de Setembro, Avenida Paulista...">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="numero">Número</label>
                                <input type="text" name="numero" class="form-control login-cadastro-input" id="numero" placeholder="0000">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="complemento">Complemento</label>
                                <input type="text" name="complemento" class="form-control login-cadastro-input" id="complemento" placeholder="Casa, Apartamento 65...">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="bairro">Bairro</label>
                                <input type="text" name="bairro" class="form-control login-cadastro-input" id="bairro" placeholder="Bairro">
                            </div>

                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="cidade">Cidade</label>
                                <input type="text" name="cidade" class="form-control login-cadastro-input" id="cidade" placeholder="São Paulo">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="uf">UF</label>
                                <select id="uf" name="uf" class="form-control login-cadastro-input">
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
                                <input type="text" name="celular" class="form-control login-cadastro-input" id="celular" placeholder="(11) 90000-0000">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" class="form-control login-cadastro-input" id="telefone" placeholder="(11) 0000-0000">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-12">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" class="form-control login-cadastro-input" id="email" placeholder="email@email.com.br">
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-12">
                                <label for="grupos_servicos">Grupo de Serviços</label>
                                <select id="grupos_servicos" name="grupos_servicos" class="form-control login-cadastro-input">
                                    <option selected>Grupo</option>
                                    <option>Costura</option>
                                    <option>Construção e Reforma</option>
                                    <option>Artesanato</option>
                                    <option>Cozinha</option>
                                    <option>Informática</option>
                                    <option>Jardinagem</option>
                                </select>
                            </div>
                            <!-- FALTA PARTE PARA ADICIONAR SERVIÇOS PRESTADOS                          -->
                            <div class="form-group col-md-12 mx-4" id="texto-login-cadastro form-check">
                                <input type="checkbox" class="form-check-input login-casastro-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Declaro que todos os dados inseridos são verdadeiros</label>
                            </div>
                        </div>
                        <button type="submit" class="ml-auto mb-1 btn btn-primary" id="botao-login">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include_once('inc/footer.php'); ?>
</body>

</html>