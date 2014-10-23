<?php

namespace Remuneracion\Repositorios;

use Remuneracion\Entidades\Empresa;

class EmpresaRepo{

	public function find($id){
		return Empresa::find($id);
	}

}