<?php
namespace App\model;

use PDO;

class ProdutoModel{
    //variavel que recebera a conexao com banco de dados
    //que sera a instancia PDO que é feita a partir do método getDb
    //da classe Connection
    protected $db;

    //construtor que recebe por parametro a instancia de PDO
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
public function getProdutos(){
    return array("Coca", "Psepsi");
}


}

