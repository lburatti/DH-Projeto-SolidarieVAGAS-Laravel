<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PedidoOrcamento;
use Illuminate\Support\Facades\Auth;

class PedidosRecebidosController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $pedidosRecebidos = PedidoOrcamento::where("id_user_ong", "=", $userId)->get();

        return view('adm.pedidos-recebidos')->with('pedidosRecebidos', $pedidosRecebidos);
    }

    // public function criar()
    // {
    //     return view('busca');
    // }

    // public function criarNovo(Request $request)
    // {
    //     // $request->validate([
    //     //     'descricao' => 'required|max:500',
    //     //     'quantidade' => 'required|max:50'
    //     // ]);

    //     $pedidoRecebido = PedidoOrcamento::create([
    //         'descricao' => $request->input('descricao'),
    //         'quantidade' => $request->input('quantidade'),
    //         // 'id_user_contratante' => $request->input('id_user_contratante'),
    //         // 'id_user_ong' => $request->input('id_user_ong'),
    //         // 'id_profissional' => $request->input('id_profissional'),
    //         // 'id_servico' => $request->input('id_servico')
    //     ]);

    //     return view('adm.pedidos-recebidos')->with('pedidos-recebidos', $pedidoRecebido);
    // }
}
