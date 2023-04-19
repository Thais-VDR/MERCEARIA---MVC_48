<?php

namespace App\controllers;

use Core\controller\Action;

use App\database\Connection;

Use App\model\ProdutoModel;

class IndexController extends Action {

   
    //no contexto de MVC os métodos são chamados de action
    public function index() {
        //$this->view->dados = array("BomBom", "boneco", "Barra chocolate");

        //Temos que criar uma instancia de conexao
        $conexao = Connection::getDb();

        $produto = new ProdutoModel($conexao);

        $produtos = $produto->getProdutos();

        //proxima aula...

        $this->render("index");
    }

    public function sobre_nos() {
        //$this->view->dados = array("INICIANDO A CONSTRUÇÃO DO LAYOUT DINAMICO", "MOUSE", "Teclado", "Pendrive", "Caixa de som");
        $this->render("sobre_nos", "layout2");
    }

    //responsavel por renderizar (exibir) a pagina na tela

}
?>