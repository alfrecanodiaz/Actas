<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosInscripcionesTranslationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumnos__inscripciones_translations', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('inscripciones_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['inscripciones_id', 'locale']);
            $table->foreign('inscripciones_id')->references('id')->on('alumnos__inscripciones')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumnos__inscripciones_translations');
	}
}
