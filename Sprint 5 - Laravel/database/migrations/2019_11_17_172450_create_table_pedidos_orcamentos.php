<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePedidosOrcamentos extends Migration
{
    public function up()
    {
        Schema::create('pedidos_orcamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos_orcamentos');
    }
}
