<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class MeuCadastroController extends Controller
{
    // contratante
    public function indexContratante()
    {
        return view('adm.cadastro-contratante');
    }

    public function editarContratante($id)
    {
        $user = User::find($id);
        return view('adm.cadastro-contratante')->with('user', $user);
    }

    public function atualizarContratante(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->input('nivel_acesso') == 2) {
            $user->name = $request->input('name');
            $user->cpf = $request->input('cpf');
            $user->data_de_nascimento = $request->input('data_de_nascimento');
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

            $user->save();
        }
        return redirect('/adm/cadastro-contratante');
    }

    // ong
    public function indexOng()
    {
        return view('adm.cadastro-ong');
    }

    public function editarOng($id)
    {
        $user = User::find($id);
        if (empty($user)) {
            return view('adm.cadastro-ong');
        }
        return view('adm.cadastro-ong')->with('user', $user);
    }

    public function atualizarOng(Request $request, $id)
    {
        $user = User::find($id);

        if ($request->input('nivel_acesso') == 3) {
            $user->name = $request->input('name');
            $user->cnpj = $request->input('cnpj');
            $user->data_de_inicio = $request->input('data_de_inicio');
            $user->finalidade_ong = $request->input('finalidade_ong');
            $user->logo = $request->input('logo');
            $user->sobre_ong = $request->input('sobre_ong');
            $user->cep = $request->input('cep');
            $user->logradouro = $request->input('logradouro');
            $user->numero = $request->input('numero');
            $user->complemento = $request->input('complemento');
            $user->bairro = $request->input('bairro');
            $user->cidade = $request->input('cidade');
            $user->uf = $request->input('uf');
            $user->telefone = $request->input('telefone');
            $user->celular = $request->input('celular');
            $user->site_ong = $request->input('site_ong');
            $user->email = $request->input('email');
            $user->nome_responsavel = $request->input('nome_responsavel');
            $user->cpf_responsavel = $request->input('cpf_responsavel');
            $user->funcao_responsavel = $request->input('funcao_responsavel');
            $user->celular_responsavel = $request->input('celular_responsavel');
            $user->email_responsavel = $request->input('email_responsavel');

            $user->save();
        }

        return redirect('/adm/cadastro-ong');
    }
}
