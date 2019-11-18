<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDiversosToPedidosOrcamentosTable extends Migration
{
    public function up()
    {
        Schema::table('pedidos_orcamentos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user_contratante')->nullable();
            $table->foreign('id_user_contratante')->references('id_contratante')->on('users');
            $table->unsignedBigInteger('id_user_ong')->nullable();
            $table->foreign('id_user_ong')->references('id_ong')->on('users');
            $table->unsignedBigInteger('id_profissional')->nullable();
            $table->foreign('id_profissional')->references('id')->on('profissionais');
            $table->unsignedBigInteger('id_servico')->nullable();
            $table->foreign('id_servico')->references('id')->on('servicos');
        });
    }

    public function down()
    {
        Schema::table('pedidos_orcamentos', function (Blueprint $table) {
            $table->dropForeign('id_usuario');
            $table->dropForeign('id_usuario');
            $table->dropForeign('id_profissional');
            $table->dropForeign('id_servico');
        });
    }
}
