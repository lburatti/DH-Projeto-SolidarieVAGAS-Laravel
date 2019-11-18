<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToOngs extends Migration
{
    public function up()
    {
        Schema::table('ongs', function (Blueprint $table) {
            $table->string('nome', 50);
            $table->string('cnpj', 14)->unique();
            $table->date('data_de_inicio');
            $table->string('finalidade_ong', 100);
            $table->binary('logo')->nullable();
            $table->string('sobre_ong', 500)->nullable();
            $table->string('cep', 8);
            $table->string('logradouro', 50);
            $table->string('numero', 10);
            $table->string('complemento', 50)->nullable();
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('uf', 2);
            $table->string('telefone', 10)->nullable();
            $table->string('celular', 11);
            $table->string('site_ong', 100)->nullable();
            $table->string('email', 50)->unique();
            $table->string('senha', 50);
            $table->string('nome_responsavel', 50);
            $table->string('cpf_responsavel', 50);
            $table->string('funcao_responsavel', 50)->nullable();
            $table->string('celular_responsavel', 11)->nullable();
            $table->string('email_responsavel', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::table('ongs', function (Blueprint $table) {
            $table->dropColumn('nome');
            $table->dropColumn('cnpj');
            $table->dropColumn('data_de_inicio');
            $table->dropColumn('finalidade_ong', 100);
            $table->dropColumn('logo');
            $table->dropColumn('sobre_ong');
            $table->dropColumn('cep');
            $table->dropColumn('logradouro');
            $table->dropColumn('numero');
            $table->dropColumn('complemento');
            $table->dropColumn('bairro');
            $table->dropColumn('cidade');
            $table->dropColumn('uf');
            $table->dropColumn('telefone');
            $table->dropColumn('celular');
            $table->dropColumn('site_ong');
            $table->dropColumn('email');
            $table->dropColumn('senha');
            $table->dropColumn('nome_responsavel');
            $table->dropColumn('cpf_responsavel');
            $table->dropColumn('funcao_responsavel');
            $table->dropColumn('celular_responsavel');
            $table->dropColumn('email_responsavel');
        });
    }
}
