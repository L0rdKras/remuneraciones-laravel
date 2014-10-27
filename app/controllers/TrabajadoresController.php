<?php

//use Remuneracion\Entidades\Trabajador;
use Remuneracion\Repositorios\EmpresaRepo;
use Remuneracion\Repositorios\TrabajadorRepo;

use Remuneracion\Entidades\Trabajador;

class TrabajadoresController extends BaseController {

	protected $empresaRepo;
	protected $trabajadorRepo;

	public function __construct(EmpresaRepo $empresaRepo,TrabajadorRepo $trabajadorRepo){
		$this->empresaRepo = $empresaRepo;
		$this->trabajadorRepo = $trabajadorRepo;
	}

	public function empresas($slug,$id)
	{
		$empresa = $this->empresaRepo->find($id);

		return View::make('trabajadores/empresa', compact('empresa'));
	}


	public function show($slug,$id)
	{
		$trabajador = $this->trabajadorRepo->find($id);

		return View::make('trabajadores/show', compact('trabajador'));		
	}

	public function registro($slug,$id)
	{
		$empresa = $this->empresaRepo->find($id);

		return View::make('trabajadores/registro', compact('empresa'));
	}

	public function guardar($slug,$id)
	{
		$data = Input::only(['nombre','email','sueldo_base','empresa_id']);

		$rules = [
			'nombre'		=>	'required',
			'email'			=>	'required|email|unique:trabajadores,email',
			'sueldo_base'	=>	'required'
		];

		$validation= \Validator::make($data,$rules);

		if($validation->passes()){
			//Trabajador::create($data);
			$trabajador = new Trabajador($data);
			$trabajador->cargo = 'Empleado';
			$trabajador->slug = \Str::slug($trabajador->nombre);
			$trabajador->save();
			return Redirect::route('home');
		}
		return Redirect::back()->withInput()->withErrors($validation->messages());
	}
}