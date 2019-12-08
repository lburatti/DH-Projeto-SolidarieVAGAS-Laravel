@extends('layouts.app')

@section('content')

<section class="container my-3 py-5" id="adm">
    <!-- BUSCA DE PROFISSIONAIS CADASTRADOS / CADASTRAR NOVO PROFISSIONAL -->
    <article class="mt-5 px-0">
        <div class="panel p-3">
            <div class="panel-heading">
                Busca de Usuários
            </div>
            <hr>
            <div class="panel-body px-3">
                <div>
                    <form action="{{ url('/adm/usuarios/pesquisar') }}" method="get" class="row">
                        @csrf
                        @method('GET')
                        <div id="texto-login-cadastro" class="form-group col-12">
                            {{ $profissionais->appends([])->links() }}
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control login-cadastro-input" aria-label="Recipient's username" name="name" aria-describedby="button-addon2">
                        </div>
                        <!-- <div id="texto-login-cadastro" class="form-group col-md-6">
                            <label for="nivel_acesso">Nível de acesso</label>
                            <select id="nivel_acesso" name="nivel_acesso" class="form-control login-cadastro-input">
                                <option selected>Selecione</option>
                                <option>1 - ADM</option>
                                <option>2 - ONG</option>
                                <option>3 - CONTRATANTE</option>
                            </select>
                        </div> -->
                        <div class="form-group ml-auto px-3 col-12">
                            <button type="submit" class="mb-1 btn btn-primary" id="botao-login">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
    </article>
    <!-- RESULTADO BUSCA -->
    <article class="mt-5 px-0 flex-row">
        <div class="panel p-3">
            <div class="panel-heading px-0 col-12 col-md-12">
                Resultado da Busca
            </div>
            <hr>
            <div class="d-flex flex-wrap">
                <table id="tblGrid" class="table table-striped table-bordered" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th class="">Nível de acesso
                            </th>
                            <th class="">ID
                            </th>
                            <th class="">Nome
                            </th>
                            <th class="">E-mail
                            </th>
                            <th class="">Telefone
                            </th>
                            <th class="">Celular
                            </th>
                            <th class="">Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($usuarios ?? '')
                        @foreach($usuarios ?? '' as $usuario)
                        <tr class="text-center">
                            <th scope="row">{{$usuario->nivel_acesso}}</th>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->telefone}}</td>
                            <td>{{$usuario->celular }}</td>
                            <td>
                                <form action="{{ url('/adm/usuarios/editar', $usuario->id) }}" method="GET">
                                    @csrf
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$usuario->id}}" />
                                    <button type="submit"><i class="fas fa-edit"></i></i></button>
                                </form>
                                <form action="{{ url('/adm/usuarios/excluir', $usuario->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('POST') }}
                                    <input type="hidden" name="id" value="{{$usuario->id}}" />
                                    <button type="submit"><i class="fas fa-trash"></i></button>
                                </form>
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
</section @endsection