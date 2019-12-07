<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\NivelAcesso;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(Request $request)
    {
        $nivelAcesso = $request->input('nivel_acesso');
        // contratante
        if ($nivelAcesso == 2) {
            $user = User::create([
                'nivel_acesso' => 2,
                'name' => $request->input('name'),
                'cpf' => $request->input('cpf'),
                'data_de_nascimento' => $request->input('data_de_nascimento'),
                'cep' => $request->input('cep'),
                'logradouro' => $request->input('logradouro'),
                'numero' => $request->input('numero'),
                'complemento' => $request->input('complemento'),
                'bairro' => $request->input('bairro'),
                'cidade' => $request->input('cidade'),
                'uf' => $request->input('uf'),
                'telefone' => $request->input('telefone'),
                'celular' => $request->input('celular'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);

            return redirect()->route('cadastro')->with('alert-sucess', 'Cadastro feito com sucesso');
            // ong
        } elseif ($nivelAcesso == 3) {

            $logo = $request->file('logo');
            if (empty($logo)) {
                $caminhoRelativo = null;
            } else {
                $logo->storePublicly('uploads');
                $caminhoAbsoluto = public_path() . "/storage/uploads";
                $nomeArquivo = $logo->getClientOriginalName();
                $caminhoRelativo = "storage/uploads/$nomeArquivo";
                $logo->move($caminhoAbsoluto, $nomeArquivo);
            }

            $user = User::create([
                'nivel_acesso' => 3,
                'name' => $request->input('name'),
                'cnpj' => $request->input('cnpj'),
                'data_de_inicio' => $request->input('data_de_inicio'),
                'finalidade_ong' => $request->input('finalidade_ong'),
                $user->logo = $caminhoRelativo,
                'sobre_ong' => $request->input('sobre_ong'),
                'cep' => $request->input('cep'),
                'logradouro' => $request->input('logradouro'),
                'numero' => $request->input('numero'),
                'complemento' => $request->input('complemento'),
                'bairro' => $request->input('bairro'),
                'cidade' => $request->input('cidade'),
                'uf' => $request->input('uf'),
                'telefone' => $request->input('telefone'),
                'celular' => $request->input('celular'),
                'site_ong' => $request->input('site_ong'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'nome_responsavel' => $request->input('nome_responsavel'),
                'cpf_responsavel' => $request->input('cpf_responsavel'),
                'funcao_responsavel' => $request->input('funcao_responsavel'),
                'celular_responsavel' => $request->input('celular_responsavel'),
                'email_responsavel' => $request->input('email_responsavel'),
            ]);

            return redirect()->route('cadastro')->with('alert-sucess', 'Cadastro feito com sucesso');
        }

        return "Não foi possível fazer seu cadastro";
    }
}
