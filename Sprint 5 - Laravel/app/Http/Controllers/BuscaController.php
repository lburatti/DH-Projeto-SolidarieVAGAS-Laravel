<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;
use App\PedidoOrcamento;
use App\User;
use App\Servico;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\DB;

class BuscaController extends Controller
{
    public function index()
    {
        return view('busca');
    }

    public function pesquisar(Request $request)
    {
        if (empty($request)) {
            //$profissionais = Profissional::all();
            return view('busca');
        } else {
            $servico = $request->input('servico');

            $profissionais = Profissional::join('servicos', 'profissionais.id_servico', '=', 'servicos.id')
                ->where('servicos.nome', 'like', '%' . $servico . '%')
                ->get();

            return view('busca')->with('profissionais', $profissionais);
        }
        return "Profissional não encontrado";
    }

    public function create(Request $request)
    {
        $pedido = PedidoOrcamento::create([
            'descricao' => $request->input('descricao'),
            'quantidade' => $request->input('quantidade')
            // 'id_user_contratante' => $request->input('id_user_contratante'),
            // 'id_user_ong' => $request->input('id_user_ong'),
            // 'id_profissional' => $request->input('id_profissional'),
            // 'id_servico' => $request->input('id_servico')
        ]);

        return view('busca')->with('pedido', $pedido);
    }
}
