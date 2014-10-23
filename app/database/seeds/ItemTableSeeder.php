<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Remuneracion\Entidades\Item;

class ItemTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		Item::create([
			'id'	=>	1,
			'nombre'	=>	'Bono Produccion',
			'tipo'	=>	'fijo',
			'valor'	=>	50000,
			'empresa_id'	=>	1
		]);

		Item::create([
			'id'	=>	2,
			'nombre'	=>	'Transporte',
			'tipo'	=>	'fijo',
			'valor'	=>	50000,
			'empresa_id'	=>	1
		]);

		Item::create([
			'id'	=>	3,
			'nombre'	=>	'Colazion',
			'tipo'	=>	'fijo',
			'valor'	=>	30000,
			'empresa_id'	=>	1
		]);

		Item::create([
			'id'	=>	4,
			'nombre'	=>	'Bono Produccion',
			'tipo'	=>	'fijo',
			'valor'	=>	100000,
			'empresa_id'	=>	2
		]);

	}

}