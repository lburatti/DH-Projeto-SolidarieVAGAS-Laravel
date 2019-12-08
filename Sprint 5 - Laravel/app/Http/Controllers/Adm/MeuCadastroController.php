<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class MeuCadastroController extends Controller
{
    public function index()
    {
        return view('adm.meu-cadastro');
    }

    public function editar($id)
    {
        $user = User::find($id);
        return view('adm.meu-cadastro')->with('user', $user);
    }

    public function atualizar(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->cpf_cnpj = $request->input('cpf_cnpj');
        $user->data_de_nasc_inicio = $request->input('data_de_nasc_inicio');
        $user->cep = $request->input('cep');
        $user->logradouro = $request->input('logradouro');
        $user->numero = $request->input('numero');
        $user->complemento = $request->input('complemento');
        $user->bairro = $request->input('bairro');
        $user->cidade = $request->input('cidade');
        $user->uf = $request->input('uf');
        $user->telefone = $request->input('telefone');
        $user->celular = $request->input('celular');
        $user->email = $request->input('email');
        $user->email = $request->input('password');

        $user->save();

        return redirect('/adm/home');
    }
}
