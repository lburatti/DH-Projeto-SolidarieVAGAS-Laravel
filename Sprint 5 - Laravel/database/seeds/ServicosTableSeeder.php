<?php

use Illuminate\Database\Seeder;
use App\Servico;

class ServicosTableSeeder extends Seeder
{
    public function run()
    {
        for($i=0; $i < 10; $i++) {
            $servicos = new Servico;

            $servicos->nome = 'Pintor '.$i;
            $servicos->descricao = 'Pintura de casas '.$i;

            $servicos->save();

        }
    }
}
