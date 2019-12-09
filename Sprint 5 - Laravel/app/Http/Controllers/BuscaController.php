<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;
use App\Http\Controllers\Controller;
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
}
