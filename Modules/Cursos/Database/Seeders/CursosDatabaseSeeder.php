<?php namespace Modules\Cursos\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class CursosDatabaseSeeder extends Seeder {

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
		
		DB::table('cursos__cursos')->insert([
			'temporada'=>'Primavera',
			'materia_id'=>'1',
			'profesor_id'=>'1',
		]);

		DB::table('cursos__cursos')->insert([
			'temporada'=>'Otoño',
			'materia_id'=>'2',
			'profesor_id'=>'2',
		]);

		DB::table('cursos__cursos')->insert([
			'temporada'=>'Primavera',
			'materia_id'=>'3',
			'profesor_id'=>'3',
		]);
	}

}