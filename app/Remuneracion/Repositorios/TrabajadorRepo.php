<?php

namespace Remuneracion\Repositorios;

use Remuneracion\Entidades\Trabajador;

class TrabajadorRepo extends BaseRepo{

	public function getModel(){
		return new Trabajador;
	}

}