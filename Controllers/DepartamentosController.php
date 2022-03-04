<?php

namespace Controllers;

use \Core\Controller;
use \Models\Acesso;
use \Models\Noticias;
use \Models\Textos;

class DepartamentosController extends Controller
{

	private $user;
	private $arrayInfo;

	public function __construct()
	{
		parent::__construct();

		$this->acesso = new Acesso();

		$this->acesso->isLogged();
		$n = new Noticias();		
		$this->arrayInfo = array(
			'page_active' => 'departamentos',
			'pageName' => '',
			'description' => '',
			'acesso' => $this->acesso,
			'destacadas' => $n->getDestacadas()
		);
	}

	/*
		Configuração da Página Inicial do site
	*/
	public function index()
	{

		$this->arrayInfo['page_active'] = 'home';
		$this->arrayInfo['pageName'] = 'Início';
		
		/* Fara com que a página seja carregada */
		$this->loadTemplate('home', $this->arrayInfo);
    }
    
    /*
		Configuração da Página Departamentos/Educação e Civismo do site
	*/
	public function organizacao()
	{
		$this->arrayInfo['pageName'] = 'Unidade de Organização';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(9);
		
		/* Fara com que a página seja carregada */
		$this->loadTemplate('unidades/organizacao', $this->arrayInfo);
    }
    
    /*
		Configuração da Página Departamentos/Jurídico do site
	*/
	public function juridico()
	{
        $this->arrayInfo['pageName'] = 'Jurídico';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(10);
		
		/* Fara com que a página seja carregada */
		$this->loadTemplate('unidades/juridico', $this->arrayInfo);
    }
    
    /*
		Configuração da Página Departamentos/Comunicação do site
	*/
	public function instrucao()
	{
        $this->arrayInfo['pageName'] = 'Unidade de Instrução';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(11);
		
		/* Fara com que a página seja carregada */
		$this->loadTemplate('unidades/instrucao', $this->arrayInfo);
    }

    /*
		Configuração da Página Departamentos/Logística e RH do site
	*/
	public function comunicacao()
	{
        $this->arrayInfo['pageName'] = 'Unidade de Comunicação';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(12);
		
		/* Fara com que a página seja carregada */
		$this->loadTemplate('unidades/comunicacao', $this->arrayInfo);
    }
}
