@extends('layouts.app')

@section('content')

<!-- Section 1 - BUSCA -->
<section class="container mx-auto my-5 pt-5" id="busca">
    <article>
        <p class="lead text-center vagas pt-3">Encontre um profissional para realizar o serviço que você procura:</p>
        <div class="input-group my-3 d-flex">
            <form class="form-inline" action="{{ url('busca/servico') }}" method="POST">
                <input type="text" class="form-control busca" name="servico" placeholder="Escreva aqui o que você está procurando..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn busca" type="button" id="button-addon2">BUSCAR</button>
            </form>
        </div>
    </article>
</section>

<!-- Section 2 - RESULTADO DAS BUSCAS -->
<section class="container mx-auto" id="resultadoBusca">
    <!-- @isset($profissionais) -->
    <article class="row mt-2 mb-5 p-0 text-center">
        <div class="col-12 col-md-6 resultado-busca d-flex row mr-4">
            <div class="col-12 col-md-6">
                <!-- @foreach($profissionais as $profissional) -->
                <img src="{{ $profissional->foto }}" class="my-3 mx-auto img-fluid" alt="Profissional 1" width="100%" height="">
                <!-- @endforeach -->
            </div>
            <div class="col-12 col-md-6">
                <!-- @foreach($profissionais as $profissional) -->
                <h5 class="text-justify resultado-busca pt-1 mt-1">Nome: </h5>
                <h6 class="text-justify resultado-busca py-1 my-0">Serviço: </h6>
                <p class="text-justify resultado-busca py-1 my-0">Data de Nascimento: </p>
                <p class="text-justify resultado-busca py-1 my-0">Resumo da história: </p>
                <button type="button" class="btn btn-sm mb-2 text-white" data-toggle="modal" id="modalSolicitarOrcamento" data-target="#exampleModalLabel">Solicitar Orçamento
                </button>
                <!-- @endforeach -->
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <!-- {{ $profissionais->appends(['search' => isset($search) ? $search : ''])->links() }} -->
        </div>
    </article>
    <!-- @endisset -->
</section>

<!-- Modal Solicitar Orçamento -->
<div class="modal fade aling-intens-center" id="exampleModalLabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login">Solicitar Orçamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/adm/profissionais/criar') }}" method="POST" class="form-row" enctype="multipart/form-data">
                @csrf
                {{ method_field('POST') }}
                    <!-- <div id="texto-login-cadastro" class="form-group col-md-12">
                        <label for="id_profissional">Nome do Profissional</label>
                        <input type="text" name="id_profissional" class="form-control login-cadastro-input {{$errors->has('id_profissional') ? ' is-invalid':''}}" id="id_profissional" placeholder="Nome de profissional selecionado (automático)" value="{{ old('id_profissional') }}">
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-12">
                        <label for="id_servico">Serviço</label>
                        <input type="text" name="id_servico" class="form-control login-cadastro-input {$errors->has('id_servico') ? ' is-invalid':''}}" id="id_servico" placeholder="Serviço selecionado (automático)" value="{{ old('id_servico') }}">
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-12">
                        <label for="id_ong">ONG</label>
                        <input type="text" name="id_ong" class="form-control login-cadastro-input {$errors->has('id_ong') ? ' is-invalid':''}}" id="id_ong" placeholder="ONG selecionada (automático)" value="{{ old('id_ong') }}">
                    </div> -->
                    <div id="texto-login-cadastro" class="form-group col-md-12">
                        <label for="descricao">Descreva o serviço a ser realizado</label>
                        <input type="text" name="descricao" class="form-control login-cadastro-input {$errors->has('descricao') ? ' is-invalid':''}}" id="descricao " placeholder="Descrição do serviço a ser realizado, com o máximo de detalhes" value="{{ old('descricao') }}">
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-12">
                        <label for="quantidade">Quantidade (aproximada)</label>
                        <input type="text" name="quantidade" class="form-control login-cadastro-input {$errors->has('quantidade') ? ' is-invalid':''}}" id="quantidade" placeholder="Descrição da quantidade deste serviço, aproximadamente" value="{{ old('quantidade') }}">
                    </div>
                    <!-- <div id="texto-login-cadastro" class="form-group col-md-12">
                        <label for="id_contratante">Contratante</label>
                        <input type="text" name="id_contratante" class="form-control login-cadastro-input {$errors->has('id_contratante') ? ' is-invalid':''}}" id="id_contratante" placeholder="CONTRATANTE (automático)" value="{{ old('id_contratante') }}">
                    </div> -->
                    <button type="submit" class="btn btn-primary ml-3" id="botao-login">Enviar</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
@endsection