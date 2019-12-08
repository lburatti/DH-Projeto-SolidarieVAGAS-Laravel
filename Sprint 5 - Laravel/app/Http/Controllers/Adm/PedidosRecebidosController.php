<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PedidoOrcamento;

class PedidosRecebidosController extends Controller
{
    public function index()
    {
        return view('adm.pedidos-recebidos');
    }

    public function pesquisar(Request $request)
    {
        if (empty($request)) {
            $pedidosRecebidos = PedidoOrcamento::all();
            return view('adm.pedidos-recebidos');
        } else {
            $periodoDe = $request->input(date('periodoDe' . '00:00:00', time()));
            $periodoAte = $request->input(date('periodoAte' . '00:00:00', time()));

            $pedidosRecebidos = PedidoOrcamento::whereBetween('created_at', array($periodoDe, $periodoAte))->get();
            
            if(count($pedidosRecebidos) <= 0){
                $pedidosRecebidos = PedidoOrcamento::get();
            }

            return view('adm.pedidos-recebidos')->with('pedidos-recebidos', $pedidosRecebidos);
        }
        return "Pedido não encontrado";
    }

    public function criar()
    {
        return view('busca');
    }

    public function criarNovo(Request $request)
    {
        // $request->validate([
        //     'descricao' => 'required|max:500',
        //     'quantidade' => 'required|max:50'
        // ]);

        $pedidoRecebido = PedidoOrcamento::create([
            'descricao' => $request->input('descricao'),
            'quantidade' => $request->input('quantidade'),
            // 'id_user_contratante' => $request->input('id_user_contratante'),
            // 'id_user_ong' => $request->input('id_user_ong'),
            // 'id_profissional' => $request->input('id_profissional'),
            // 'id_servico' => $request->input('id_servico')
        ]);

        return view('adm.pedidos-recebidos')->with('pedidos-recebidos', $pedidoRecebido);
    }
}
