<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\Profissional;

class BuscaController extends Controller
{
    public function index()
    {
        return view('busca');
    }

    public function pesquisar(Request $request)
    {
        $servico = $request->input('servico');

        $id_servico = Servico::where("nome", "like", "%$servico%")->get("id");

        if (isset($id_servico)) {
            return $id_servico;
        }
        return view('busca');
    }

    public function retornar($id_servico) 
    {
        // $profissionais = Profissional::find($id_servico);
        $profissionais = Profissional::where("id_servico", "=", $id_servico)->get();

        return view('busca')->with('profissionais', $profissionais);

    }
}