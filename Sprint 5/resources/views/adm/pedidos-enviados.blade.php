@extends('layouts.logado')

@section('content')
    <section class="container my-3 py-5" id="adm">
        <!-- BUSCA DE PROFISSIONAIS CADASTRADOS / CADASTRAR NOVO PROFISSIONAL -->
        <article class="mt-5 px-0">
            <div class="panel p-3">
                <div class="panel-heading">
                    Busca de Pedidos Enviados
                </div>
                <hr>
                <div class="panel-body px-3">
                    <div class="row">
                        <div id="texto-login-cadastro" class="form-group col-md-6">
                            <label for="periodo">Período de:</label>
                            <input type="date" class="form-control login-cadastro-input" aria-label="Recipient's username" aria-describedby="button-addon2">
                        </div>
                        <div id="texto-login-cadastro" class="form-group col-md-6">
                            <label for="periodo">Até:</label>
                            <input type="date" class="form-control login-cadastro-input" aria-label="Recipient's username" aria-describedby="button-addon2">
                        </div>
                        <div class="form-group ml-auto px-3">
                            <button type="submit" class="mb-1 btn btn-primary" id="botao-login">Buscar</button>
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
                                <th>ID do Pedido
                                </th>
                                <th>ONG
                                </th>
                                <th>E-mail
                                </th>
                                <th>Serviço
                                </th>
                                <th>Profissional
                                </th>
                                <th>Data
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th scope="row">id_pedido</th>
                                <td>nome ong</td>
                                <td>email</td>
                                <td>id_servico</td>
                                <td>id_profissional</td>
                                <td>data_criacao</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row">id_pedido</th>
                                <td>nome ong</td>
                                <td>email</td>
                                <td>id_servico</td>
                                <td>id_profissional</td>
                                <td>data_criacao</td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row">id_pedido</th>
                                <td>nome ong</td>
                                <td>email</td>
                                <td>id_servico</td>
                                <td>id_profissional</td>
                                <td>data_criacao</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </article>
    </section>
@endsection