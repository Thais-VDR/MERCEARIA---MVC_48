<?php
    //utilizamos a notação namespace em toda classe que criarmos 
    //daqui para frente. Dessa forma o autoload do composer
    //vai conseguir identificar o local da sua classe 
    namespace App;

use Core\init\Bootstrap;

    class Route extends Bootstrap {
        

        //Função que configura as rotas disponiveis no nosso site
        public function initRoutes() {
            //difinição dos caminhos digitados no navegador, onde:
            //route será a url digitada
            //controller sera o controlador responsavel por abrir essa pagina
            //action será a pagina a ser aberta
            $routes['home'] = array (
                'route'         =>      '/',
                'controller'    =>      'indexController',
                'action'        =>      'index'
            );

            $routes['sobre_nos'] = array (
                'route'         =>      '/sobre_nos',
                'controller'    =>      'indexController',
                'action'        =>      'sobre_nos'
            );           

            $this->setRoutes($routes);
        }

 
    }
?>