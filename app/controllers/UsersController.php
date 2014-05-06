<?php 
Class UsersController extends BaseController{

	public function __construct() {
    	$this->beforeFilter('csrf', array('on'=>'post'));
    	
	}

	public function getRegister(){
		return View::make('users.register');
	}

	public function getIndex(){
		return View::make('index');
	}

	public function getLogin() {
    	return View::make('users.login');
	}


	public function postCreate() {
        $validator = Validator::make(Input::all(), User::$rules);
 
		if ($validator->passes()) {
		        // validation has passed, save user in DB
			$user = new User;
		    $user->nom = Input::get('nom');
		    $user->cognom = Input::get('cognom');
		    $user->email = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
		    $user->save();
 
    		return Redirect::to('users/login')->with('message', Lang::get('text.registrat'));
		} else {
		        // validation has failed, display error messages
			return Redirect::to('users/register')->with('message', Lang::get('text.mal registrat'))->withErrors($validator)->withInput();

		}
		
	}

	public function postSignin() {
             
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
	    	return Redirect::to('index')->with('message', Lang::get('text.logok'));
		} else {
		    return Redirect::to('users/login')
		        ->with('message', Lang::get('text.log incorrecte'))
		        ->withInput();
		}
	}

	public function getLogout() {
    	Auth::logout();
    	return Redirect::to('index')->with('message', Lang::get('text.logout'));
	}


}
 ?>