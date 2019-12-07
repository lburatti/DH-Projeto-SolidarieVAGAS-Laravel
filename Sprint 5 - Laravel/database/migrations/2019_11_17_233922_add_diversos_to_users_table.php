<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDiversosToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->unsignedBigInteger('id_ong')->nullable();
            // $table->foreign('id_ong')->references('id')->on('ongs');
            // $table->unsignedBigInteger('id_contratante')->nullable();
            // $table->foreign('id_contratante')->references('id')->on('contratantes');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->dropForeign('id_ong');
            // $table->dropColumn('id_ong');
            // $table->dropForeign('id_contratante');
            // $table->dropColumn('id_contratante');
        });
    }
}
