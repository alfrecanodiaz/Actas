<?php namespace Modules\Materias\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class MateriasDatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * php artisan module:seed NOMBRE
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
		DB::table('materias__materias')->insert([
			'nombre'=>'Gestión de Proyectos Informáticos',
		]);

		DB::table('materias__materias')->insert([
			'nombre'=>'Introducción a la Informática',
		]);

		DB::table('materias__materias')->insert([
			'nombre'=>'Matemáticas discretas',
		]);
	}

}