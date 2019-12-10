<?php

use Illuminate\Database\Seeder;
use App\Servico;

class ServicosTableSeeder extends Seeder
{
    public function run()
    {
        $servico1 = new Servico();

        $servico1->nome = 'Eletrecista';
        $servico1->descricao = 'Reparos elétricos, tomadas, etc.';

        $servico1->save();

        $servico2 = new Servico();

        $servico2->nome = 'Pintor(a)';
        $servico2->descricao = 'Pintura de casas, apartamentos, etc.';

        $servico2->save();

        $servico3 = new Servico();

        $servico3->nome = 'Costureiro(a)';
        $servico3->descricao = 'Vestidos, ajustes e reformas de roupas';

        $servico3->save();

        $servico4 = new Servico();

        $servico4->nome = 'Cozinheiro(a)';
        $servico4->descricao = 'Bolos, doces, salgados, etc.';

        $servico4->save();


        // ([
        //     ['nome' => 'Eletrecista',
        //     'descricao' => 'Reparos elétricos, tomadas, etc.'],
        //     ['nome' => 'Pintor(a)',
        //     'descricao' => 'Pintura de casas, apartamentos, etc.'],
        //     ['nome' => 'Costureiro(a)',
        //     'descricao' => 'Vestidos, ajustes e reformas de roupas'],
        //     ['nome' => 'Cozinheiro(a)',
        //     'descricao' => 'Bolos, doces, salgados, etc.'],
        //     ['nome' => 'Programador(a)',
        //     'descricao' => 'Sites, sistemas, etc.'],
        //     ['nome' => 'Cuidador(a)',
        //     'descricao' => 'Cuidador de idosos, crianças e etc'],
        //     ['nome' => 'Jardineiro(a)',
        //     'descricao' => 'Reparos e manutenção de jardins']
        // ]);
        // $servico->save();
    }
}
