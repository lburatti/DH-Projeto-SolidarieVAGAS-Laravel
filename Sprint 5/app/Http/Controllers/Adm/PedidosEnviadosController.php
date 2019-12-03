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
        if (!empty($request)) {
            $pedido = $request->input('periodoDe');
            $pedido = $request->input('periodoAte');

            $pedidoEnviado = PedidoOrcamento::where("created_at", "like", "%$pedido%")->get();
            if(isset($pedidoEnviado->id_user_ong)) {
                return view('adm.pedidos-enviados', $pedidoEnviado);
            } else {
                return view('adm.pedidos-enviados', $pedidoEnviado);
            }
        } else {
            $pedido = PedidoOrcamento::all();
            return view('adm.pedidos-enviados', $pedido);
            
        }
    }
}
