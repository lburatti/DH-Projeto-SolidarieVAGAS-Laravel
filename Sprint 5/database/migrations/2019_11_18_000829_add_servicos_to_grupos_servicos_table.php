<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServicosToGruposServicosTable extends Migration
{
    public function up()
    {
        Schema::table('grupos_servicos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_servico')->nullable();
            $table->foreign('id_servico')->references('id')->on('servicos');
        });
    }

    public function down()
    {
        Schema::table('grupos_servicos', function (Blueprint $table) {
            $table->dropForeign('id_servico');
        });
    }
}
