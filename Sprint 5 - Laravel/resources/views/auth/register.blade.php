@extends('layouts.app')

@section('content')
<!-- OPÇÕES DE CADASTRO -->
<section class="opcoes-cadastros container d-flex justify-content-around mb-2">
        <div class="row">
            <button id="botao-login" class="btn btn mr-1 mb-1 col-12" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Cadastre-se para contratar
            </button>
            <button id="botao-login" class="btn btn collapsed mb-2 col-12" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                Cadastre sua ONG
            </button>
        </div>
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Cadastro CONTRATANTES -->
            <div class="mx-auto cadastros" id="accordionExample">
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-row form-row formulario">
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="nome" >{{ __('Nome') }}</label>
                                    <input type="text" name="nome" class="form-control login-cadastro-input @error('nome') is-invalid @enderror" id="nome" placeholder="Nome Completo" value="{{ old('nome') }}" required autocomplete="name" autofocus>
    
                                    @error('nome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
    
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cpf" >{{ __('CPF') }}</label>
                                    <input type="text" name="cpf" class="form-control login-cadastro-input @error('cpf') is-invalid @enderror" id="cpf" placeholder="000.000.000-00" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>
                                    @error('cpf')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="data_de_nascimento" >{{ __('Data de Nascimento') }}</label>
                                    <input type="date" name="data_de_nascimento" class="form-control login-cadastro-input @error('data_de_nascimento') is-invalid @enderror" id="data_de_nascimento" placeholder="000.000.000-00" value="{{ old('data_de_nascimento') }}" required autocomplete="birthday" autofocus>
                    
                                    @error('data_de_nascimento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cep" >{{ __('CEP') }}</label>
                                    <input type="text" name="cep" class="form-control login-cadastro-input @error('cep') is-invalid @enderror" id="cep" placeholder="000000-000" value="{{ old('cep') }}" required autocomplete="cep" autofocus>
                    
                                    @error('cep')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6 my-auto pt-3">
                                    <button type="submit" class="ml-auto mb-1 btn btn-primary" id="botao-login"><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" class="text-decoration-none text-white">Buscar CEP</a></button>
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="logradouro" >{{ __('Logradouro') }}</label>
                                    <input type="text" name="logradouro" class="form-control login-cadastro-input @error('logradouro') is-invalid @enderror" id="logradouro" placeholder="Rua Sete de Setembro0" value="{{ old('logradouro') }}" required autocomplete="logradouro" autofocus>
                            
                                    @error('logradouro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="numero" >{{ __('Número') }}</label>
                                    <input type="text" name="numero" class="form-control login-cadastro-input @error('numero') is-invalid @enderror" id="numero" placeholder="0000" value="{{ old('numero') }}" required autocomplete="numero" autofocus>
                            
                                    @error('numero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="complemento" >{{ __('Complemento') }}</label>
                                    <input type="text" name="complemento" class="form-control login-cadastro-input @error('complemento') is-invalid @enderror" id="complemento" placeholder="0000" value="{{ old('complemento') }}" required autocomplete="complemento" autofocus>
                                    @error('complemento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="bairro" >{{ __('bairro') }}</label>
                                    <input type="text" name="bairro" class="form-control login-cadastro-input @error('bairro') is-invalid @enderror" id="bairro" placeholder="Bairro" value="{{ old('bairro') }}" required autocomplete="bairro" autofocus>
                                    @error('bairro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cidade" >{{ __('Cidade') }}</label>
                                    <input type="text" name="cidade" class="form-control login-cadastro-input @error('cidade') is-invalid @enderror" id="cidade" placeholder="São Paulo" value="{{ old('cidade') }}" required autocomplete="cidade" autofocus>
                                    @error('cidade')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="uf" >{{ __('UF') }}</label>
                                        <select id="uf" name="uf" class="form-control login-cadastro-input @error('uf') is-invalid @enderror"placeholder="São Paulo" value="{{ old('uf') }}" required autocomplete="uf" autofocus>
                                                <option selected>Estado</option>
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
                                        @error('uf')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div id="texto-login-cadastro" class="form-group col-md-6">
                                        <label for="celular" >{{ __('Celular') }}</label>
                                        <input type="text" name="celular" class="form-control login-cadastro-input @error('celular') is-invalid @enderror" id="celular" placeholder="(00)0000-0000" value="{{ old('celular') }}" required autocomplete="celular" autofocus>
                                        @error('celular')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div id="texto-login-cadastro" class="form-group col-md-6">
                                        <label for="telefone" >{{ __('Telefone') }}</label>
                                        <input type="text" name="telefone" class="form-control login-cadastro-input @error('telefone') is-invalid @enderror" id="telefone" placeholder="(00)0000-0000" value="{{ old('telefone') }}" required autocomplete="telefone" autofocus>
                                        @error('telefone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12 ml-4" id="texto-login-cadastro form-check">
                                        <input type="checkbox" class="form-check-input login-casastro-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Tem whatsapp? (Se sim, selecionar)</label>
                                    </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>
                                    <input id="email" type="email" class="form-control login-cadastro-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="senha" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
                                    <input id="senha" type="senha" class="form-control login-cadastro-input @error('senha') is-invalid @enderror" name="senha" required autocomplete="new-senha">
                                    @error('senha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="senha-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma') }}</label>
                                    <input id="senha-confirm" type="senha" class="form-control login-cadastro-input " name="senha_confirmation" required autocomplete="new-senha">
                                </div>
                                <div class="form-group col-md-12 mx-4" id="texto-login-cadastro form-check">
                                    <input type="checkbox" class="form-check-input login-casastro-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Declaro que todos os dados inseridos são verdadeiros</label>
                                </div>
                                </div>
                                    <button type="submit" class="ml-auto btn btn-primary" id="botao-login">
                                        {{ __('Enviar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <section class="container">
            <!-- Cadastros ONGs -->
            <div class="mx-auto cadastros" id="accordionExample">
                <div id="collapseTwo" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-row form-row formulario">
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="nome" >{{ __('Nome da ONG') }}</label>
                                    <input type="text" name="nome" class="form-control login-cadastro-input @error('nome') is-invalid @enderror" id="nome" placeholder="Nome Completo" value="{{ old('nome') }}" required autocomplete="nome" autofocus>
                                    @error('nome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cnpj" >{{ __('CNPJ') }}</label>
                                    <input type="text" name="cnpj" class="form-control login-cadastro-input @error('cnpj') is-invalid @enderror" id="cnpj"  value="{{ old('cnpj') }}" required autocomplete="cnpj" autofocus placeholder="00.000.000/0000-00">
                                    @error('cnpj')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="data_de_inicio" >{{ __('Data de Início') }}</label>
                                    <input type="date" name="data_de_inicio" class="form-control login-cadastro-input @error('data_de_inicio') is-invalid @enderror" id="data_de_inicio" placeholder="data_de_inicio Completo" value="{{ old('data_de_inicio') }}" required autocomplete="data_de_inicio" autofocus placeholder="00.000.000/0000-00">
                
                                    @error('data_de_inicio')
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="finalidade_ong" >{{ __('Finalidade Institucional (área de atuação)') }}</label>
                                    <input type="text" name="finalidade_ong" class="form-control login-cadastro-input @error('finalidade_ong') is-invalid @enderror" id="finalidade_ong" placeholder="Escreva a área de atuação da ONG" value="{{ old('finalidade_ong') }}" required autocomplete="finalidade_ong" autofocus >
                                    @error('finalidade_ong')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>        
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="logo" >{{ __('Logo da ONG') }}</label>
                                    <input type="file" name="logo" class="form-control login-cadastro-input @error('logo') is-invalid @enderror" id="logo"  value="{{ old('logo') }}" required autocomplete="logo" autofocus >
                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="sobre_ong" >{{ __('Conte mais sobre a ONG') }}</label>
                                    <textarea class="form-control login-cadastro-input @error('sobre_ong') is-invalid @enderror"  name="sobre_ong" id="sobre_ong" cols="10" rows="5" placeholder="Escreva mais sobre o serviços prestados em sua ONG.."value="{{ old('sobre_ong') }}" required autocomplete="sobre_ong" autofocus ></textarea>
                                    @error('sobre_ong')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cep" >{{ __('CEP') }}</label>
                                    <input type="text" name="cep" class="form-control login-cadastro-input @error('cep') is-invalid @enderror" id="cep" placeholder="000000-000" value="{{ old('cep') }}" required autocomplete="cep" autofocus>
                                    @error('cep')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6 my-auto pt-3">
                                    <button type="submit" class="ml-auto mb-1 btn btn-primary" id="botao-login"><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" class="text-decoration-none text-white">Buscar CEP</a></button>
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="logradouro" >{{ __('Logradouro') }}</label>
                                    <input type="text" name="logradouro" class="form-control login-cadastro-input @error('logradouro') is-invalid @enderror" id="logradouro" placeholder="Rua Sete de Setembro0" value="{{ old('logradouro') }}" required autocomplete="logradouro" autofocus>
                                    @error('logradouro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="numero" >{{ __('Número') }}</label>
                                    <input type="text" name="numero" class="form-control login-cadastro-input @error('numero') is-invalid @enderror" id="numero" placeholder="0000" value="{{ old('numero') }}" required autocomplete="numero" autofocus>
                                    @error('numero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="complemento" >{{ __('Complemento') }}</label>
                                    <input type="text" name="complemento" class="form-control login-cadastro-input @error('complemento') is-invalid @enderror" id="complemento" placeholder="0000" value="{{ old('complemento') }}" required autocomplete="complemento" autofocus>
                                    @error('complemento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="bairro" >{{ __('bairro') }}</label>
                                    <input type="text" name="bairro" class="form-control login-cadastro-input @error('bairro') is-invalid @enderror" id="bairro" placeholder="Bairro" value="{{ old('bairro') }}" required autocomplete="bairro" autofocus>
                                    @error('bairro')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="cidade" >{{ __('Cidade') }}</label>
                                    <input type="text" name="cidade" class="form-control login-cadastro-input @error('cidade') is-invalid @enderror" id="cidade" placeholder="São Paulo" value="{{ old('cidade') }}" required autocomplete="cidade" autofocus>
                                    @error('cidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="uf" >{{ __('UF') }}</label>
                                    <select id="uf" name="uf" class="form-control login-cadastro-input @error('uf') is-invalid @enderror"placeholder="São Paulo" value="{{ old('uf') }}" required autocomplete="uf" autofocus>
                                        <option selected>Estado</option>
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
                                    @error('uf')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="telefone" >{{ __('Telefone') }}</label>
                                    <input type="text" name="telefone" class="form-control login-cadastro-input @error('telefone') is-invalid @enderror" id="telefone" placeholder="(00)0000-0000" value="{{ old('telefone') }}" required autocomplete="telefone" autofocus>
                                    @error('telefone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="celular" >{{ __('Celular') }}</label>
                                    <input type="text" name="celular" class="form-control login-cadastro-input @error('celular') is-invalid @enderror" id="celular" placeholder="(00)0000-0000" value="{{ old('celular') }}" required autocomplete="celular" autofocus>
                                    @error('celular')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="site_ong" >{{ __('Site da ONG') }}</label>
                                    <input type="text" name="site_ong" class="form-control login-cadastro-input @error('site_ong') is-invalid @enderror" id="site_ong" placeholder="www.ong.com.br" value="{{ old('site_ong') }}" required autocomplete="site_ong" autofocus>
                                    @error('site_ong')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-12">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>
                                    <input id="email" type="email" class="form-control login-cadastro-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="texto-login-cadastro" class="form-group col-md-6">
                                    <label for="senha" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
                                    <input id="senha" type="senha" class="form-control login-cadastro-input @error('senha') is-invalid @enderror" name="senha" required autocomplete="new-senha">
                                    @error('senha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="senha-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma') }}</label>
                                    <input id="senha-confirm" type="senha" class="form-control login-cadastro-input " name="senha_confirmation" required autocomplete="new-senha">
                                </div>
                                <div class="form-group col-md-12 mx-4" id="texto-login-cadastro form-check">
                                        <input type="checkbox" class="form-check-input login-casastro-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Declaro que todos os dados inseridos são verdadeiros</label>
                                </div>
                                </div>
                                    <button type="submit" class="ml-auto btn btn-primary" id="botao-login">
                                        {{ __('Enviar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                   
                    <div class="card-body">
                        <form class="form-row">
                            <div class="form-row formulario col-md-12">
                                <p class="my-3"><strong>Dados do Responsável pela ONG:</strong></p>
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-12">
                                <label for="nome_responsavel" >{{ __('Nome Completo') }}</label>
                                <input type="text" name="nome_responsavel" class="form-control login-cadastro-input @error('nome_responsavel') is-invalid @enderror" id="nome_responsavel" placeholder="Nome Completo" value="{{ old('nome_responsavel') }}" required autocomplete="nome_responsavel" autofocus>
                                @error('nome_responsavel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div id="texto-login-cadastro" class="form-group col-md-6">
                                <label for="cpf_responsavel" >{{ __('CPF') }}</label>
                                <input type="text" name="cpf_responsavel" class="form-control login-cadastro-input @error('cpf_responsavel') is-invalid @enderror" id="cpf_responsavel"  value="{{ old('cpf_responsavel') }}" required autocomplete="cpf_responsavel" autofocus placeholder="00.000.000/0000-00">
                                @error('cpf_responsavel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <section class="logo-cadastros container">
        <img src="img/logo.png" class="img-form rounded float-right" alt="logo">
    </section>
    <section class="logo-cadastros container">
        <img src="img/logo.png" class="img-form rounded float-right" alt="logo">
    </section>
@endsection
