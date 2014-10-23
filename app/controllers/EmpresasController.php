<?php

//use Remuneracion\Entidades\Trabajador;
use Remuneracion\Repositorios\TrabajadorRepo;

class EmpresasController extends BaseController {

	protected $trabajadorRepo;

	public function __construct(TrabajadorRepo $trabajadorRepo){
		$this->trabajadorRepo = $trabajadorRepo;
	}

	public function empleados($slug,$id)
	{
		$empleado = $this->trabajadorRepo->find($id);

		return View::make('trabajadores/empresa', compact('empleado'));
	}

}