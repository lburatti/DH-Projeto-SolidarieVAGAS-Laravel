<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToContratantes extends Migration
{
    public function up()
    {
        Schema::table('contratantes', function (Blueprint $table) {
            $table->string('nome', 50);
            $table->string('cpf', 11)->unique();
            $table->date('data_de_nascimento');
            $table->string('cep', 8);
            $table->string('logradouro', 50);
            $table->string('numero', 10);
            $table->string('complemento', 50)->nullable();
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('uf', 2);
            $table->string('telefone', 10)->nullable();
            $table->string('celular', 11);
            $table->string('email', 50)->unique();
            $table->string('senha', 50);
        });
    }

    public function down()
    {
        Schema::table('contratantes', function (Blueprint $table) {
            $table->dropColumn('nome');
            $table->dropColumn('cpf');
            $table->dropColumn('data_de_nascimento');
            $table->dropColumn('cep');
            $table->dropColumn('logradouro');
            $table->dropColumn('numero');
            $table->dropColumn('complemento');
            $table->dropColumn('bairro');
            $table->dropColumn('cidade');
            $table->dropColumn('uf');
            $table->dropColumn('telefone');
            $table->dropColumn('celular');
            $table->dropColumn('email');
            $table->dropColumn('senha');
        });
    }
}
