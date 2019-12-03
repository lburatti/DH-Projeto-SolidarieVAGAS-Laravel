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
                        @csrf
                        @method('POST')
                        <button type="submit" class="mb-1 btn btn-primary" id="botao-login">
                            <a href="{{ url('/adm/pedidos-enviados/pesquisar') }}"></a>
                            Buscar</button>
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
                            <th>Descrição
                            </th>
                            <th>Quantidade
                            </th>
                            <th>Contratante | ONG
                            </th>
                            <th>Profissional
                            </th>
                            <th>Serviço
                            </th>
                            <th>Data
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @csrf
                        @method('GET')
                        @foreach(\App\PedidoOrcamento::all() as $pedidoEnviado)
                        <tr class="text-center">
                            <th scope="row">{{$pedidoEnviado->id}}</th>
                            <td>{{$pedidoEnviado->descricao}}</td>
                            <td>{{$pedidoEnviado->quantidade}}</td>
                            <td>{{$pedidoEnviado->id_user_contratante || $pedidoEnviado->id_user_ong}}</td>
                            <td>{{$pedidoEnviado->id_profissional}}</td>
                            <td>{{$pedidoEnviado->id_servico}}</td>
                            <td>{{$pedidoEnviado->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </article>
</section>
@endsection