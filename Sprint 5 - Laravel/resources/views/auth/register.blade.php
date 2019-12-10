@extends('layouts.app')

@section('content')

<section class="container opcoes-cadastros d-flex justify-content-around mb-2">
    <div class=" mx-auto cadastros">
        <div class=" form-group row col-12">
            <div class="card-body">
                <form method="POST" class="form-row" action="{{ route('register') }}">
                    @csrf
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="nivel_acesso">{{ __('Contratante ou ONG') }}</label>
                        <select id="nivel_acesso" name="nivel_acesso" class="form-control login-cadastro-input @error('nivel_acesso') is-invalid @enderror" placeholder=" " value="{{ old('nivel_acesso') }}" required autocomplete="nivel_acesso" autofocus>
                            <option selected disabled value="nivel_acesso">Escolha seu perfil:</option>
                            <option value="2">Contratante</option>
                            <option value="3">ONG</option>
                            <option value="1">Admin</option>

                        </select>
                        @error('nivel_acesso')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="name">{{ __('Nome') }}</label>
                        <input id="name" type="text" class="form-control login-cadastro-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="cpf_cnpj">{{ __('CPF ou cnpj') }}</label>
                        <input type="text" name="cpf_cnpj" class="form-control login-cadastro-input @error('cpf_cnpj') is-invalid @enderror" id="cpf_cnpj" placeholder="000.000.000-00" value="{{ old('cpf_cnpj') }}" required autocomplete="birthday" autofocus>
                        @error('cpf_cnpj')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="data_de_nasc_inicio">{{ __('Data de Nascimento / Data de Início') }}</label>
                        <input type="date" name="data_de_nasc_inicio" class="form-control login-cadastro-input @error('data_de_nasc_inicio') is-invalid @enderror" id="data_de_nasc_inicio" placeholder="000.000.000-00" value="{{ old('data_de_nasc_inicio') }}" required autocomplete="birthday" autofocus>

                        @error('data_de_nasc_inicio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="cep">{{ __('CEP') }}</label>
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
                        <label for="logradouro">{{ __('Logradouro') }}</label>
                        <input type="text" name="logradouro" class="form-control login-cadastro-input @error('logradouro') is-invalid @enderror" id="logradouro" placeholder="Rua Sete de Setembro0" value="{{ old('logradouro') }}" required autocomplete="logradouro" autofocus>
                        @error('logradouro')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="numero">{{ __('Número') }}</label>
                        <input type="text" name="numero" class="form-control login-cadastro-input @error('numero') is-invalid @enderror" id="numero" placeholder="0000" value="{{ old('numero') }}" required autocomplete="numero" autofocus>
                        @error('numero')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="complemento">{{ __('Complemento') }}</label>
                        <input type="text" name="complemento" class="form-control login-cadastro-input @error('complemento') is-invalid @enderror" id="complemento" placeholder="0000" value="{{ old('complemento') }}" required autocomplete="complemento" autofocus>
                        @error('complemento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="bairro">{{ __('Bairro') }}</label>
                        <input type="text" name="bairro" class="form-control login-cadastro-input @error('bairro') is-invalid @enderror" id="bairro" placeholder="Bairro" value="{{ old('bairro') }}" required autocomplete="bairro" autofocus>
                        @error('bairro')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="cidade">{{ __('Cidade') }}</label>
                        <input type="text" name="cidade" class="form-control login-cadastro-input @error('cidade') is-invalid @enderror" id="cidade" placeholder="São Paulo" value="{{ old('cidade') }}" required autocomplete="cidade" autofocus>
                        @error('cidade')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="uf">{{ __('UF') }}</label>
                        <select id="uf" name="uf" class="form-control login-cadastro-input @error('uf') is-invalid @enderror" placeholder="São Paulo" value="{{ old('uf') }}" required autocomplete="uf" autofocus>
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
                        @error('uf')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="telefone">{{ __('Telefone') }}</label>
                        <input type="text" name="telefone" class="form-control login-cadastro-input @error('telefone') is-invalid @enderror" id="telefone" placeholder="(00)0000-0000" value="{{ old('telefone') }}" required autocomplete="telefone" autofocus>
                        @error('telefone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="celular">{{ __('Celular') }}</label>
                        <input type="text" name="celular" class="form-control login-cadastro-input @error('celular') is-invalid @enderror" id="celular" placeholder="(00)0000-0000" value="{{ old('celular') }}" required autocomplete="celular" autofocus>
                        @error('celular')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-12">
                        <label for="email">{{ __('E-Mail ') }}</label>
                        <input id="email" type="email" class="form-control login-cadastro-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="password">{{ __('Senha') }}</label>
                        <input id="password" type="password" class="form-control login-cadastro-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-6">
                        <label for="password-confirm">{{ __('Confirme sua senha') }}</label>
                        <input id="password-confirm" type="password" class="form-control login-cadastro-input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div id="texto-login-cadastro" class="form-group col-md-12 mr-0">
                        <div>
                            <button type="submit" class="btn btn-primary" id="botao-login">
                                {{ __('Enviar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="logo-cadastros container">
    <img src="img/logo.png" class="img-form rounded float-right" alt="logo">
</section>
@endsection