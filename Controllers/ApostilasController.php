<?php

namespace Controllers;

use \Core\Controller;
use \Models\Acesso;
use \Models\Noticias;
use \Models\Textos;
use \Models\Registros;

class ApostilasController extends Controller
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
			'page_active' => 'apostilas',
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
		Configuração da Página Apostilas/treinamento_de_estagiarios do site
	*/

    /*public function tfpe()
    {
        
        $this->arrayInfo['pageName'] = 'TFPE';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(13);

        /* Fara com que a página seja carregada */
      //  $this->loadTemplate('apostilas/tfpe', $this->arrayInfo);
    //}
    
    /*
		Configuração da Página Apostilas/treinamento_de_agentes do site
	*/
   /*
    public function tfsa()
    {
        
        
          
	    
        
            $r = new Registros();
	        $username = $r->getUserByAcessoID($_SESSION['sihb_login']);
	        $patentepermission = $username['id_registro'];
          
          
          
        $this->arrayInfo['pageName'] = 'TFSA';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(14);

        /* Fara com que a página seja carregada */
    //    if($patentepermission['patente_id'] <= 16) {
  //          $this->loadTemplate('apostilas/tfsa', $this->arrayInfo);
  //      }
  //      else {
  //      $this->loadTemplate('home', $this->arrayInfo);
    //    }
  ///  }

    /*
		Configuração da Página Apostilas/treinamento_de_agentes_especiais do site
	*/
  /*  public function tfca()
    {
          $r = new Registros();
	        $username = $r->getUserByAcessoID($_SESSION['sihb_login']);
	        $patentepermission = $username['id_registro'];
          
        $this->arrayInfo['pageName'] = 'TFCA';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(15);

        if($patentepermission['patente_id'] <= 15) {
            $this->loadTemplate('apostilas/tfca', $this->arrayInfo);
        }
        else {
             $this->loadTemplate('home', $this->arrayInfo);
        }
    }
*/
    /*
		Configuração da Página Apostilas/treinamento_de_agentes_especiais do site
	*/
  /*  public function tfss()
    {
        
          $r = new Registros();
	        $username = $r->getUserByAcessoID($_SESSION['sihb_login']);
	        $patentepermission = $username['id_registro'];
          
          
        $this->arrayInfo['pageName'] = 'TFSS';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(16);

        if($patentepermission['patente_id'] <= 14) {
            $this->loadTemplate('apostilas/tfss', $this->arrayInfo);
        }
        else {
             $this->loadTemplate('home', $this->arrayInfo);
        }
    }*?

    /*
		Configuração da Página Apostilas/Pele e Cabelo do site
	*/
    public function pele_e_cabelo()
    {
        $this->arrayInfo['pageName'] = 'Pele e Cabelo';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(17);

        /* Fara com que a página seja carregada */
        $this->loadTemplate('apostilas/pele_e_cabelo', $this->arrayInfo);
    }

  

    /*
		Configuração da Página Apostilas/Discord do site
	*/
    public function teamspeak()
    {
        $this->arrayInfo['pageName'] = 'Teamspeak';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(19);

        /* Fara com que a página seja carregada */
        $this->loadTemplate('apostilas/teamspeak', $this->arrayInfo);
    }

    /*
		Configuração da Página Apostilas/Habbo Etiqueta do site
	*/


    /*
		Configuração da Página Apostilas/Blacklist do site
	*/


    /*
		Configuração da Página Apostilas/Como ser promovido? do site
	*/

    /*
		Configuração da Página Apostilas/Fardamentos do site
	*/
    public function fardamentos()
    {
        $this->arrayInfo['pageName'] = 'Fardamentos do Exército Alemão';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(27);

        /* Fara com que a página seja carregada */
        $this->loadTemplate('apostilas/fardamentos', $this->arrayInfo);
    }

    /*
		Configuração da Página Apostilas/Uniformes do site
	*/


    /*
		Configuração da Página Apostilas/Requisitos da Sede do site
	*/
   /* public function tfsg()
    {
         $r = new Registros();
	        $username = $r->getUserByAcessoID($_SESSION['sihb_login']);
	        $patentepermission = $username['id_registro'];
          
        $this->arrayInfo['pageName'] = 'TFSG';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(33);

   if($patentepermission['patente_id'] <= 13) {
            $this->loadTemplate('apostilas/tfsg', $this->arrayInfo);
        }
        else {
             $this->loadTemplate('home', $this->arrayInfo);
        }
    }*/

    /*
		Configuração da Página Apostilas/Combate de Fraudes Ideológicas do site
	*/
    /*public function tfte()
    {
          $r = new Registros();
	        $username = $r->getUserByAcessoID($_SESSION['sihb_login']);
	        $patentepermission = $username['id_registro'];
          
        $this->arrayInfo['pageName'] = 'TFTE';
		$t = new Textos();
		$this->arrayInfo['texto'] = $t->getTexto(35);

         if($patentepermission['patente_id'] <= 11) {
            $this->loadTemplate('apostilas/tfte', $this->arrayInfo);
        }
        else {
             $this->loadTemplate('home', $this->arrayInfo);
        }
    }*/

    /*
		Configuração da Página Apostilas/Instruções de Ética e Conduta do site
	*/


}
