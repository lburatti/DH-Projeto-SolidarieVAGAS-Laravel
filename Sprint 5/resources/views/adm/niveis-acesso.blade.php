@extends('layouts.logado')

@section('content')

<section class="container my-3 py-5" id="adm">
    <!-- TABELA DE NÍVEIS DE ACESSO -->
    <article class="mt-5 px-0">
        <div class="panel p-3">
            <div class="panel-heading">
                Níveis de Acesso
            </div>
            <hr>
            <div>
                <table id="tblGrid" class="table table-striped table-bordered" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>ID
                            </th>
                            <th>Nível de Acesso
                            </th>
                            <th>Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @csrf
                        @method('GET')
                        @foreach(\App\NivelAcesso::all() as $nivelAcesso)
                        <tr class="text-center">
                            <th scope="row">{{$nivelAcesso->id}}</th>
                            <td>{{$nivelAcesso->nome}}</td>
                            <td>
                                @csrf
                                @method('PUT')
                                <a href="{{ url('/adm/niveis-acesso/editar', $nivelAcesso->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <a href="{{ url('/adm/niveis-acesso/editar', $nivelAcesso->id) }}">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="form-group row px-3">
                <button type="submit" class="btn btn-primary ml-auto" data-toggle="modal" id="botao-login" data-target="#exampleModalLabelGrupo">Novo Nível de Acesso</button>
            </div>
        </div>
    </article>

    <!-- Modal Novo Grupo de Serviços -->
    <div class="modal fade aling-intens-center" id="exampleModalLabelGrupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelGrupo" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login">Novo Nível de Acesso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/adm/niveis-acesso/criar') }}" method="POST">
                        @csrf
                        {{ method_field('POST') }}
                        <div id="texto-login-cadastro" class="form-group col-md-12">
                            <label for="nome">Nome do Nível de Acesso</label>
                            <input type="text" name="nome" class="form-control login-cadastro-input" id="nome" placeholder="Escreva o nome do grupo de serviços">
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
</section>
@endsection