<?php

use Remuneracion\Entidades\Empresa;

class EmpresaTableSeeder extends Seeder {

	public function run()
	{

		Empresa::create([
			'id'	=>	1,
			'nombre'	=>	'Daitocar',
			'rut'	=>	'76.093.780-0',
			'giro'	=>	'Venta de Repuestos',
			'email'	=>	'daitocar@daitocar.cl'
		]);

		Empresa::create([
			'id'	=>	2,
			'nombre'	=>	'Iconsult',
			'rut'	=>	'76.298.728-7',
			'giro'	=>	'Servicios Informaticos',
			'email'	=>	'iconsult@iconsult.com'
		]);

		Empresa::create([
			'id'	=>	3,
			'nombre'	=>	'Noriega',
			'rut'	=>	'92.555.000-0',
			'giro'	=>	'Venta de Repuestos',
			'email'	=>	'noriega@noriega.cl'
		]);
	}

}