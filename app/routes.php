<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
if(Session::has('locale')){
	App::setLocale(Session::get('locale'));
}

Route::get('/', function()
{
    return Redirect::to('index');
});

//USUARIS
Route::get('index', array('uses' => 'UsersController@getIndex'));
Route::get('users/register', array('uses' => 'UsersController@getRegister'));
Route::get('users/login', array('uses' => 'UsersController@getLogin'));

Route::get('users/logout', array('uses' => 'UsersController@getLogout'));

Route::post('users/create', array('uses' => 'UsersController@postCreate'));
Route::post('users/signin', array('uses' => 'UsersController@postSignin'));

//INCIDENCIES
Route::get('incidencies/nova', array('uses' => 'IncidenciesController@getFormIncidencia'));
Route::get('incidencies/form_modifica', array('uses' => 'IncidenciesController@getFormModifica'));
Route::get('incidencies/llista', array('uses' => 'IncidenciesController@getLlistaArreglat'));

Route::post('incidencies/create', array('uses' => 'IncidenciesController@postCreate'));
Route::post('incidencies/modifica', array('uses' => 'IncidenciesController@postModifica'));

//EQUIPS
Route::get('equip/form_equip', array('uses' => 'EquipsController@getFormEquip'));

Route::post('equip/create', array('uses' => 'EquipsController@postCreate'));

//LLENGUES

Route::get('idioma/{idioma}', array('uses' => 'IdiomesController@selecciona'));

