@extends('layouts.app')

@section('content')

<section class="container my-3 py-5" id="adm">
    <!-- TABELA DE GRUPOS DE SERVIÇOS -->
    <article class="mt-5 px-0">
        <div class="panel p-3">
            <div class="panel-heading">
                Grupos de Serviços
            </div>
            <hr>
            <div>
                <table id="tblGrid" class="table table-striped table-bordered" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>ID
                            </th>
                            <th>Nome
                            </th>
                            <th>Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(App\GrupoServicos::all() as $grupoServico)
                        <tr class="text-center">
                            <th scope="row">{{$grupoServico->id}}</th>
                            <td>{{$grupoServico->nome}}</td>
                            <td>
                                <form action="{{ url('/adm/servicos/editar/grupo-servico', $grupoServico->id) }}" method="GET">
                                    @csrf
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$grupoServico->id}}" />
                                    <button type="submit"><i class="fas fa-edit"></i></i></button>
                                </form>
                                <form action="{{ url('/adm/servicos/excluir/grupo-servico', $grupoServico->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$grupoServico->id}}" />
                                    <button type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="form-group row px-3">
                <button type="submit" class="btn btn-primary ml-auto" data-toggle="modal" id="botao-login" data-target="#exampleModalLabelGrupo">Novo Grupo</button>
            </div>
        </div>
    </article>

    <!-- Modal Novo Grupo de Serviços -->
    <div class="modal fade aling-intens-center" id="exampleModalLabelGrupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelGrupo" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login">Novo Grupo de Serviços</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/adm/servicos/criar/grupo-servico') }}" method="POST">
                        @csrf
                        {{ method_field('POST') }}
                        <div id="texto-login-cadastro" class="form-group col-md-12">
                            <label for="nome">Nome do Grupo de Serviços</label>
                            <input type="text" name="nome" class="form-control login-cadastro-input {{$errors->has('nome') ? ' is-invalid':''}}" id="nome" placeholder="Escreva o nome do grupo de serviços" value="{{ old('nome') }}">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                        <button type="submit" class="btn btn-primary ml-3" id="botao-login">Salvar</button>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>


    <article class="mt-5 px-0">
        <div class="panel p-3">
            <div class="panel-heading">
                Serviços
            </div>
            <hr>
            <div>
                <table id="tblGrid" class="table table-striped table-bordered" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>ID
                            </th>
                            <th>Nome
                            </th>
                            <th>Descrição
                            </th>
                            <th>Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(App\Servico::all() as $servico)
                        <tr class="text-center">
                            <th scope="row">{{$servico->id}}</th>
                            <td>{{$servico->nome}}</td>
                            <td>{{$servico->descricao}}</td>
                            <td>
                                <form action="{{ url('/adm/servicos/editar/servico', $servico->id) }}" method="GET">
                                    @csrf
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$servico->id}}" />
                                    <button type="submit"><i class="fas fa-edit"></i></i></button>
                                </form>
                                <form action="{{ url('/adm/servicos/excluir/servico', $servico->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$servico->id}}" />
                                    <button type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <hr>
            <div class="form-group row px-3">
                <button type="submit" class="btn btn-primary ml-auto" data-toggle="modal" id="botao-login" data-target="#exampleModalLabelServico">Novo Serviço</button>
            </div>
        </div>
    </article>

    <!-- Modal Novo Serviço -->
    <div class="modal fade aling-intens-center" id="exampleModalLabelServico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelServico" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login">Novo Serviço</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/adm/servicos/criar/servico') }}" method="POST">
                        @csrf
                        {{ method_field('POST') }}
                        <div id="texto-login-cadastro" class="form-group col-md-12">
                            <label for="nome">Nome do Serviço</label>
                            <input type="text" name="nome" class="form-control login-cadastro-input {{$errors->has('nome') ? ' is-invalid':''}}" id="nome" placeholder="Escreva o nome do grupo de serviços" value="{{ old('nome') }}">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                        <div id="texto-login-cadastro" class="form-group col-md-12">
                            <label for="descricao">Descrição do Serviço</label>
                            <input type="text" name="descricao" class="form-control login-cadastro-input {{$errors->has('descricao') ? ' is-invalid':''}}" id="descricao" placeholder="Descrição do grupo" value="{{ old('descricao') }}">
                            <div class="invalid-feedback">{{ $errors->first('descricao') }}</div>
                        </div>
                        <!-- <div id="texto-login-cadastro" class="form-group col-md-6">
                            <label for="id_grupo_servicos">Grupo de Serviços</label>
                            <select id="id_grupo_servicos" name="id_grupo_servicos" class="form-control login-cadastro-input">
                                <option selected>Grupo</option>
                                <option value="nome"></option>
                            </select>
                            <div class="invalid-feedback">{{ $errors->first('id_grupo_servicos') }}</div>
                        </div> -->
                        <button type="submit" class="btn btn-primary ml-3" id="botao-login">Salvar</button>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection