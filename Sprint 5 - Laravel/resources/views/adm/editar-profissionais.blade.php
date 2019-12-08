@extends('layouts.app')

@section('content')
<section class="container my-5 py-5" id="adm">
    <div class="form-row formulario col-md-12">
        <p class="my-3"><strong>Editar Cadastro do Profissional:</strong></p>
    </div>
    <hr>
    <div class="mx-auto cadastros">
        <div class="card-body">
            <form action="{{ url('/adm/profissionais/editar/'.$profissional->id) }}" method="POST" class="form-row" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-row formulario">
                    <div id="texto-login-cadastro" class="form-group col-md-12">
                        <label for="nome">Nome Completo</label>
                        <input type="text" name="nome" class="form-control login-cadastro-input {{$errors->has('nome') ? ' is-invalid':''}}" id="nome" placeholder="Nome Completo" value="{{ $profissional->nome }}">
                        <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" class="form-control login-cadastro-input {{$errors->has('cpf') ? ' is-invalid':''}}" id="cpf" placeholder="000.000.000-00" value="{{ $profissional->cpf }}">
                        <div class="invalid-feedback">{{ $errors->first('cpf') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="rg">RG</label>
                        <input type="text" name="rg" class="form-control login-cadastro-input {{$errors->has('rg') ? ' is-invalid':''}}" id="rg" placeholder="00.000.000-0" value="{{ $profissional->rg }}">
                        <div class="invalid-feedback">{{ $errors->first('rg') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="data_de_nascimento">Data de Nascimento</label>
                        <input type="date" name="data_de_nascimento" class="form-control login-cadastro-input {{$errors->has('data_de_nascimento') ? ' is-invalid':''}}" id="data_de_nascimento" placeholder="00/00/0000" value="{{ $profissional->data_de_nascimento }}">
                        <div class="invalid-feedback">{{ $errors->first('data_de_nascimento') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="foto">Foto do Profissional</label>
                        <input type="file" name="foto" class="form-control-file login-cadastro-input {{$errors->has('foto') ? ' is-invalid':''}}" id="foto" value="{{ $profissional->foto }}">
                        <div class="invalid-feedback">{{ $errors->first('foto') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="id_ong">ONG</label>
                        <input type="text" name="id_ong" class="form-control login-cadastro-input {{$errors->has('id_ong') ? ' is-invalid':''}}" id="id_ong" value="{{ $profissional->id_ong }}">
                        <div class="invalid-feedback">{{ $errors->first('id_ong') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="tempo_na_ong">Tempo na ONG</label>
                        <input type="text" name="tempo_na_ong" class="form-control login-cadastro-input {{$errors->has('tempo_na_ong') ? ' is-invalid':''}}" id="tempo_na_ong" placeholder="2 anos" value="{{ $profissional->tempo_na_ong }}">
                        <div class="invalid-feedback">{{ $errors->first('tempo_na_ong') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class=" form-group cadastro col-md-12">
                        <label for="resumo_historia">Resumo da História</label>
                        <textarea class="form-control login-cadastro-input {{$errors->has('resumo_historia') ? ' is-invalid':''}}" name="resumo_historia" id="resumo_historia" cols="10" rows="5" placeholder="Conte um pouco sobre a história do profissional" value="{{ $profissional->resumo_historia }}"></textarea>
                        <div class="invalid-feedback">{{ $errors->first('resumo_historia') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="cep">CEP</label>
                        <input type="text" name="cep" class="form-control login-cadastro-input {{$errors->has('cep') ? ' is-invalid':''}}" id="cep" placeholder="000000-000" value="{{ $profissional->cep }}">
                        <div class="invalid-feedback">{{ $errors->first('cep') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6 my-auto pt-3">
                        <button type="submit" class="ml-auto mb-1 btn btn-primary" id="botao-login"><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" class="text-decoration-none text-white">Buscar CEP</a></button>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" name="logradouro" class="form-control login-cadastro-input {{$errors->has('logradouro') ? ' is-invalid':''}}" id="logradouro" placeholder="Rua Sete de Setembro, Avenida Paulista..." value="{{ $profissional->logradouro }}">
                        <div class="invalid-feedback">{{ $errors->first('logradouro') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="numero">Número</label>
                        <input type="text" name="numero" class="form-control login-cadastro-input {{$errors->has('numero') ? ' is-invalid':''}}" id="numero" placeholder="0000" value="{{ $profissional->numero }}">
                        <div class="invalid-feedback">{{ $errors->first('numero') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" class="form-control login-cadastro-input {{$errors->has('complemento') ? ' is-invalid':''}}" id="complemento" placeholder="Casa, Apartamento 65..." value="{{ $profissional->complemento }}">
                        <div class="invalid-feedback">{{ $errors->first('complemento') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" class="form-control login-cadastro-input {{$errors->has('bairro') ? ' is-invalid':''}}" id="bairro" placeholder="Bairro" value="{{ $profissional->bairro }}">
                        <div class="invalid-feedback">{{ $errors->first('bairro') }}</div>
                    </div>

                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" class="form-control login-cadastro-input {{$errors->has('cidade') ? ' is-invalid':''}}" id="cidade" placeholder="São Paulo" value="{{ $profissional->cidade }}">
                        <div class="invalid-feedback">{{ $errors->first('cidade') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="uf">UF</label>
                        <select id="uf" name="uf" class="form-control login-cadastro-input" value="{{ $profissional->uf }}">
                            <option selected disabled value="uf">Estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="celular">Celular</label>
                        <input type="text" name="celular" class="form-control login-cadastro-input {{$errors->has('celular') ? ' is-invalid':''}}" id="celular" placeholder="(11) 90000-0000" value="{{ $profissional->celular }}">
                        <div class="invalid-feedback">{{ $errors->first('celular') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" class="form-control login-cadastro-input {{$errors->has('telefone') ? ' is-invalid':''}}" id="telefone" placeholder="(11) 0000-0000" value="{{ $profissional->telefone }}">
                        <div class="invalid-feedback">{{ $errors->first('telefone') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-12">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control login-cadastro-input {{$errors->has('email') ? ' is-invalid':''}}" id="email" placeholder="email@email.com.br" value="{{ $profissional->email }}">
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-12">
                        <label for="id_grupoServicos">Grupo de Serviços</label>
                        <select id="id_grupoServicos" name="id_grupoServicos" class="form-control login-cadastro-input" value="{{ $profissional->id_grupoServicos }}">
                            <option selected disabled>Grupo</option>
                            <option value="1">Costura</option>
                            <option value="2">Construção e Reforma</option>
                            <option value="3">Artesanato</option>
                            <option value="4">Cozinha</option>
                            <option value="5">Informática</option>
                            <option value="6">Jardinagem</option>
                        </select>
                    </div>
                    <!-- FALTA PARTE PARA ADICIONAR SERVIÇOS PRESTADOS                          -->
                    <div class="form-group col-md-12 mx-4" id="texto-login-cadastro form-check">
                        <input type="checkbox" class="form-check-input login-casastro-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Declaro que todos os dados inseridos são verdadeiros</label>
                    </div>
                </div>
                <button type="submit" class="ml-auto mb-1 btn btn-primary" id="botao-login">Enviar</button>
            </form>
        </div>
    </div>
</section>
@endsection