<?php

//use Remuneracion\Entidades\Trabajador;
use Remuneracion\Repositorios\EmpresaRepo;

class TrabajadoresController extends BaseController {

	protected $empresaRepo;

	public function __construct(EmpresaRepo $empresaRepo){
		$this->empresaRepo = $empresaRepo;
	}

	public function empresas($slug,$id)
	{
		$empresa = $this->empresaRepo->find($id);

		return View::make('trabajadores/empresa', compact('empresa'));
	}

}