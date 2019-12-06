<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profissional;

class ProfissionaisController extends Controller
{
    public function index()
    {
        return view('adm.profissionais');
    }

    public function pesquisar(Request $request)
    {
        if (empty($request)) {
            $profissionais = Profissional::all();
            return view('adm.profissionais');
        } else {
            $nome = $request->input('nome');

            $profissionais = Profissional::where("nome", "LIKE", "%$nome%")->get();
            if(count($profissionais) <= 0){
                $profissionais = Profissional::get();
            }

            return view('adm.profissionais')->with('profissionais', $profissionais);
            // return view('adm.profissionais')->with('nome', $nome);
        }
        return "Profissional não encontrado";
    }

    public function criar()
    {
        return view('adm.profissionais.criar');
    }
    
    public function criarProfissional(Request $request)
    {
        // $request->validate([
        //     'nome' => 'required|max:20',
        //     'cpf' => 'required|min:11|max:11',
        //     'rg' => 'max:10',
        //     'data_de_nascimento' => 'required|max:8',
        //     'foto' => 'max:500',
        //     'tempo_na_ong' => 'required|max:20',
        //     'resumo_historia' => 'required|max:200',
        //     'cep' => 'required|min:8|max:8',
        //     'logradouro' => 'required|max:50',
        //     'numero' => 'required|max:10',
        //     'complemento' => 'max:20',
        //     'bairro' => 'required|max:20',
        //     'cidade' => 'required|max:20',
        //     'uf' => 'required|min:2|max:2',
        //     'telefone' => 'min:8|max:10',
        //     'celular' => 'min:9|max:11',
        //     'email' => 'required|max:50',
        //     'email' => 'required|max:50',
        //     'id_ong' => 'required|max:10',
        //     'id_grupoServicos' => 'required|max:10',
        //     'id_servico' => 'required|max:10'
        // ]);

        $profissional = Profissional::create([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'rg' => $request->input('rg'),
            'data_de_nascimento' => $request->input('data_de_nascimento'),
            'foto' => $request->input('foto'),
            'tempo_na_ong' => $request->input('tempo_na_ong'),
            'resumo_historia' => $request->input('resumo_historia'),
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
            // 'id_ong' => $request->input('id_ong'),
            // 'id_grupoServicos' => $request->input('id_grupoServicos')
            // 'id_servico' => $request->input('id_servico')
        ]);

        return view('adm.profissionais')->with('profissional', $profissional);
    }

    public function editar($id)
    {
        $profissional = Profissional::find($id);
        return view('adm.editar-profissionais')->with('profissional', $profissional);
    }

    public function atualizar(Request $request, $id)
    {
        $profissional = Profissional::find($id);

        $profissional->nome = $request->input('nome');
        $profissional->cpf = $request->input('cpf');
        $profissional->rg = $request->input('rg');
        $profissional->data_de_nascimento = $request->input('data_de_nascimento');
        $profissional->foto = $request->input('foto');
        $profissional->tempo_na_ong = $request->input('tempo_na_ong');
        $profissional->resumo_historia = $request->input('resumo_historia');
        $profissional->cep = $request->input('cep');
        $profissional->logradouro = $request->input('logradouro');
        $profissional->numero = $request->input('numero');
        $profissional->complemento = $request->input('complemento');
        $profissional->bairro = $request->input('bairro');
        $profissional->cidade = $request->input('cidade');
        $profissional->uf = $request->input('uf');
        $profissional->telefone = $request->input('telefone');
        $profissional->celular = $request->input('celular');
        $profissional->email = $request->input('email');
        // $profissional->id_ong = $request->input('id_ong');
        // $profissional->id_grupoServicos = $request->input('id_grupoServicos');
        // $profissional->id_servico = $request->input('id_servico');

        $profissional->save();

        return redirect('/adm/profissionais');
    }

    public function excluir($id)
    {
        $profissional = Profissional::find($id);
        $profissional->delete();

        return redirect()->route('adm.profissionais.index')->with('alert-sucess', 'Profissional excluido com sucesso');
    }
}
