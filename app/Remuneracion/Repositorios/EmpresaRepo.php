<?php

namespace Remuneracion\Repositorios;

use Remuneracion\Entidades\Empresa;

class EmpresaRepo extends BaseRepo{

	public function getModel(){
		return new Empresa;
	}

}