<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPedidosOrcamentos extends Migration
{
    public function up()
    {
        Schema::table('pedidos_orcamentos', function (Blueprint $table) {
            $table->string('descricao', 500);
            $table->string('quantidade', 100);
        });
    }

    public function down()
    {
        Schema::table('pedidos_orcamentos', function (Blueprint $table) {
            $table->dropColumn('descricao');
            $table->dropColumn('quantidade');
        });
    }
}
