<?php 
Class EquipsController extends BaseController{

	public function __construct() {
    	$this->beforeFilter('csrf', array('on'=>'post'));
    	$this->beforeFilter('auth', array('only'=>array('getFormEquip')));
	}

	

	public function getFormEquip(){
		

			return View::make('equips.form_equip');

	}


	public function postCreate() {
        $validator = Validator::make(Input::all(), Equip::$rules);
 
		if ($validator->passes()) {
		        // validation has passed, save user in DB
			$equip = new Equip;
		    $equip->nom = Input::get('nom');
		    $equip->lloc = Input::get('lloc');
		    $equip->save();
 
    		return Redirect::to('index')->with('message', Lang::get('text.equip ok'));
		} else {
		        // validation has failed, display error messages
			return Redirect::to('equip/form_equip')->with('message', Lang::get('text.equip !ok'))->withErrors($validator)->withInput();

		}
		
	}


}
 ?>
