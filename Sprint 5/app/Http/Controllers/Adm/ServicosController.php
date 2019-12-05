<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Servico;
use App\GrupoServicos;

class ServicosController extends Controller
{
    public function index()
    {
        return view('adm.servicos');
    }

    public function criar()
    {
        return view('adm.servicos.criar');
    }
    
    public function criarServico(Request $request)
    {
        // $request->validate([
        //     'nome' => 'required|max:50',
        //     'descricao' => 'max:100',
        //     'id_grupo_servicos' => 'required'
        // ]);

        $servico = Servico::create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao')
            // 'id_grupo_servicos' => $request->input('grupo_servicos->id')
        ]);

        return view('adm.servicos')->with('servico', $servico);
    }

    public function criarGrupoServico(Request $request)
    {
        // $request->validate([
        //     'nome' => 'required|max:50',
        // ]);

        $grupoServico = GrupoServicos::create([
            'nome' => $request->input('nome'),
        ]);

        return view('adm.servicos')->with('grupoServico', $grupoServico);
    }

    public function editarServico($id)
    {
        $servico = Servico::find($id);
        return view('adm.editar-servicos')->with('servico', $servico);
    }

    public function editarGrupoServico($id)
    {
        $grupoServico = GrupoServicos::find($id);
        return view('adm.editar-grupo-servicos')->with('grupoServico', $grupoServico);
    }

    public function atualizarServico(Request $request, $id)
    {
        // $request->validate([
        //     'nome' => 'required|max:50',
        //     'descricao' => 'max:100',
        //     'id_grupo_servicos' => 'required'
        // ]);

        $servico = Servico::find($id);

        $servico->nome = $request->input('nome');
        $servico->descricao = $request->input('descricao');
        // $servico->id_grupo_servicos = $request->input('id_grupo_servicos');

        $servico->save();

        return redirect('/adm/servicos');
    }

    public function atualizarGrupoServico(Request $request, $id)
    {
        // $request->validate([
        //     'nome' => 'required|max:50',
        //     'id_servicos' => 'required'
        // ]);

        $grupoServico = GrupoServicos::find($id);

        $grupoServico->nome = $request->input('nome');
        // $grupoServico->id_servicos = $request->input('id_servicos');

        $grupoServico->save();

        return redirect('/adm/servicos');
    }

    public function excluirServico($id)
    {
        $servico = Servico::find($id);
        $servico->delete();

        return redirect()->route('adm.servicos.index')->with('alert-sucess', 'Serviço excluido com sucesso');
    }

    public function excluirGrupoServico($id)
    {
        $grupoServico = GrupoServicos::find($id);
        $grupoServico->delete();

		return redirect()->route('adm.servicos.index')->with('alert-sucess', 'Grupo de serviços excluido com sucesso');
    }
}