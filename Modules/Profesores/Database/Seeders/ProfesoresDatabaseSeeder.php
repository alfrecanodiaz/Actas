<?php namespace Modules\Profesores\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProfesoresDatabaseSeeder extends Seeder {

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
		
		DB::table('profesores__profesores')->insert([
			'nombre'=>'Jose Maubet',
		]);

		DB::table('profesores__profesores')->insert([
			'nombre'=>'Ladislao Casco',
		]);

		DB::table('profesores__profesores')->insert([
			'nombre'=>'Stella Mares',
		]);
	}

}