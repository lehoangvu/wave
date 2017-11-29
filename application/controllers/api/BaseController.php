<?php

class BaseController extends ApiBaseController{

	public function indexAction() {
		// get arg dynamic
		$args = func_get_args();
		print_r($args);

		if(empty($args)) {
			echo 'Not found';
			return;
		}

		// parse to load model
		$modelString = "Entity\\". $args[0];
		$modelObject = new $modelString;
		var_dump($modelObject);

	}

	public function index(){
		echo "Due, go back now!";
	}
}
