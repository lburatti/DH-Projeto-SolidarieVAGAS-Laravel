<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
             $table->string('cpf_cnpj', 14)->unique();
            // $table->string('cnpj', 14)->unique()->nullable();
            $table->string('data_de_nasc_inicio')->nullable();
            // $table->string('data_de_inicio')->nullable();
            // $table->string('finalidade_ong', 100)->nullable();
            // $table->binary('logo')->nullable();
            // $table->string('sobre_ong', 500)->nullable();
            $table->string('cep', 8);
            $table->string('logradouro', 50);
            $table->string('numero', 10);
            $table->string('complemento', 50)->nullable();
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('uf', 2);
            $table->string('telefone', 10)->nullable();
            $table->string('celular', 11);
            // $table->string('site_ong', 100)->nullable();
            // $table->string('nome_responsavel', 50)->nullable();
            // $table->string('cpf_responsavel', 50)->nullable();
            // $table->string('funcao_responsavel', 50)->nullable();
            // $table->string('celular_responsavel', 11)->nullable();
            // $table->string('email_responsavel', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('cpf_cnpj');
            $table->dropColumn('data_de_nasc_inicio');
            $table->dropColumn('cep');
            $table->dropColumn('logradouro');
            $table->dropColumn('numero');
            $table->dropColumn('complemento');
            $table->dropColumn('bairro');
            $table->dropColumn('cidade');
            $table->dropColumn('uf');
            $table->dropColumn('telefone');
            $table->dropColumn('celular');
        });
    }
}
