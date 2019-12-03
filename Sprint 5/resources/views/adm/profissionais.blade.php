@extends('layouts.logado')

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
                        <input type="text" class="form-control busca" name="nome" aria-label="Recipient's username" aria-describedby="button-addon2">
                    </div>
                    <!-- <div id="texto-login-cadastro" class="form-group col-md-6 my-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control busca" name="cpf" aria-label="Recipient's username" aria-describedby="button-addon2">
                    </div> -->
                    <div class="form-group ml-auto px-3">
                        <form action="{{ url('/adm/profissionais/pesquisar') }}" method="get">
                        <button type="submit" class="mb-1 btn btn-primary" id="botao-login">
                            <!-- <a href="{{ url('/adm/profissionais/pesquisar') }}"></a> -->
                            Buscar</button>
                        </form>
                        <button type="submit" class="mb-1 btn btn-primary" id="botao-login">
                            <a class="text-white text-decoration-none" href="{{ route('adm.cadastro-profissionais') }}">Cadastrar Profissional</a>
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
                            <th>CPF
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
                        @csrf
                        @method('GET')
                        @foreach(\App\Profissional::all() as $profissional)
                        <tr class="text-center">
                            <th scope="row">{{$profissional->id}}</th>
                            <td>{{$profissional->nome}}</td>
                            <td>{{$profissional->cpf}}</td>
                            <td>{{$profissional->email}}</td>
                            <td>{{$profissional->celular}}</td>
                            <td>{{$profissional->id_grupo_servico}}</td>
                            <td>
                                @csrf
                                @method('PUT')
                                <a href="{{ url('/adm/profissionais/editar', $profissional->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <a href="{{ url('/adm/profissionais/excluir', $profissional->id) }}">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
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