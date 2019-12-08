<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $contratantes = new User;

            $contratantes->nivel_acesso = "2";
            $contratantes->name = 'José ' . $i;
            $contratantes->cpf_cnpj = '5554443332' . $i;
            $contratantes->data_de_nasc_inicio = '05/12/198' . $i;
            $contratantes->cep = '0101003' . $i;
            $contratantes->logradouro = 'Rua São ' . $i;
            $contratantes->numero = '30' . $i;
            $contratantes->complemento = 'Apto ' . $i;
            $contratantes->bairro = 'Centro ' . $i;
            $contratantes->cidade = 'São Paulo';
            $contratantes->uf = 'SP';
            $contratantes->telefone = '115555111' . $i;
            $contratantes->celular = '1198888777' . $i;
            $contratantes->email = 'jose' . $i . '@gmail.com';
            $contratantes->password = '65432' . $i;

            $contratantes->save();
        }

        for ($i = 0; $i < 10; $i++) {
            $ongs = new User;

            $ongs->nivel_acesso = "3";
            $ongs->name = 'ONG ' . $i;
            $ongs->cpf_cnpj = '1122233300019' . $i;
            $ongs->data_de_nasc_inicio = '01/10/200' . $i;
            $ongs->cep = '0101002' . $i;
            $ongs->logradouro = 'Rua Numero ' . $i;
            $ongs->numero = '20' . $i;
            $ongs->complemento = 'Casa ' . $i;
            $ongs->bairro = 'Vila Número ' . $i;
            $ongs->cidade = 'São Paulo';
            $ongs->uf = 'SP';
            $ongs->telefone = '112222333' . $i;
            $ongs->celular = '1195555444' . $i;
            $ongs->email = 'ong' . $i . '@gmail.com';
            $ongs->password = '65432' . $i;

            $ongs->save();
        }

        $admin = new User;

        $admin->nivel_acesso = "1";
        $admin->name = 'Admin';
        $admin->cpf_cnpj = '33344455566';
        $admin->data_de_nasc_inicio = '01/10/1990';
        $admin->cep = '01503000';
        $admin->logradouro = 'Rua Sete de Setembro';
        $admin->numero = '200';
        $admin->complemento = 'Casa 5';
        $admin->bairro = 'Centro';
        $admin->cidade = 'São Paulo';
        $admin->uf = 'SP';
        $admin->telefone = '1155443333';
        $admin->celular = '11987876565';
        $admin->email = 'admin@gmail.com';
        $admin->password = 'admin10';

        $admin->save();
    }
}
