<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;
use App\Http\Controllers\Controller;

class BuscaController extends Controller
{
    public function index()
    {
        return view('busca');
    }

    public function pesquisar(Request $request)
    {
        if (empty($request)) {
            $profissionais = Profissional::all();
            return view('busca');
        } else {
            $servico = $request->input('servico');

            $profissionais = Profissional::where("id_servico", "=", "$servico")->get();
            if(count($profissionais) <= 0){
                $profissionais = Profissional::get();
            }

            return view('busca')->with('profissionais', $profissionais);
        }
        return "Profissional não encontrado";
    }
}