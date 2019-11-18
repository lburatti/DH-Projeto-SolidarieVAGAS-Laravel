<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGruposServicosToServicosTable extends Migration
{
    public function up()
    {
        Schema::table('servicos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_grupo_servicos')->nullable();
            $table->foreign('id_grupo_servicos')->references('id')->on('grupos_servicos');
        });
    }

    public function down()
    {
        Schema::table('servicos', function (Blueprint $table) {
            $table->dropForeign('id_grupo_servicos');
        });
    }
}
