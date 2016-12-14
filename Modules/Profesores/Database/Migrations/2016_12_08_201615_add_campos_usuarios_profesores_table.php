<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposUsuariosProfesoresTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profesores__profesores', function(Blueprint $table)
        {
            $table->string('username',32);
            $table->string('email',100);
            $table->string('password',64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profesores__profesores', function(Blueprint $table)
        {
            $table->dropColumn('username');
            $table->dropColumn('email');
            $table->dropColumn('password');
        });
    }

}
