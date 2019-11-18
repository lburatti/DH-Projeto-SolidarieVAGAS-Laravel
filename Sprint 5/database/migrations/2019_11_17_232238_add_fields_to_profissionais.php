<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToProfissionais extends Migration
{
    public function up()
    {
        Schema::table('profissionais', function (Blueprint $table) {
            $table->string('nome', 50);
            $table->string('cpf', 11)->unique();
            $table->string('rg', 10);
            $table->date('data_de_nascimento');
            $table->binary('foto')->nullable();
            $table->string('tempo_na_ong', 20)->nullable();
            $table->string('resumo_historia', 500)->nullable();
            $table->string('cep', 8);
            $table->string('logradouro', 50);
            $table->string('numero', 10);
            $table->string('complemento', 50)->nullable();
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('uf', 2);
            $table->string('telefone', 10)->nullable();
            $table->string('celular', 11);
            $table->string('email', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::table('profissionais', function (Blueprint $table) {
            $table->dropColumn('nome');
            $table->dropColumn('cpf');
            $table->dropColumn('rg');
            $table->dropColumn('data_de_nascimento');
            $table->dropColumn('foto');
            $table->dropColumn('tempo_na_ong');
            $table->dropColumn('resumo_historia');
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
        });
    }
}
