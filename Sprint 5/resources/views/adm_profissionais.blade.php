@extends('layouts.app')

@section('content')
    <section class="container my-3 py-5" id="adm">
        <!-- BUSCA DE PROFISSIONAIS CADASTRADOS / CADASTRAR NOVO PROFISSIONAL -->
        <article class="mt-5 px-0">
            <div class="panel p-3">
                <div class="panel-heading">
                    Busca e Cadastro de Profissionais
                </div>
                <hr>
                <div class="panel-body px-3">
                    <div class="row">
                        <div id="texto-login-cadastro" class="form-group col-md-6 my-3">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control busca" aria-label="Recipient's username" aria-describedby="button-addon2">
                        </div>
                        <div id="texto-login-cadastro" class="form-group col-md-6 my-3">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control busca" aria-label="Recipient's username" aria-describedby="button-addon2">
                        </div>
                        <div class="form-group ml-auto px-3">
                            <button type="submit" class="mb-1 btn btn-primary" id="botao-login">Buscar</button>
                            <button type="submit" class="mb-1 btn btn-primary" id="botao-login">
                                <a class="text-white text-decoration-none" href="adm_cadastro_prof.php">Cadastrar</a>
                            </button>
                        </div>
                    </div>
                </div>
        </article>
        <!-- RESULTADO BUSCA -->
        <article class="mt-5 px-0">
            <div class="panel p-3">
                <div class="panel-heading">
                    Resultado da Busca
                </div>
                <hr>
                <div>
                    <table id="tblGrid" class="table table-striped table-bordered" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>ID
                                </th>
                                <th>Nome Completo
                                </th>
                                <th>E-mail
                                </th>
                                <th>Celular
                                </th>
                                <th>Grupo de Serviços
                                </th>
                                <th>Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th scope="row">profissionais.nome</th>
                                <td>profissionais.cpf</td>
                                <td>profissionais.email</td>
                                <td>profissionais.celular</td>
                                <td>profissionais.id_grupo_servico</td>
                                <td>ícones (editar/excluir)..</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row">profissionais.nome</th>
                                <td>profissionais.cpf</td>
                                <td>profissionais.email</td>
                                <td>profissionais.celular</td>
                                <td>profissionais.id_grupo_servico</td>
                                <td>ícones (editar/excluir)..</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row">profissionais.nome</th>
                                <td>profissionais.cpf</td>
                                <td>profissionais.email</td>
                                <td>profissionais.celular</td>
                                <td>profissionais.id_grupo_servico</td>
                                <td>ícones (editar/excluir)..</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </article>
    </section>
@endsection