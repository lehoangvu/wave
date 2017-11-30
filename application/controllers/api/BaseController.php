<?php

class BaseController extends ApiBaseController{

	public function indexAction() {
		// get arg dynamic
		$args = func_get_args();
		// print_r($args);

		if(empty($args)) {
			$this->notFound();
		}

		// parse to load model
		$modelString = "Entity\\". $args[0];
		$modelObject = false;

		if(class_exists($modelString)) {
			$modelObject = new $modelString;
		} else {
			$this->notFound();
		}
		
		// call function 
		$firstAction = isset($args[1]) ? $args[1] : 'list';

		$requestMethod = strtolower($_SERVER['REQUEST_METHOD']);

		$result = $modelObject->call($firstAction, $requestMethod, array_merge($_POST, $_GET), $this->em);
		if($result === false) {
			$this->notFound();
		} else {
			$this->response($result);
		}

	}

	public function index(){
		echo "Due, go back now!";
	}

	public function notFound() {
		echo 'Not found';
		die;
	}

	public function response($result) {
		echo json_encode($result);
	}
}
