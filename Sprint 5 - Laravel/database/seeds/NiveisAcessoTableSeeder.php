<?php

use Illuminate\Database\Seeder;
use App\NivelAcesso;

class NiveisAcessoTableSeeder extends Seeder
{
    public function run()
    {
        $admin = new NivelAcesso();
        $admin->nome = 'Admin';
        $admin->id = '1';
        $admin->save();

        $contratante = new NivelAcesso();
        $contratante->nome = 'Contratante';
        $contratante->id = '2';
        $contratante->save();

        $ong = new NivelAcesso();
        $ong->nome = 'ONG';
        $ong->id = '3';
        $ong->save();
    
    }
}
