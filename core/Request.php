<?php
class  Request{
    public $url;
    var $controller;
    var $action ; 
    var $params;
	function __construct(){
	  
	  $this->url	= $_SERVER['SCRIPT_NAME'] ;
	}

}

?>