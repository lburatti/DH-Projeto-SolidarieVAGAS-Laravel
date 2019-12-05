<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NivelAcesso;

class NiveisAcessoController extends Controller
{
    public function index()
    {
        return view('adm.niveis-acesso');
    }

    public function criar()
    {
        return view('adm.niveis-acesso.criar');
    }
    
    public function criarNovo(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:20'
        ]);

        $nivelAcesso = NivelAcesso::create([
            'nome' => $request->input('nome')
        ]);

        return view('adm.niveis-acesso')->with('nivelAcesso', $nivelAcesso);
    }

    public function editar($id)
    {
        $nivelAcesso = NivelAcesso::find($id);
        return view('adm.editar-niveis-acesso')->with('nivelAcesso', $nivelAcesso);
    }

    public function atualizar(Request $request, $id)
    {
        // $request->validate([
        //     'nome' => 'required|max:20'
        // ]);

        $nivelAcesso = NivelAcesso::find($id);

        $nivelAcesso->nome = $request->input('nome');

        $nivelAcesso->save();

        return redirect('/adm/niveis-acesso');
    }

    public function excluir($id)
    {
        $nivelAcesso = NivelAcesso::find($id);
        $nivelAcesso->delete();

		return redirect()->route('adm.niveis-acesso.index')->with('alert-sucess', 'Nivel de Acesso excluido com sucesso');
    }
}
