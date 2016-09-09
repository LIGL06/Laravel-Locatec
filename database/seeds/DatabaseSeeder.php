<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'administrador@itesm.mx',
            'password' => bcrypt('ijkl20ur10'),
        ]);

				DB::table('objects')->insert([
						'type' => 'Otro',
						'image' => '01.png',
						'description' => 'Objeto de Prueba',
        ]);

		// $this->call('UserTableSeeder');
	}

}
