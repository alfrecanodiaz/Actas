<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosInscripcionesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumnos__inscripciones', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('cursos__cursos');
            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('id')->on('alumnos__alumnos');
            $table->integer('semestre_id')->unsigned();
            $table->foreign('semestre_id')->references('id')->on('semestres__semestres');
            $table->integer('convocatoria_id')->unsigned();
            $table->foreign('convocatoria_id')->references('id')->on('semestres__convocatorias');
            $table->integer('turno_id')->unsigned();
            $table->foreign('turno_id')->references('id')->on('dependencias__turnos');
            $table->integer('seccion_id')->unsigned();
            $table->foreign('seccion_id')->references('id')->on('dependencias__secciones');
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumnos__inscripciones');
	}
}
