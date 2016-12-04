<?php
class  Dispatcher{
	var  $request;

	function __construct(){
		$this->request= new Request();
		Router::parse($this->request->url,$this->request);
		$controller = $this->loadController();
		$controller->view();
	}

	function loadController(){
		$name = ucfirst($this->request->controller).'Controller';
		$file= ROOT.DS.'controller'.DS.$name.'.php';
		require $file ; 
		$controller = new $name($this->request);
		return $controller;
	}

}

?>