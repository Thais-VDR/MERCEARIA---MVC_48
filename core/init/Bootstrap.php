<?php
    namespace Core\init;

   abstract class Bootstrap{

        //uma classe abstrata é dfinida como qualquer outra classe
        //é especial: não pode ser instanciada
        //Serverm como modelo para outras classe que a herdem
        //para ter um objeto da classe abstrata é necessário ter herança na classe
        //que a utilizar

        private $routes;

        //esse método abstrato vai ser implantado na classe herdeira ou classe filha
        abstract protected function initRoutes();



        //Método construtor é iniciado toda vez que chamamos a 
        //classe Route e nesse caso carrega o método
        // initRoutes (que contem as nossas rotas)
        public function __construct()
        {
            $this->initRoutes();
            $this->run($this->getUrl());
        }
        //Faz a inserção da rota no atributo $routes
        public function setRoutes(array $rota) {
            $this->routes = $rota;
        }
        //Pega o valor contido no atributo $routes
        public function getRoutes() {
            return $this->routes;
        }

        public function getUrl() {
            // retorna a url digitada no navegador em forma de string 
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH );
        }

        public function run($url) {       
            //laço para percorrer todo o  
            foreach ($this->getRoutes() as $indice => $route) {

                
                if($url == $route['route']) {
                    $class = "App\\controllers\\" . ucfirst($route['controller']);

                    //variavel $controller recebe a instancia do controlador
                    //indentificando a variavel $class - (Objeto)
                    $controller = new $class;

                    //caturamos qual a action solicitada pelo usuario a URL
                    $action = $route['action'];

                    //carregamos a pagina solicitada pelo usuario que esta salva
                    //na variavel $action
                    $controller->$action();                    
                }                
            }
        }
    }


?>