<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        for($i=0; $i < 10; $i++) {
            $contratantes = new User;

            $contratantes->nivel_acesso = "2";
            $contratantes->name = 'José '.$i;
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
            $contratantes->password = '65432'.$i;

            $contratantes->save();
        }

        for($i=0; $i < 10; $i++) {
            $ongs = new User;

            $ongs->nivel_acesso = "3";
            $ongs->name = 'ONG '.$i;
            $ongs->cnpj = '1122233300019'.$i;
            $ongs->data_de_inicio = '01/10/200'.$i;
            $ongs->finalidade_ong = 'Lorem ipsum dolor s '.$i;
            $ongs->logo = 'logo'.$i;
            $ongs->sobre_ong = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'.$i;
            $ongs->cep = '0101002'.$i;
            $ongs->logradouro = 'Rua Numero '.$i;
            $ongs->numero = '20'.$i;
            $ongs->complemento = 'Casa '.$i;
            $ongs->bairro = 'Vila Número '.$i;
            $ongs->cidade = 'São Paulo';
            $ongs->uf = 'SP';
            $ongs->telefone = '112222333'.$i;
            $ongs->celular = '1195555444'.$i;
            $ongs->site_ong = 'www.ong'.$i.'.com.br';
            $ongs->email = 'ong'.$i.'@gmail.com';
            $ongs->password = '65432'.$i;
            $ongs->nome_responsavel = 'Joaquim '.$i;
            $ongs->cpf_responsavel = '5556663332'.$i;
            $ongs->funcao_responsavel = 'Função '.$i;
            $ongs->celular_responsavel = '1195555444'.$i;
            $ongs->email_responsavel = 'joaquim'.$i.'@gmail.com';

            $ongs->save();
        }
    }
}
