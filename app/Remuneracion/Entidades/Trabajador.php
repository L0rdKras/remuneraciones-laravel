<?php namespace Remuneracion\Entidades;

class Trabajador extends \Eloquent {
	protected $fillable = array('nombre','email','sueldo_base','empresa_id');
	protected $table = 'trabajadores';

	public function empresa(){
		return $this->belongsTo('Remuneracion\Entidades\Empresa');
	}
}