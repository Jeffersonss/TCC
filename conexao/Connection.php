<?php
abstract class Connection {

    
    public static function getConnection(){
            try{
                $pdo = new PDO('mysql:dbname=Siels;host=127.0.0.1','root','');
                return $pdo;    
            }
            catch(PDOException $ex){
                echo 'Falha na execução:' . $ex->getMessage();
                echo "Erro: ".$ex->getMessage();
                echo " Linha: ".$ex->getLine();
                echo "Arquivo: ".$ex->getFile();
            }

        }
    }
?>

