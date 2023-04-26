<?php 
    namespace App\database;

use PDO;
use PDOException;

    class Connection {

        //static não precisa criar um objeto da classe
        //conetion para usar o metodo getDb(), nesse
        //caso podemo importar a classe com "use" e usar
        //o nome da classe seguido dois pontos
        //ex: Connection: :getDb()

        public static function getDb(){

            #Informaçoes sobre o banco de dados
            $host    =    "localhost";
            $db_name =    "meuEmprego_m48";
            $user    =    "root";
            $pass    =    "sucesso";
            $port    =    3306;
            $charset =    "utf8";
            $db_driver =  "mysql";

            #Informaçoes do sistema
            $sis_nome = "MVC M48";
            $sis_email = "thais@mt.estudante.senai.br";

            try{
                $conn = new PDO(
                    $db_driver.
                    ':host=' . $host.
                    ';dbname=' . $db_name .
                    ';port=' . $port .
                    ';charset=' . $charset,
                    $user,
                    $pass
                 );
     
                 return $conn;
             
            }catch(PDOException $erro) {
            die("Erro de Conexão: " . $erro->getMessage());
            }
          }
        }

        
    
?>