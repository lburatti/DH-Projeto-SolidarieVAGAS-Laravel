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
            $table->foreign('id_user_contratante')->references('id')->on('users');
            $table->unsignedBigInteger('id_user_ong')->nullable();
            $table->foreign('id_user_ong')->references('id')->on('users');
            $table->unsignedBigInteger('id_profissional')->nullable();
            $table->foreign('id_profissional')->references('id')->on('profissionais');
            $table->unsignedBigInteger('id_servico')->nullable();
            $table->foreign('id_servico')->references('id')->on('servicos');
        });
    }

    public function down()
    {
        Schema::table('pedidos_orcamentos', function (Blueprint $table) {
            $table->dropForeign('id_user_contratante');
            $table->dropColumn('id_user_contratante');
            $table->dropForeign('id_user_ong');
            $table->dropColumn('id_user_ong');
            $table->dropForeign('id_profissional');
            $table->dropColumn('id_profissional');
            $table->dropForeign('id_servico');
            $table->dropColumn('id_servico');
        });
    }
}
