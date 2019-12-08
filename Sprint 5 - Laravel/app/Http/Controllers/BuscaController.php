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
        if (empty($request)) {
            $profissinais = Profissional::all();
            return view('busca', $profissinais);
        } else {
            $servico = $request->input('servico');
            // $nivelAcesso = $request->input('nivel_acesso');

            $profissinais = Profissional::where("id_servico", "LIKE", "%$servico%")->get()->appends('id_servico' , request('servico'));
            if(count($profissinais) <= 0){
                $profissinais = Profissional::where("id_servico", "LIKE", "%$servico%")->get()->appends('id_servico' , request('servico'));
            }
            return view('busca')->with('profissionais', $profissinais);
        }
    }
}