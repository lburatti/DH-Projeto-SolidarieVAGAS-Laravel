<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDiversosToProfissionaisTable extends Migration
{
    public function up()
    {
        Schema::table('profissionais', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ong')->nullable();
            $table->foreign('id_ong')->references('id')->on('ongs');
            $table->unsignedBigInteger('id_grupoServicos')->nullable();
            $table->foreign('id_grupoServicos')->references('id')->on('grupos_servicos');
            $table->unsignedBigInteger('id_servico')->nullable();
            $table->foreign('id_servico')->references('id')->on('servicos');
        });
    }

    public function down()
    {
        Schema::table('profissionais', function (Blueprint $table) {
            $table->dropForeign('id_ong');
            $table->dropForeign('id_grupoServicos');
            $table->dropForeign('id_servico');
        });
    }
}
