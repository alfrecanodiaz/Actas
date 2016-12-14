<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCampoCodigoProfesoresTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profesores__profesores', function(Blueprint $table)
        {
            $table->integer('codigo');
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
            $table->dropColumn('codigo');
        });
    }

}
