<?php
namespace Core;
use \Models\Registros;


class Controller {

	public function __construct() {
		
    }

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
	    
	    if(@$_SESSION['sihb_login']) {
	        $r = new Registros();
	        $username = $r->getUserByAcessoID($_SESSION['sihb_login']);
	        $registro = $username['id_registro'];
	        
	    }
	    
	    
		require 'Views/template2.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$viewName.'.php';
	}

}
