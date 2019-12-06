<?php

use Illuminate\Database\Seeder;
use App\NivelAcesso;

class NiveisAcessoTableSeeder extends Seeder
{
    public function run()
    {
        for($i=1; $i < 4; $i++) {
            $nivelAcesso = new NivelAcesso();

            $nivelAcesso->nome = 'Nivel '.$i;

            $nivelAcesso->save();

        }
    }
}
