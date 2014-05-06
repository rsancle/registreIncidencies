<?php 
Class IncidenciesController extends BaseController{

	public function __construct() {
    	$this->beforeFilter('csrf', array('on'=>'post'));
    	$this->beforeFilter('auth', array('only'=>array('getFormIncidencia', 'getFormIncidencia')));
	}

	

	public function getFormIncidencia(){
		
			$equips = Equip::all()->lists('nom','id');
			return View::make('incidencies.formIncidencia', array('equips'=>$equips));

	}

	public function getFormModifica(){
		
			$incidencies = Incidencia::where('arreglada','=', '0')->lists('descripcio','id');
			return View::make('incidencies.formModifica', array('incidencies'=>$incidencies));

	}

	public function getLlistaArreglat(){
		
			//$comments = Post::find(1)->comments()->where('title', '=', 'foo')->first();
			$inNoResoltes = Equip::join('incidencia', 'equip.id', '=', 'incidencia.id_equip')
								->where('incidencia.arreglada', '=','0')
								->orderBy('incidencia.created_at', 'asc')
								->get(array('equip.nom', 'equip.lloc','incidencia.descripcio', 'incidencia.comentari', 'incidencia.created_at'));

			$inResoltes = Equip::join('incidencia', 'equip.id', '=', 'incidencia.id_equip')
								->where('incidencia.arreglada', '=','1')
								->orderBy('incidencia.created_at', 'desc')
								->get(array('equip.nom', 'equip.lloc','incidencia.descripcio', 'incidencia.comentari', 'incidencia.created_at'));
			return View::make('incidencies.llistaOk', array('inNoResoltes'=>$inNoResoltes,'inResoltes'=>$inResoltes ));

	}

	public function postCreate() {
        $validator = Validator::make(Input::all(), Incidencia::$rules);
 
		if ($validator->passes()) {
		        // validation has passed, save user in DB
			$incidencia = new Incidencia;
		    $incidencia->descripcio = Input::get('descripcio');
		    $incidencia->arreglada = 0;
		    $incidencia->id_equip= Input::get('id_equip');
		    $incidencia->save();
 
    		return Redirect::to('index')->with('message', Lang::get('text.incidencia ok'));
		} else {
		        // validation has failed, display error messages
			return Redirect::to('incidencies/nova')->with('message', Lang::get('text.incidencia !ok'))->withErrors($validator)->withInput();

		}
		
	}

	public function postModifica() {
        $validator = Validator::make(Input::all(), Incidencia::$rules2);
 
		if ($validator->passes()) {
		        // validation has passed, save user in DB
			$incidencia = Incidencia::find( Input::get('id') );
		    $incidencia->comentari = Input::get('comentari');
		    $incidencia->arreglada = Input::get('arreglada');
		    $incidencia->save();
 
    		return Redirect::to('index')->with('message', Lang::get('text.incidencia ok'));
		} else {
		        // validation has failed, display error messages
			return Redirect::to('incidencies/form_modifica')->with('message', Lang::get('text.incidencia !ok'))->withErrors($validator)->withInput();

		}
		
	}

}
 ?>
