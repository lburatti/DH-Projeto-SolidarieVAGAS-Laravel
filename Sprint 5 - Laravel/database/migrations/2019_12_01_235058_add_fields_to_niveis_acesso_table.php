<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToNiveisAcessoTable extends Migration
{
    public function up()
    {
        Schema::table('niveis_acesso', function (Blueprint $table) {
            $table->string('nome', 20);
        });
    }

    public function down()
    {
        Schema::table('niveis_acesso', function (Blueprint $table) {
            $table->dropColumn('nome');
        });
    }
}
