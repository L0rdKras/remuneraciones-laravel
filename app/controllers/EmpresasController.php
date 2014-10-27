<?php

//use Remuneracion\Entidades\Trabajador;
use Remuneracion\Repositorios\EmpresaRepo;

class EmpresasController extends BaseController {

	protected $empresaRepo;

	public function __construct(EmpresaRepo $empresaRepo){
		$this->empresaRepo = $empresaRepo;
	}


	public function listado()
	{
		$empresa = $this->empresaRepo->all();

		//dd($empresa);
		return View::make('empresas/listado', compact('empresa'));
	}
}