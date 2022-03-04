<?php

namespace Controllers;

use \Core\Controller;
use \Models\Acesso;
use \Models\Noticias;
use \Models\Textos;

class FinanceiroController extends Controller
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
      'page_active' => 'armas',
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
		Configuração da Página Extras/Quadro de Acionistas do site
	*/
  public function cargos_pagos()
  {
    $this->arrayInfo['pageName'] = 'Cargos Pagos';
    $t = new Textos();
    $this->arrayInfo['texto'] = $t->getTexto(22);

    /* Fara com que a página seja carregada */
    $this->loadTemplate('financeiro/cargos-pagos', $this->arrayInfo);
  }

  /*
		Configuração da Página Extras/Salários do site
	*/
  public function sihbcoins()
  {
    $this->arrayInfo['pageName'] = 'SIHBCoins';
    $t = new Textos();
    $this->arrayInfo['texto'] = $t->getTexto(35);

    /* Fara com que a página seja carregada */
    $this->loadTemplate('financeiro/sihbcoins', $this->arrayInfo);
  }
  
  /*
		Configuração da Página Extras/Salários do site
	*/
  public function cavalaria()
  {
    $this->arrayInfo['pageName'] = 'Arma de Cavalaria';
    $t = new Textos();
    $this->arrayInfo['texto'] = $t->getTexto(29);

    /* Fara com que a página seja carregada */
    $this->loadTemplate('armas/cavalaria', $this->arrayInfo);
  }

  /*
		Configuração da Página Extras/Sistema de Indicações do site
	*/
  public function infantaria()
  {
    $this->arrayInfo['pageName'] = 'Arma de Infantaria';
    $t = new Textos();
    $this->arrayInfo['texto'] = $t->getTexto(30);

    /* Fara com que a página seja carregada */
    $this->loadTemplate('armas/infantaria', $this->arrayInfo);
  }
}
