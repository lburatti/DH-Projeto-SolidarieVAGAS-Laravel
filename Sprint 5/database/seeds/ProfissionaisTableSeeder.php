<?php

use Illuminate\Database\Seeder;
use App\Profissional;

class ProfissionaisTableSeeder extends Seeder
{
    public function run()
    {
        for($i=0; $i < 10; $i++) {
            $profissionais = new Profissional;

            $profissionais->nome = 'Fulano '.$i;
            $profissionais->cpf = '1234567891'.$i;
            $profissionais->rg = '9876543'.$i;
            $profissionais->data_de_nascimento = '10/10/199'.$i;
            $profissionais->foto = 'foto'.$i;
            $profissionais->tempo_na_ong = $i;
            $profissionais->resumo_historia = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'.$i;
            $profissionais->cep = '0101002'.$i;
            $profissionais->logradouro = 'Rua Numero '.$i;
            $profissionais->numero = '20'.$i;
            $profissionais->complemento = 'Casa '.$i;
            $profissionais->bairro = 'Vila Número '.$i;
            $profissionais->cidade = 'São Paulo';
            $profissionais->uf = 'SP';
            $profissionais->telefone = '112222333'.$i;
            $profissionais->celular = '1195555444'.$i;
            $profissionais->email = 'fulano'.$i.'@gmail.com';

            $profissionais->save();
        }
    }
}
