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
                <div>
                    <form action="{{ url('/adm/profissionais/pesquisar') }}" method="get" class="row">
                        @csrf
                        @method('GET')
                        <div id="texto-login-cadastro" class="form-group col-12 my-3">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control busca" name="nome" value="" aria-label="Recipient's username" aria-describedby="button-addon2">
                        </div>
                        <div class="form-group col-12 ml-auto px-3">
                            <button type="submit" class="mb-1 btn btn-primary" id="botao-login">Buscar</button>
                            <button type="submit" class="mb-1 btn btn-primary" id="botao-login">
                                <a class="text-white text-decoration-none" href="{{ route('adm.cadastro-profissionais') }}">Cadastrar Profissional</a>
                            </button>
                        </div>
                    </form>
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
                            <th>CPF
                            </th>
                            <th>E-mail
                            </th>
                            <th>Celular
                            </th>
                            <!-- <th>Grupo de Serviços
                            </th> -->
                            <th>Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($profissionais ?? '')
                        @foreach($profissionais ?? '' as $profissional)
                        <tr class="text-center">
                            <th scope="row">{{$profissional->id}}</th>
                            <td>{{$profissional->nome}}</td>
                            <td>{{$profissional->cpf}}</td>
                            <td>{{$profissional->email}}</td>
                            <td>{{$profissional->celular}}</td>
                            <!-- <td>{{$profissional->id_grupoServicos}}</td> -->
                            <td>
                                <form action="{{ url('/adm/profissionais/editar', $profissional->id) }}" method="GET">
                                    @csrf
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$profissional->id}}" />
                                    <button type="submit"><i class="fas fa-edit"></i></i></button>
                                </form>
                                <!-- <a href="{{ url('/adm/profissionais/editar', $profissional->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a> -->
                                <form action="{{ url('/adm/profissionais/excluir', $profissional->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$profissional->id}}" />
                                    <button type="submit"><i class="fas fa-trash"></i></button>
                                </form>
                                <!-- <a href="{{ url('/adm/profissionais/excluir', $profissional->id) }}">
                                    <i class="fas fa-trash"></i>
                                </a> -->
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </article>
</section>
@endsection