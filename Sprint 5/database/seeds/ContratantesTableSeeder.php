<?php

use App\Contratante;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContratantesTableSeeder extends Seeder
{
    public function run()
    {
        for($i=0; $i < 10; $i++) {
            $contratantes = new Contratante;

            $contratantes->nome = 'José '.$i;
            $contratantes->cpf = '5554443332'.$i;
            $contratantes->data_de_nascimento = '05/12/198'.$i;
            $contratantes->cep = '0101003'.$i;
            $contratantes->logradouro = 'Rua São '.$i;
            $contratantes->numero = '30'.$i;
            $contratantes->complemento = 'Apto '.$i;
            $contratantes->bairro = 'Centro '.$i;
            $contratantes->cidade = 'São Paulo';
            $contratantes->uf = 'SP';
            $contratantes->telefone = '115555111'.$i;
            $contratantes->celular = '1198888777'.$i;
            $contratantes->email = 'jose'.$i.'@gmail.com';
            $contratantes->senha = '65432'.$i;

            $contratantes->save();
        }
        
    }
}
