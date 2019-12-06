<?php

use Illuminate\Database\Seeder;
use App\PedidoOrcamento;

class PedidosOrcamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i < 6; $i++) {
            $pedidoEnviado = new PedidoOrcamento();

            $pedidoEnviado->descricao = 'Serviço tal tal tal '.$i;
            $pedidoEnviado->quantidade = '2'.$i.' m²';

            $pedidoEnviado->save();

        }
    }
}
