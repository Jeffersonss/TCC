<?php

include_once '../../conexao/Connection.php';
class ChapaDAO {
    
     public static  function CadChapa(Chapa $objChapa)
    {
    $pdo= Connection::getConnection();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $sql = "INSERT INTO chapa (id_chapa,nome_chapa,imagem_chapa) VALUES (:id_chapa,:nome_chapa,:imagem_chapa)";

        $stmt = $pdo->prepare($sql);
       $valor=$stmt->bindParam(":id_chapa",$objChapa->getId_chapa());
       $valor= $stmt->bindParam(":nome_chapa", $objChapa->getNome_chapa());
       $valor= $stmt->bindParam(":imagem_chapa", $objChapa->getImagem_chapa());
       
    $ok = $stmt->execute();
    return $ok;
    }
public  static function PesquisarChapa(Chapa $objChapa)
  {
            $pdo = Connection::getConnection();
      
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
     $ok= $pdo->prepare ("SELECT * FROM chapa where nome_chapa like '". $objChapa->getNome_chapa()."%'" );
      

      $ok->execute();
      $stmt=$ok->fetchall();
      return $stmt;

   }      
    
    
    
    }