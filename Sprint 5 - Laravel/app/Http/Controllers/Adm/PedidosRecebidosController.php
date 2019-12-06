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
        if (!empty($request)) {
            $pedido = $request->input('periodoDe');
            $pedido = $request->input('periodoAte');

            $pedidoRecebido = PedidoOrcamento::where("created_at", "like", "%$pedido%")->get();
            if(isset($pedidoRecebido->id_user_ong)) {
                return view('adm.pedidos-recebidos', $pedidoRecebido);
            } else {
                return view('adm.pedidos-recebidos', $pedidoRecebido);
            }
        } else {
            $pedido = PedidoOrcamento::all();
            return view('adm.pedidos-recebidos', $pedido);
            
        }
    }
}
