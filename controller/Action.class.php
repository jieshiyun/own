<?php

class Action{


	public function rander($name,$data){
		include('view/'.$name.'.html');
	}

	public function loadModel($name){
		include('model/'.$name.'Operator.class.php');
		$classname = $name.'Operator';
		$this->$name  = new $classname;
		
	}

	public function redirect($module,$action,$key){
		echo "<script> alert('$key sucess'); location.href='?action=$action&module=$module'; </script>";
	}

	public function get($key){
		if(empty($_GET[$key]))
			return null;
		else 
			return $_GET[$key];

	}

}