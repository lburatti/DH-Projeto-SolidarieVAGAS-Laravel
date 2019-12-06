<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PedidoOrcamento;

class PedidosEnviadosController extends Controller
{
    public function index()
    {
        return view('adm.pedidos-enviados');
    }

    public function pesquisar(Request $request)
    {
        if (empty($request)) {
            $pedidosEnviados = PedidoOrcamento::all();
            return view('adm.pedidos-enviados');
        } else {
            $periodoDe = $request->input(date('periodoDe' . '00:00:00', time()));
            $periodoAte = $request->input(date('periodoAte' . '00:00:00', time()));

            $pedidosEnviados = PedidoOrcamento::whereBetween('created_at', array($periodoDe, $periodoAte))->get();
            
            if(count($pedidosEnviados) <= 0){
                $pedidosEnviados = PedidoOrcamento::get();
            }

            return view('adm.pedidos-enviados')->with('pedidos-enviados', $pedidosEnviados);
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

        $pedidoEnviado = PedidoOrcamento::create([
            'descricao' => $request->input('descricao'),
            'quantidade' => $request->input('quantidade'),
            // 'id_user_contratante' => $request->input('id_user_contratante'),
            // 'id_user_ong' => $request->input('id_user_ong'),
            // 'id_profissional' => $request->input('id_profissional'),
            // 'id_servico' => $request->input('id_servico')
        ]);

        return view('adm.pedidos-enviados')->with('pedidos-enviados', $pedidoEnviado);
    }
}
