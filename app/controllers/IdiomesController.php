 <?php
 class IdiomesController extends BaseController{

 	 public function selecciona($idioma){
 	 	Session::put('locale',$idioma);
 	 	return Redirect::to('/');

    }

 }