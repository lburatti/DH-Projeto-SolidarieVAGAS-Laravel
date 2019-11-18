<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableContratantes extends Migration
{
    public function up()
    {
        Schema::create('contratantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contratantes');
    }
}
