<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class CadastroAdminController extends Controller
{
    public function index()
    {
        return view('adm.cadastro-admin');
    }

    public function criar()
    {
        return view('adm.cadastro-admin');
    }

    public function criarNovo(Request $request)
    {
        $admin = User::create([
            'nivel_acesso' => $request->input('nivel_acesso'),
            'name' => $request->input('name'),
            'cpf_cnpj' => $request->input('cpf_cnpj'),
            'data_de_nasc_inicio' => $request->input('data_de_nasc_inicio'),
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
            'password' => Hash::make($request['password'])
        ]);

        return view('adm.usuarios')->with('admin', $admin);
    }
}