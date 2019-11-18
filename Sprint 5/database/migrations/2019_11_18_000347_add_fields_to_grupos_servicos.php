<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToGruposServicos extends Migration
{
    public function up()
    {
        Schema::table('grupos_servicos', function (Blueprint $table) {
            $table->string('nome', 50)->unique();
        });
    }

    public function down()
    {
        Schema::table('grupos_servicos', function (Blueprint $table) {
            $table->dropColumn('nome');
        });
    }
}
