<?php namespace Remuneracion\Entidades;

class Empresa extends \Eloquent {
	protected $fillable = [];

	public function trabajadores(){
		return $this->hasMany('Remuneracion\Entidades\Trabajador');
	}
}

