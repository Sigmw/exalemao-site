<?php

namespace Controllers;

use \Core\Controller;
use \Models\Acesso;
use \Models\Destaques;
use \Models\Noticias;
use \Models\Forum;
use \Models\Emblemas;
use \Models\Uteis;
use \Models\Ranking;
use \Models\Textos;

class HomeController extends Controller
{

	private $acesso;
	private $arrayInfo;

	public function __construct()
	{
		parent::__construct();

		$this->acesso = new Acesso();

		$this->acesso->isLogged();
		$n = new Noticias();		
		$this->arrayInfo = array(
			'page_active' => '',
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

		$d = new Destaques();
		$n = new Noticias();
		$f = new Forum();
		$e = new Emblemas();

		$this->arrayInfo['page_active'] = 'home';
		$this->arrayInfo['pageName'] = 'Início';
		$this->arrayInfo['u'] = new Uteis();
		$this->arrayInfo['destaque'] = $d->getDestaque();
		$this->arrayInfo['recentes'] = $n->getRecentes();
		$this->arrayInfo['f_recentes'] = $f->getRecentes();
		$this->arrayInfo['total_topicos'] = $f->getTotalTopicos();
		$this->arrayInfo['emblemas'] = $e->getAll();
		
		/* Fara com que a página seja carregada */
		$this->loadTemplate('home', $this->arrayInfo);
	}

	/*
		Configuração de Ouvidoria do site
	*/
	

	/*
		Configuração de Melhores da Semana do site
	*/

}
