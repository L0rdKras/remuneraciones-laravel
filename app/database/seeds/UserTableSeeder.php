<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Remuneracion\Entidades\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		User::create([
			'id'	=>	1,
			'nombre_completo'	=>	'Rodrigo Adones',
			'nick'	=>	'rodrigo',
			'password'	=>	\Hash::make('pruebaclave'),
			'email'	=>	'rodrigo.adonesv@gmail.com',
			'tipo_usuario'	=>	'Admin'
		]);

		foreach (range(1,5) as $index) {
			$user=User::create([
				'nombre_completo'	=>	$faker->name,
				'nick'	=>	$faker->userName,
				'password'	=>	\Hash::make(123456),
				'email'	=>	$faker->email,
				'tipo_usuario'	=>	$faker->randomElement(['Contador','Encargado'])
			]);			
		}
	}

}