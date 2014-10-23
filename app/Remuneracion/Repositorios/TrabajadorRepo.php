<?php

namespace Remuneracion\Repositorios;

use Remuneracion\Entidades\Trabajador;

class TrabajadorRepo{

	public function find($id){
		return Trabajador::find($id);
	}

}