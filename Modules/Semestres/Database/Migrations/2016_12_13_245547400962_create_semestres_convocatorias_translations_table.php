<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemestresConvocatoriasTranslationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('semestres__convocatorias_translations', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('convocatorias_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['convocatorias_id', 'locale']);
            $table->foreign('convocatorias_id')->references('id')->on('semestres__convocatorias')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('semestres__convocatorias_translations');
	}
}
