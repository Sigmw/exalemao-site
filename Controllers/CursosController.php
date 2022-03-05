<?php

namespace Controllers;

use \Core\Controller;
use \Models\Acesso;
use \Models\Cursos;
use \Models\Textos;

class CursosController extends Controller
{

	private $acesso;
	private $arrayInfo;

	public function __construct()
	{
		parent::__construct();

		$this->acesso = new Acesso();

        if (!$this->acesso->isLogged()) {
            $_SESSION['aviso_registro'] = 'Efetue login para ter acesso a loja do site!';
            header("Location: ".BASE);
        }

        if ($this->acesso->getInfo('confirmado') != 1) {
            $_SESSION['aviso_registro'] = 'Confirme sua conta para ter acesso a loja do site!';
            header("Location: ".BASE);
		}
			
		$this->arrayInfo = array(
			'page_active' => 'cursos',
			'pageName' => '',
			'description' => '',
			'acesso' => $this->acesso,
		);
	}

	/*
		Configuração da Página Inicial da Cursos
	*/
	
}
