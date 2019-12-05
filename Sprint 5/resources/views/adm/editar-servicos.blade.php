@extends('layouts.logado')

@section('content')

<section class="container my-3 py-5" id="adm">
    <article class="mt-5 px-0">
        <form action="{{ url('/adm/servicos/editar/servico/'.$servico->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <div id="texto-login-cadastro" class="form-group col-md-12">
                <label for="nome">Nome do Serviço</label>
                <input type="text" name="nome" class="form-control login-cadastro-input {{$errors->has('nome') ? ' is-invalid':''}}" id="nome" placeholder="Escreva o nome do grupo de serviços" value="{{ $servico->nome }}">
                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
            </div>
            <div id="texto-login-cadastro" class="form-group col-md-12">
                <label for="descricao">Descrição do Serviço</label>
                <input type="text" name="descricao" class="form-control login-cadastro-input {{$errors->has('descricao') ? ' is-invalid':''}}" id="descricao" placeholder="Descrição do grupo" value="{{ $servico->descricao }}">
                <div class="invalid-feedback">{{ $errors->first('descricao') }}</div>
            </div>
            <button type="submit" class="btn btn-primary ml-3" id="botao-login">Salvar</button>
        </form>
    </article>
</section>
@endsection

