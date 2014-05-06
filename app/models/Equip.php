<?php


class Equip extends Eloquent{

	protected $table = 'equip';
	protected $fillable = array('id', 'nom', 'ciutat');

	public function incidencies(){

        return $this->hasMany('Incidencia', 'id_equip');
    }

    public static $rules = array(
	    'nom'=>'required|min:2',
	    'lloc'=>'required|min:2',
    );

}