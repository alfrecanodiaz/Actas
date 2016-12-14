<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosCursosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursos__cursos', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('materia_id')->unsigned();
            $table->foreign('materia_id')->references('id')->on('materias__materias');
            $table->integer('profesor_id')->unsigned();
            $table->foreign('profesor_id')->references('id')->on('profesores__profesores');
            $table->integer('aula_id')->unsigned();
            $table->foreign('aula_id')->references('id')->on('dependencias__aulas');
            $table->integer('turno_id')->unsigned();
            $table->foreign('turno_id')->references('id')->on('dependencias__turnos');
            $table->integer('seccion_id')->unsigned();
            $table->foreign('seccion_id')->references('id')->on('dependencias__secciones');
            $table->integer('convocatoria_id')->unsigned();
            $table->foreign('convocatoria_id')->references('id')->on('semestres__convocatorias');
            $table->integer('semestre_id')->unsigned();
            $table->foreign('semestre_id')->references('id')->on('semestres__semestres');
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
		Schema::drop('cursos__cursos');
	}
}
