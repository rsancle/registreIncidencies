<?php


class Incidencia extends Eloquent{

	protected $table = 'incidencia';
	protected $fillable = array('id', 'descripcio', 'arreglada', 'comentari');


	public static $rules = array(
		'id_equip'=>'required',
	    'descripcio'=>'required|min:2',
    );
    public static $rules2 = array(
		'id'=>'required',
	    'comentari'=>'required|min:2',
	    'arreglada'=>'required|min:1',
    );


    public function equip(){
        return $this->belongsTo('Equip');
    }


}