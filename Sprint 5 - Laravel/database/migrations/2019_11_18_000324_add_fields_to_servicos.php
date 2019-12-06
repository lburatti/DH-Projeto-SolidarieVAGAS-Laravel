<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToServicos extends Migration
{
    public function up()
    {
        Schema::table('servicos', function (Blueprint $table) {
            $table->string('nome', 50)->unique();
            $table->string('descricao', 100);
        });
    }

    public function down()
    {
        Schema::table('servicos', function (Blueprint $table) {
            $table->dropColumn('nome');
            $table->dropColumn('descricao');
        });
    }
}
